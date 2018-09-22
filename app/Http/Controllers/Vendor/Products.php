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
        $get_product_detail = DB::table('vendor_products')->where('id', $id)->get();
        $get_payment_delivery = DB::table('vendor_payment_delivery')->where('id', $id)->get();
        $get_product_images = DB::table('vendor_product_images')->where('id', $id)->get();

        return view('vendor.products.update_product', compact('get_product_detail', 'get_product_images', 'get_payment_delivery'));
    }

    public function update_product_request(Request $request)
    {
        $this->validate($request, [
            'productName'=> 'required|max:100',
            'productGenericName'=> 'required|max:100',
            'productDescription'=> 'required|max:100',
            'productKeyword'=> 'nullable|max:100',
            'productCategory'=> 'required',
            'productSubCategory'=> 'required',
            'keySpecification'=> 'required|max:3000',
            'productImage'=> 'image|mimes:jpg,jpeg|max:5000',
            'partNumber'=> 'nullable|max:100',
            'menufacturer'=> 'nullable|max:100',
            'modelNumber'=> 'nullable|max:100',
            'accessories'=> 'nullable|max:100',
            'vendor'=> 'nullable|max:100',
            'dpu_w_p_length'=> 'nullable|max:10',
            'dpu_w_p_width'=> 'nullable|max:10',
            'dpu_w_p_height'=> 'nullable|max:10',
            'dpu_w_p_weight'=> 'nullable|max:10',
            'dpu_w_p_volume'=> 'nullable|max:10',
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

        $id = $request->input('id');

        // Store Logo Logic
        $prooductImg_id = $request->input('id');
        $previousProductImg = $request->input('previousProductImg');

        $files = Vendor_product_images::find($prooductImg_id);
        $filedelete = $files['productImage'];

        $pathToYourFile = 'public/backend/img/vendor/products/'.$filedelete ;

        if ($request->hasFile('productImage') && $previousProductImg=='') {
            // previous image null but input file has
            $destinationPath = 'public/backend/img/vendor/products/';
            $file = $request->productImage;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $img = $fileName;
            
            DB::table('vendor_product_images')->where('id', $id)
                ->update(
                    [
                        'productImage' => $img
                    ]);

        }elseif( !empty($previousProductImg) )  {
            
            $id = $request->input('id');

            if ($request->hasFile('productImage')) {
                if(file_exists($pathToYourFile)) // make sure it exits inside the folder
            {
              unlink($pathToYourFile); // delete file/image
              // and delete the record from database
            }

            $destinationPath = 'public/backend/img/vendor/products/';
            $file = $request->productImage;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $img = $fileName;

            DB::table('vendor_product_images')->where('id', $id)
                ->update(
                    [
                        'productImage' => $img
                    ]);

            }else {
                $id = $request->input('id');
                $id = $request->input('id');
                $pathToYourFile = 'public/backend/img/vendor/products/'.$previousProductImg ;

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
            }
        }else{
            $id = $request->input('id');

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

            DB::table('vendor_product_images')->where('id', $id)
                ->update(
                    [
                        'productImage' => $previousProductImg
                    ]);
        }

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
        return view('vendor.orders.orders');
    }

    // Report
    public function report()
    {
        return view('vendor.report.report');
    }

}