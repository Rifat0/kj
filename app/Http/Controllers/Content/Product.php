<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Session;
use redirect;

class Product extends Controller
{
    public function get_category_product($cat_id)
    {
        $products = DB::table('vendor_products')
                        ->where('productCategory',$cat_id)
                        ->join('vendor_product_images', 'vendor_products.product_number', '=', 'vendor_product_images.product_number')
                        ->get();
        $category = DB::table('category_sub_category')->where('category_id',$cat_id)->first();
        return view('content.category',compact('products','category'));
    }

    public function get_sub_category_product($cat_id,$sub_cat_id)
    {
        $products = DB::table('vendor_products')
                        ->where('productSubCategory',$sub_cat_id)
                        ->join('vendor_product_images', 'vendor_products.product_number', '=', 'vendor_product_images.product_number')
                        ->get();
        $category = DB::table('category_sub_category')->where('category_id',$cat_id)->first();
        $sub_category = DB::table('category_sub_category')->where('sub_category_id',$sub_cat_id)->first();
        return view('content.sub_category',compact('products','category','sub_category'));
    }

    public function get_product($cat_id,$sub_cat_id,$p_id)
    {
        $product = DB::table('vendor_products')
                    ->where('product_number',$p_id)
                    ->join('vendore_user', 'vendor_products.vendore_user_id', '=', 'vendore_user.vendore_user_id')
                    ->first();
        $product_details = DB::table('vendor_payment_delivery')->where('product_number',$p_id)->first();
        $vendor_product_images = DB::table('vendor_product_images')->where('product_number',$p_id)->first();
        $related = DB::table('vendor_products')
                    ->where('productCategory',$cat_id)
                    ->join('vendor_product_images', 'vendor_products.product_number', '=', 'vendor_product_images.product_number')
                    ->get();
        $category = DB::table('category_sub_category')->where('category_id',$cat_id)->first();
        $sub_category = DB::table('category_sub_category')->where('sub_category_id',$sub_cat_id)->first();
        return view('content.product',compact('product','related','category','sub_category','vendor_product_images','product_details'));
    }

    public function add_to_cart($id)
    {
        if (Session::get('cart_data')>0) {

            foreach (Session::get('cart_data') as $value) {
                
                if ($value['product_id']==$id) {
                    $exists= true;
                }
            }
            if (isset($exists)) {
                return redirect()->back()->with('error_message', 'This product is exists in your shopping cart.');
            }else {
                $session_data = [
                        'product_id' => $id,
                        'quantity' => "1"
                    ];

                Session::push('cart_data', $session_data);
                return redirect()->back()->with('status', 'This product added in your shopping cart.');
            }
            
        }else{
            $session_data = [
                    'product_id' => $id,
                    'quantity' => "1"
                ];

            Session::push('cart_data', $session_data);
            return redirect()->back()->with('status', 'This product added in your shopping cart.');
        }
        
    }

    public function update_cart(Request $cart_data)
    {
        $this->validate($cart_data, [
            'quantity'=> 'required|min:1'
         ]);

        $count=count($cart_data->nop)+1;

        if ($count>1) {
            Session::forget('cart_data');
        }

        for ($i=1; $i < $count; $i++) { 

            $session_data = [
                'product_id' => $cart_data->product_id[$i],
                'quantity' => trim($cart_data->quantity[$i])
            ];

            Session::push('cart_data', $session_data);

        }

        return redirect('/cart_item')->with('status', 'Your shopping cart has been updated successfully. ');

    }

    public function remove_cart_product($key)
    {
        if (session()->has('cart_data')) {

            $session_count = count(Session::get('cart_data'));
            if ($session_count>0) {

                $products = session()->pull('cart_data', []);
                if(array_key_exists($key, $products) == true) {
                    unset($products[$key]);
                    $count_products = count($products);
                    if ($count_products>0) {
                        session()->put('cart_data', $products);
                        return redirect('/cart_item')->with('status', 'Product has been removed fro your shopping cart.');
                    }else{
                        Session::flash('cart_data');
                        Session::reflash('cart_data');
                        return redirect()->back();
                    }
                }
            }
        }
        
    }

    public function add_to_wishlist($id)
    {
        if (session()->has('web_user_data')) {
            DB::table('wishlist')
                ->insert(
                    [
                        'user_id' => Session::get('web_user_data')[0] ['web_user_id'],
                        'product_id' => $id,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
            return redirect()->back()->with('status', 'Product has been added in you wishlist.');
        }else{
            return redirect()->back()->with('error_message', 'You need to singin or singup to add the product in wishlist.');
        }
    }

    public function review_submit(Request $review)
    {
        if (session()->has('web_user_data')) {
            $this->validate($review, [
            'review'=> 'required',
            'rating'=> 'required|min:1'
            ]);
        }else{
            return redirect()->back()->with('error_message', 'You need to singin or singup to add the product in wishlist.');
        }
    }
}
