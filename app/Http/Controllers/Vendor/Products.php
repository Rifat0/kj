<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Vendor_product_images;
use Carbon;
use Session;

class Products extends Controller
{
    public function products()
    {
        $products_data = DB::table('vendor_products')
                                ->where('vendore_user_id', Session::get('vendore_user_data')[0] ['vendore_user_id'])
                                ->where('product_status', '=', '1')
                                ->get();

        return view('vendor.products.products', compact('products_data'));
    }

    public function product_detail($id)
    {
        $product_data = DB::table('vendor_products')->where('product_number', $id)
                                                    ->first();

        $category = DB::table("category_sub_category")->where("category_id",$product_data->productCategory)->first();                                           
        $sub_category = DB::table("category_sub_category")->where("sub_category_id",$product_data->productSubCategory)->first();                                           
        $product_payment_delivery_data = DB::table('vendor_payment_delivery')->where('product_number', $id)->first();
        $product_images_data = DB::table('vendor_product_images')->where('product_number', $id)->first();
        return view('vendor.products.product_detail', compact('product_data','product_payment_delivery_data','product_images_data','category','sub_category'));
    }

    public function create_new_product()
    {
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->get();

        return view('vendor.products.create_new_product', compact('product_category'));
    }

    public function get_sub_category($id)
    {
        $sub_category = DB::table("category_sub_category")->where('sub_category_id', '!=', '0')->where("parent_category_id",$id)->pluck("sub_category_name","sub_category_id");
        $coun=count($sub_category);

        if($coun>0){
            return json_encode($sub_category);
        }else{
            $sub_category = array('0' => "No Sub Category Found");
            return json_encode($sub_category);
        }
    }

