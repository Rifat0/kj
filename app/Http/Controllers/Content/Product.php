<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Session;

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
    	$product = DB::table('vendor_products')->where('product_number',$p_id)->first();
    	$vendor_product_images = DB::table('vendor_product_images')->where('product_number',$p_id)->first();
    	$category = DB::table('category_sub_category')->where('category_id',$cat_id)->first();
        $sub_category = DB::table('category_sub_category')->where('sub_category_id',$sub_cat_id)->first();
        return view('content.product',compact('product','category','sub_category','vendor_product_images'));
    }

    public function add_to_cart($id)
    {
        echo $id;
        $session_item = [ $id ];

        Session::push('cart_data', $session_item);

        print_r(Session::get('cart_data'));
    }

    public function cart_des()
    {
        // Session::forget('cart_data');

        print_r(Session::get('cart_data'));
    }
}
