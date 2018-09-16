<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Vendor_product_images;

class Products extends Controller
{
    public function products()
    {
        $get_products = DB::table('vendor_products')->get();
        $get_payment_delivery = DB::table('vendor_payment_delivery')->get();

        return view('vendor.products.products', compact('get_products', 'get_payment_delivery'));
    }

    public function create_new_product()
    {
        return view('vendor.products.create_new_product');
    }

    public function store_new_product(Request $request)
    {
        // Product Validation
        // $this->validate($request, [
        //     'productName'=> 'required',
        //     'productGenericName'=> 'required',
        //     'productDescription'=> 'required',
        //     'productCategory'=> 'required',
        //     'productSubCategory'=> 'required',
        //     'keySpecification'=> 'required',
        //     'productImage'=> 'required'
        //  ]);

        // Payment & Delivery Information Validation
        // $this->validate($request, [
        //     'pd_price'=> 'required',
        //     'paymentMethod'=> 'required'
        //  ]);

        $updateImg = "";
        if ($request->hasFile('productImage')) {
            $destinationPath = 'public/backend/img/vendor/products';
            $file = $request->productImage;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $updateImg = $fileName;
        }
        /*Insert your data*/

        DB::table('vendor_products')
                ->insert(
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

        DB::table('vendor_product_images')
                ->insert( [
                        'productImage'=>$updateImg
                        //you can put other insertion here
        ]);

        DB::table('vendor_payment_delivery')
                ->insert(
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

        return redirect('/vendor/products')->with('status', 'Product Created Successfully!');
    }

    public function product_detail($id)
    {
        $get_product_detail = DB::table('vendor_products')->where('id', $id)->get();
        $get_payment_delivery = DB::table('vendor_payment_delivery')->where('id', $id)->get();
        $get_product_images = DB::table('vendor_product_images')->where('id', $id)->get();

        return view('vendor.products.product_detail', compact('get_product_detail', 'get_product_images', 'get_payment_delivery'));
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
        // Product Validation
        // $this->validate($request, [
        //     'productName'=> 'required',
        //     'productGenericName'=> 'required',
        //     'productDescription'=> 'required',
        //     'productCategory'=> 'required',
        //     'productSubCategory'=> 'required',
        //     'keySpecification'=> 'required',
        //     'productImage'=> 'required'
        //  ]);

        // Payment & Delivery Information Validation
        // $this->validate($request, [
        //     'pd_price'=> 'required',
        //     'paymentMethod'=> 'required'
        //  ]);

        $id = $request->input('id');

        // Store Logo Logic
        $logo_id = $request->input('id');
        $previousProductImg = $request->input('previousProductImg');

        $files = Vendor_product_images::find($logo_id);
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
        return view('vendor.products.inventory_products');
    }

    public function pending_review()
    {
        return view('vendor.products.pending_review');
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