    public function store_new_product(Request $request)
    {
        // Product Validation
        $this->validate($request, [
            'productName'=> 'required|max:100',
            'productGenericName'=> 'required|max:100',
            'productDescription'=> 'required|max:500',
            'productKeyword'=> 'nullable|max:100',
            'productCategory'=> 'required',
            'productSubCategory'=> 'required',
            'stock_count'=> 'required',
            'keySpecification'=> 'required|max:3000',
            'productImage1'=> 'required|image|mimes:jpg,jpeg|max:5000',
            'productImage2'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage3'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage4'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage5'=> 'image|mimes:jpg,jpeg|max:5000',
            'partNumber'=> 'nullable|max:100',
            'menufacturer'=> 'nullable|max:100',
            'modelNumber'=> 'nullable|max:100',
            'accessories'=> 'nullable|max:100',
            'color'=> 'nullable|max:100',
            'pd_price'=> 'required|max:10',
            'minimumOrderQuantity'=> 'nullable|max:10',
            'pd_priceForOptional'=> 'nullable|max:10',
            'instantPrice'=> 'nullable|max:10',
            'fifteenDaysPrice'=> 'nullable|max:10',
            'thirteenDaysPrice'=> 'nullable|max:10',
            'p_d_p_u_length'=> 'nullable|max:10',
            'p_d_p_u_height'=> 'nullable|max:10',
            'weightPerPack'=> 'nullable|max:10',
            'exportCartonDimension'=> 'nullable|max:10',
            'exportCartonWeight'=> 'nullable|max:10',
            'DeliveryWithinState'=> 'nullable|max:10',
            'DeliveryWithinGR'=> 'nullable|max:10',
            'DeliveryOutsideGR'=> 'nullable|max:10',
            'DurationDeliveryWithinState'=> 'nullable|max:10',
            'DurationDeliveryWithinGR'=> 'nullable|max:10',
            'DurationDeliveryOutsideGR'=> 'nullable|max:10',
            'paymentMethod'=> 'required'
         ]);

        $vendore_user_id = $request->input('vendore_user_id');

        $vendore_product_number = DB::table('vendor_products')->where('vendore_user_id', $vendore_user_id)->orderBy('vendore_user_id', 'desc')->first();
        if ($vendore_product_number!=null) {
            $product_number = $vendore_product_number->product_number+1;
        } else {
            $product_number = $vendore_user_id;
        }

        if ($request->hasFile('productImage1')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $productImage1 = $request->productImage1;
            $extension = $productImage1->getClientOriginalExtension();
            $ciustom_productImage1 = $vendore_user_id.$product_number."1".".".$extension;
            $productImage1->move($destinationPath,$ciustom_productImage1);
        }else{
            $ciustom_productImage1="null";
        }

        if ($request->hasFile('productImage2')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $productImage2 = $request->productImage2;
            $extension = $productImage2->getClientOriginalExtension();
            $ciustom_productImage2 = $vendore_user_id.$product_number."2".".".$extension;
            $productImage2->move($destinationPath,$ciustom_productImage2);
        }else{
            $ciustom_productImage2="null";
        }


        if ($request->hasFile('productImage3')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $productImage3 = $request->productImage3;
            $extension = $productImage3->getClientOriginalExtension();
            $ciustom_productImage3 = $vendore_user_id.$product_number."3".".".$extension;
            $productImage3->move($destinationPath,$ciustom_productImage3);
        }else{
            $ciustom_productImage3="null";
        }


        if ($request->hasFile('productImage4')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $productImage4 = $request->productImage4;
            $extension = $productImage4->getClientOriginalExtension();
            $ciustom_productImage4 = $vendore_user_id.$product_number."4".".".$extension;
            $productImage4->move($destinationPath,$ciustom_productImage4);
        }else{
            $ciustom_productImage4="null";
        }


        if ($request->hasFile('productImage5')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $productImage5 = $request->productImage5;
            $extension = $productImage5->getClientOriginalExtension();
            $ciustom_productImage5 = $vendore_user_id.$product_number."5".".".$extension;
            $productImage5->move($destinationPath,$ciustom_productImage5);
        }else{
            $ciustom_productImage5="null";
        }


        /*Insert your data*/

        DB::table('vendor_products')
                ->insert(
                    [
                        'vendore_user_id' => $vendore_user_id,
                        'product_number' => $product_number,
                        'productName' => $request->input('productName'),
                        'stock_count' => $request->input('stock_count'),
                        'pd_price' => $request->input('pd_price'),
                        'productGenericName' => $request->input('productGenericName'),
                        'productDescription' => $request->input('productDescription'),
                        'productKeyword' => $request->input('productKeyword'),
                        'partNumber' => $request->input('partNumber'),
                        'menufacturer' => $request->input('menufacturer'),
                        'modelNumber' => $request->input('modelNumber'),
                        'supplyType' => $request->input('supplyType'),
                        'productCategory' => $request->input('productCategory'),
                        'productSubCategory' => $request->input('productSubCategory'),
                        'color' => $request->input('color'),
                        'accessories' => $request->input('accessories'),
                        'keySpecification' => $request->input('keySpecification'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        DB::table('vendor_product_images')
                ->insert( [
                        'vendore_user_id' => $vendore_user_id,
                        'product_number' => $product_number,
                        'productImage1'=>$ciustom_productImage1,
                        'productImage2'=>$ciustom_productImage2,
                        'productImage3'=>$ciustom_productImage3,
                        'productImage4'=>$ciustom_productImage4,
                        'productImage5'=>$ciustom_productImage5,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vendor_payment_delivery')
                ->insert(
                    [
                        'vendore_user_id' => $vendore_user_id,
                        'product_number' => $product_number,
                        'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
                        'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
                        'unitOfMeasure' => $request->input('unitOfMeasure'),
                        'pd_priceForOptional' => $request->input('pd_priceForOptional'),
                        'instantPrice' => $request->input('instantPrice'),
                        'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
                        'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
                        'dpu_w_p_length' => $request->input('dpu_w_p_length'),
                        'dpu_w_p_width' => $request->input('dpu_w_p_width'),
                        'dpu_w_p_height' => $request->input('dpu_w_p_height'),
                        'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
                        'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
                        'p_d_p_u_length' => $request->input('p_d_p_u_length'),
                        'p_d_p_u_width' => $request->input('p_d_p_u_width'),
                        'p_d_p_u_height' => $request->input('p_d_p_u_height'),
                        'weightPerPack' => $request->input('weightPerPack'),
                        'exportCartonDimension' => $request->input('exportCartonDimension'),
                        'exportCartonWeight' => $request->input('exportCartonWeight'),
                        'DeliveryWithinState' => $request->input('DeliveryWithinState'),
                        'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
                        'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
                        'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
                        'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
                        'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
                        'paymentMethod' => $request->input('paymentMethod'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/vendor/products/pending_review')->with('status', 'Product Created Successfully and wait for admin review!');
    }

    public function update_product($id)
    {
        $product_data = DB::table('vendor_products')->where('product_number', $id)
                                                    ->first();

        $category = DB::table("category_sub_category")->where("category_id",$product_data->productCategory)->first();                                           
        $sub_category = DB::table("category_sub_category")->where("sub_category_id",$product_data->productSubCategory)->first();                                           
        $product_payment_delivery_data = DB::table('vendor_payment_delivery')->where('product_number', $id)->first();
        $product_images_data = DB::table('vendor_product_images')->where('product_number', $id)->first();
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->get();
        return view('vendor.Products.update_product', compact('product_data','product_payment_delivery_data','product_images_data','category','sub_category','product_category'));
    }

    public function update_product_request(Request $request)
    {
        $this->validate($request, [
            'productName'=> 'required|max:100',
            'productGenericName'=> 'required|max:100',
            'productDescription'=> 'required|max:500',
            'productKeyword'=> 'nullable|max:100',
            'productCategory'=> 'required',
            'productSubCategory'=> 'required',
            'stock_count'=> 'required',
            'keySpecification'=> 'required|max:3000',
            'productImage1'=> 'required|image|mimes:jpg,jpeg|max:5000',
            'productImage2'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage3'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage4'=> 'image|mimes:jpg,jpeg|max:5000',
            'productImage5'=> 'image|mimes:jpg,jpeg|max:5000',
            'partNumber'=> 'nullable|max:100',
            'menufacturer'=> 'nullable|max:100',
            'modelNumber'=> 'nullable|max:100',
            'accessories'=> 'nullable|max:100',
            'color'=> 'nullable|max:100',
            'pd_price'=> 'required|max:10',
            'minimumOrderQuantity'=> 'nullable|max:10',
            'pd_priceForOptional'=> 'nullable|max:10',
            'instantPrice'=> 'nullable|max:10',
            'fifteenDaysPrice'=> 'nullable|max:10',
            'thirteenDaysPrice'=> 'nullable|max:10',
            'p_d_p_u_length'=> 'nullable|max:10',
            'p_d_p_u_height'=> 'nullable|max:10',
            'weightPerPack'=> 'nullable|max:10',
            'exportCartonDimension'=> 'nullable|max:10',
            'exportCartonWeight'=> 'nullable|max:10',
            'DeliveryWithinState'=> 'nullable|max:10',
            'DeliveryWithinGR'=> 'nullable|max:10',
            'DeliveryOutsideGR'=> 'nullable|max:10',
            'DurationDeliveryWithinState'=> 'nullable|max:10',
            'DurationDeliveryWithinGR'=> 'nullable|max:10',
            'DurationDeliveryOutsideGR'=> 'nullable|max:10',
            'paymentMethod'=> 'required'
         ]);

        $product_number = $request->input('product_number');

        $p_productImage1 = $request->input('p_productImage1');
        $p_productImage2 = $request->input('p_productImage2');
        $p_productImage3 = $request->input('p_productImage3');
        $p_productImage4 = $request->input('p_productImage4');
        $p_productImage5 = $request->input('p_productImage5');

        $destinationPath = 'public/backend/img/vendor/products/';

        if ($request->hasFile('p_productImage1') && $p_productImage1=='') {
            // previous image null but input file has
            $productImage1 = $request->productImage1;
            $extension = $productImage1->getClientOriginalExtension();
            $productImage1 = rand(1111,9999).".".$extension;
            $productImage1->move($destinationPath,$productImage1);

        }elseif( !empty($p_productImage1) && $request->hasFile('p_productImage1'))  {
            
            if(file_exists($destinationPath.$p_productImage1)){
              unlink($destinationPath.$p_productImage1);
            }

            $productImage1 = $request->productImage1;
            $extension = $productImage1->getClientOriginalExtension();
            $productImage1 = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$productImage1);

        }elseif (!empty($p_productImage1)) {
            $p_productImage1 = $request->p_productImage1;
        }
            DB::table('vendor_products')->where('id', $id)
                ->update(
                    [
                        'productName' => $request->input('productName'),
                        'productGenericName' => $request->input('productGenericName'),
                        'productDescription' => $request->input('productDescription'),
                        'productKeyword' => $request->input('productKeyword'),
                        'partNumber' => $request->input('partNumber'),
                        'menufacturer' => $request->input('menufacturer'),
                        'modelNumber' => $request->input('modelNumber'),
                        'supplyType' => $request->input('supplyType'),
                        'productCategory' => $request->input('productCategory'),
                        'productSubCategory' => $request->input('productSubCategory'),
                        'color' => $request->input('color'),
                        'accessories' => $request->input('accessories'),
                        'keySpecification' => $request->input('keySpecification'),
                        'vendor' => $request->input('vendor')
                    ]);

            DB::table('vendor_payment_delivery')->where('id', $id)
                        ->update(
                            [
                                'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
                                'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
                                'unitOfMeasure' => $request->input('unitOfMeasure'),
                                'pd_price' => $request->input('pd_price'),
                                'pd_priceForOptional' => $request->input('pd_priceForOptional'),
                                'instantPrice' => $request->input('instantPrice'),
                                'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
                                'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
                                'dpu_w_p_length' => $request->input('dpu_w_p_length'),
                                'dpu_w_p_width' => $request->input('dpu_w_p_width'),
                                'dpu_w_p_height' => $request->input('dpu_w_p_height'),
                                'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
                                'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
                                'p_d_p_u_length' => $request->input('p_d_p_u_length'),
                                'p_d_p_u_width' => $request->input('p_d_p_u_width'),
                                'p_d_p_u_height' => $request->input('p_d_p_u_height'),
                                'weightPerPack' => $request->input('weightPerPack'),
                                'exportCartonDimension' => $request->input('exportCartonDimension'),
                                'exportCartonWeight' => $request->input('exportCartonWeight'),
                                'DeliveryWithinState' => $request->input('DeliveryWithinState'),
                                'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
                                'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
                                'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
                                'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
                                'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
                                'paymentMethod' => $request->input('paymentMethod')
                            ]);
            
        
            DB::table('vendor_products')->where('id', $id)
                ->update(
                    [
                        'productName' => $request->input('productName'),
                        'productGenericName' => $request->input('productGenericName'),
                        'productDescription' => $request->input('productDescription'),
                        'productKeyword' => $request->input('productKeyword'),
                        'partNumber' => $request->input('partNumber'),
                        'menufacturer' => $request->input('menufacturer'),
                        'modelNumber' => $request->input('modelNumber'),
                        'supplyType' => $request->input('supplyType'),
                        'productCategory' => $request->input('productCategory'),
                        'productSubCategory' => $request->input('productSubCategory'),
                        'color' => $request->input('color'),
                        'accessories' => $request->input('accessories'),
                        'keySpecification' => $request->input('keySpecification'),
                        'vendor' => $request->input('vendor')
                    ]);

            DB::table('vendor_payment_delivery')->where('id', $id)
                    ->update(
                        [
                            'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
                            'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
                            'unitOfMeasure' => $request->input('unitOfMeasure'),
                            'pd_price' => $request->input('pd_price'),
                            'pd_priceForOptional' => $request->input('pd_priceForOptional'),
                            'instantPrice' => $request->input('instantPrice'),
                            'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
                            'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
                            'dpu_w_p_length' => $request->input('dpu_w_p_length'),
                            'dpu_w_p_width' => $request->input('dpu_w_p_width'),
                            'dpu_w_p_height' => $request->input('dpu_w_p_height'),
                            'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
                            'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
                            'p_d_p_u_length' => $request->input('p_d_p_u_length'),
                            'p_d_p_u_width' => $request->input('p_d_p_u_width'),
                            'p_d_p_u_height' => $request->input('p_d_p_u_height'),
                            'weightPerPack' => $request->input('weightPerPack'),
                            'exportCartonDimension' => $request->input('exportCartonDimension'),
                            'exportCartonWeight' => $request->input('exportCartonWeight'),
                            'DeliveryWithinState' => $request->input('DeliveryWithinState'),
                            'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
                            'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
                            'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
                            'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
                            'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
                            'paymentMethod' => $request->input('paymentMethod')
                        ]);


        return redirect('/vendor/products')->with('status', 'Product Updated Successfully!');
    }

    public function inventory_products()
    {
        $inventory_products = DB::table('vendor_products')
                                ->where('vendore_user_id', Session::get('vendore_user_data')[0] ['vendore_user_id'])
                                ->where('product_status', '=', '1')
                                ->get();
        return view('vendor.products.inventory_products',compact('inventory_products'));
    }

    public function stock_updaet(Request $request)
    {
        DB::table('vendor_products')->where('id', $request->input('product_number'))
                ->update(
                    [
                        'stock_count' => $request->input('stock_count'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/vendor/products/inventory_products')->with('status', 'Product Stock Updated Successfully!');
    }

    public function pending_review()
    {
        $products_pending_review = DB::table('vendor_products')
                                ->where('vendore_user_id', Session::get('vendore_user_data')[0] ['vendore_user_id'])
                                ->where('product_status', '!=', '1')
                                ->get();
        return view('vendor.products.pending_review',compact('products_pending_review'));
    }

    // Orders
    public function orders()
    {
        $vendor_products = DB::table('vendor_products')
                                ->where('vendore_user_id', Session::get('vendore_user_data')[0] ['vendore_user_id'])->pluck('product_number');
        $ordered_product = DB::table('ordered_product')->get();

        $order_id_array = array();
        
        foreach ($vendor_products as $vendor_product) {
            foreach ($ordered_product as $key => $order_product) {
                if ($vendor_product == $order_product->product_id) {
                    array_push($order_id_array,$order_product->order_id);
                }
            }
        }

        $order_data = array();

        foreach ($order_id_array as $value) {
            $orders = DB::table('order_data')
                        ->where('order_id',$value)->get();

            foreach ($orders as $values) {
                if ($values->shipping_country == null) {
                    $country = $values->country;
                    $city = $values->city;
                    $address = $values->address;
                } else {
                    $country = $values->shipping_country;
                    $city = $values->shipping_city;
                    $address = $values->shipping_address;
                }
                
                $person = DB::table('web_user')->where('web_user_id',$values->web_user_id)->pluck('company_name');

                if (count($person)>0) {
                    $user = $person;
                } else {
                    $user = "Guest";
                }
                

                $ordered = [
                        'order_id' => $values->order_id,
                        'status' => $values->status,
                        'ordrer_person' => $user,
                        'country' => $country,
                        'city' => $city,
                        'address' => $address,
                        'date' => $values->created_at
                    ];

                array_push($order_data,$ordered);
            }
        }

        return view('vendor.orders.orders',compact('order_data'));
    }

    public function orders_view($id)
    {
        $products = DB::table('ordered_product')
                                ->where('order_id', $id)
                                ->join('vendor_products', 'vendor_products.product_number', '=', 'ordered_product.product_id')
                                ->get();
        $order_data = DB::table('order_data')->where('order_id', $id)->first();

        return view('vendor.orders.order_view',compact('order_data','products'));
    }

    public function orders_accept($id)
    {
        DB::table('order_data')->where('order_id', $id)
                ->update(
                    [
                        'status' => "1",
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/vendor/orders')->with('status', 'Order accepted.');
    }

    public function orders_reject($id)
    {
        DB::table('order_data')->where('order_id', $id)
                ->update(
                    [
                        'status' => "2",
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/vendor/orders')->with('status', 'Order rejected.');
    }

    // Report
    public function report()
    {
        return view('vendor.report.report');
    }

}