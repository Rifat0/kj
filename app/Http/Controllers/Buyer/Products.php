<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Vendor_product_images;

use Auth;
use Session;

class Products extends Controller
{
    // Orders
    public function orders()
    {
        
        return view('buyer.products.orders');
    }

    // Report
    public function report()
    {
        return view('buyer.products.report');
    }

    // Accounting
    public function accounting()
    {
        return view('buyer.products.accounting');
    }

    // accountSummery
    public function accountSummery()
    {
        return view('buyer.products.accountSummery');
    }

    // dueAndOutstandingPayment
    public function dueAndOutstandingPayment()
    {
        return view('buyer.products.dueAndOutstandingPayment');
    }

    // browesProducts
    public function myVendorProducts()
    {
        return view('buyer.products.myVendorProducts');
    }

    // dueAndOutstandingPayment
    public function supplierResearchAndSelection()
    {
        return view('buyer.supplier.supplierResearchAndSelection');
    }

    // messages
    public function messages()
    {
        return view('buyer.communication.message');
    }

    // favoriteAndCreditVendors
    public function favoriteAndCreditVendors()
    {
        return view('buyer.supplier.favoriteAndCreditVendors');
    }

    // tendersAndBids
    public function tendersAndBids()
    {
        return view('buyer.supplier.tendersAndBids');
    }

    // sendRFQ
    public function sendRFQ()
    {
        return view('buyer.supplier.sendRFQ');
    }

    // vendorProfile
    public function vendorProfile()
    {
        return view('buyer.supplier.vendorProfile');
    }

    // public function products()
    // {
    //     $get_products = DB::table('vendor_products')->get();
    //     $get_payment_delivery = DB::table('vendor_payment_delivery')->get();

    //     return view('vendor.products.products', compact('get_products', 'get_payment_delivery'));
    // }

    // public function create_new_product()
    // {
    //     $product_category = DB::table('product_category')->get();

    //     return view('vendor.products.create_new_product', compact('product_category'));
    // }

    // public function sub_category()
    // {
    //     if (isset($_GET['key'])) {
    //         $category_id = $_GET['key'];

    //         $sub_category = DB::table('product_sub_category')->where('category_id', '=', $category_id)->get();

    //         return json_encode($sub_category);
        
    //     }
    // }

    // public function store_new_product(Request $request)
    // {
    //     // Product Validation
    //     $this->validate($request, [
    //         'productName'=> 'required|max:100',
    //         'productGenericName'=> 'required|max:100',
    //         'productDescription'=> 'required|max:100',
    //         'productKeyword'=> 'nullable|max:100',
    //         'productCategory'=> 'required',
    //         'productSubCategory'=> 'required',
    //         'keySpecification'=> 'required|max:3000',
    //         'productImage'=> 'required|image|mimes:jpg,jpeg|max:5000',
    //         'partNumber'=> 'nullable|max:100',
    //         'menufacturer'=> 'nullable|max:100',
    //         'modelNumber'=> 'nullable|max:100',
    //         'accessories'=> 'nullable|max:100',
    //         'vendor'=> 'nullable|max:100',
    //         'color'=> 'nullable|max:100',
    //         'pd_price'=> 'required|max:10',
    //         'minimumOrderQuantity'=> 'nullable|max:10',
    //         'pd_priceForOptional'=> 'nullable|max:10',
    //         'instantPrice'=> 'nullable|max:10',
    //         'fifteenDaysPrice'=> 'nullable|max:10',
    //         'thirteenDaysPrice'=> 'nullable|max:10',
    //         'p_d_p_u_length'=> 'nullable|max:10',
    //         'p_d_p_u_height'=> 'nullable|max:10',
    //         'weightPerPack'=> 'nullable|max:10',
    //         'exportCartonDimension'=> 'nullable|max:10',
    //         'exportCartonWeight'=> 'nullable|max:10',
    //         'DeliveryWithinState'=> 'nullable|max:10',
    //         'DeliveryWithinGR'=> 'nullable|max:10',
    //         'DeliveryOutsideGR'=> 'nullable|max:10',
    //         'DurationDeliveryWithinState'=> 'nullable|max:10',
    //         'DurationDeliveryWithinGR'=> 'nullable|max:10',
    //         'DurationDeliveryOutsideGR'=> 'nullable|max:10',
    //         'paymentMethod'=> 'required'
    //      ]);
        
    //     $id = $request->input('vendore_user_id');
    //     $store_id = $id;

    //     $updateImg = "";
    //     if ($request->hasFile('productImage')) {
    //         $destinationPath = 'public/backend/img/vendor/products';
    //         $file = $request->productImage;
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = rand(1111,9999).".".$extension;
    //         $file->move($destinationPath,$fileName);
    //         $updateImg = $fileName;
    //     }
    //     /*Insert your data*/

    //     DB::table('vendor_products')
    //             ->insert(
    //                 [
    //                     'vendore_user_id' => $store_id,
    //                     'productName' => $request->input('productName'),
    //                     'productGenericName' => $request->input('productGenericName'),
    //                     'productDescription' => $request->input('productDescription'),
    //                     'productKeyword' => $request->input('productKeyword'),
    //                     'partNumber' => $request->input('partNumber'),
    //                     'menufacturer' => $request->input('menufacturer'),
    //                     'modelNumber' => $request->input('modelNumber'),
    //                     'supplyType' => $request->input('supplyType'),
    //                     'productCategory' => $request->input('productCategory'),
    //                     'productSubCategory' => $request->input('productSubCategory'),
    //                     'color' => $request->input('color'),
    //                     'accessories' => $request->input('accessories'),
    //                     'keySpecification' => $request->input('keySpecification'),
    //                     'vendor' => $request->input('vendor')
    //                 ]);

    //     DB::table('vendor_product_images')
    //             ->insert( [
    //                     'vendore_user_id' => $store_id,
    //                     'productImage'=>$updateImg
    //                     //you can put other insertion here
    //     ]);

    //     DB::table('vendor_payment_delivery')
    //             ->insert(
    //                 [
    //                     'vendore_user_id' => $store_id,
    //                     'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
    //                     'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
    //                     'unitOfMeasure' => $request->input('unitOfMeasure'),
    //                     'pd_price' => $request->input('pd_price'),
    //                     'pd_priceForOptional' => $request->input('pd_priceForOptional'),
    //                     'instantPrice' => $request->input('instantPrice'),
    //                     'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
    //                     'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
    //                     'dpu_w_p_length' => $request->input('dpu_w_p_length'),
    //                     'dpu_w_p_width' => $request->input('dpu_w_p_width'),
    //                     'dpu_w_p_height' => $request->input('dpu_w_p_height'),
    //                     'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
    //                     'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
    //                     'p_d_p_u_length' => $request->input('p_d_p_u_length'),
    //                     'p_d_p_u_width' => $request->input('p_d_p_u_width'),
    //                     'p_d_p_u_height' => $request->input('p_d_p_u_height'),
    //                     'weightPerPack' => $request->input('weightPerPack'),
    //                     'exportCartonDimension' => $request->input('exportCartonDimension'),
    //                     'exportCartonWeight' => $request->input('exportCartonWeight'),
    //                     'DeliveryWithinState' => $request->input('DeliveryWithinState'),
    //                     'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
    //                     'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
    //                     'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
    //                     'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
    //                     'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
    //                     'paymentMethod' => $request->input('paymentMethod')
    //                 ]);

    //     return redirect('/vendor/products')->with('status', 'Product Created Successfully!');
    // }

    // public function update_product($id)
    // {
    //     $get_product_detail = DB::table('vendor_products')->where('id', $id)->get();
    //     $get_payment_delivery = DB::table('vendor_payment_delivery')->where('id', $id)->get();
    //     $get_product_images = DB::table('vendor_product_images')->where('id', $id)->get();

    //     return view('vendor.products.update_product', compact('get_product_detail', 'get_product_images', 'get_payment_delivery'));
    // }

    // public function update_product_request(Request $request)
    // {
    //     $this->validate($request, [
    //         'productName'=> 'required|max:100',
    //         'productGenericName'=> 'required|max:100',
    //         'productDescription'=> 'required|max:100',
    //         'productKeyword'=> 'nullable|max:100',
    //         'productCategory'=> 'required',
    //         'productSubCategory'=> 'required',
    //         'keySpecification'=> 'required|max:3000',
    //         'productImage'=> 'image|mimes:jpg,jpeg|max:5000',
    //         'partNumber'=> 'nullable|max:100',
    //         'menufacturer'=> 'nullable|max:100',
    //         'modelNumber'=> 'nullable|max:100',
    //         'accessories'=> 'nullable|max:100',
    //         'vendor'=> 'nullable|max:100',
    //         'dpu_w_p_length'=> 'nullable|max:10',
    //         'dpu_w_p_width'=> 'nullable|max:10',
    //         'dpu_w_p_height'=> 'nullable|max:10',
    //         'dpu_w_p_weight'=> 'nullable|max:10',
    //         'dpu_w_p_volume'=> 'nullable|max:10',
    //         'color'=> 'nullable|max:100',
    //         'pd_price'=> 'required|max:10',
    //         'minimumOrderQuantity'=> 'nullable|max:10',
    //         'pd_priceForOptional'=> 'nullable|max:10',
    //         'instantPrice'=> 'nullable|max:10',
    //         'fifteenDaysPrice'=> 'nullable|max:10',
    //         'thirteenDaysPrice'=> 'nullable|max:10',
    //         'p_d_p_u_length'=> 'nullable|max:10',
    //         'p_d_p_u_height'=> 'nullable|max:10',
    //         'weightPerPack'=> 'nullable|max:10',
    //         'exportCartonDimension'=> 'nullable|max:10',
    //         'exportCartonWeight'=> 'nullable|max:10',
    //         'DeliveryWithinState'=> 'nullable|max:10',
    //         'DeliveryWithinGR'=> 'nullable|max:10',
    //         'DeliveryOutsideGR'=> 'nullable|max:10',
    //         'DurationDeliveryWithinState'=> 'nullable|max:10',
    //         'DurationDeliveryWithinGR'=> 'nullable|max:10',
    //         'DurationDeliveryOutsideGR'=> 'nullable|max:10',
    //         'paymentMethod'=> 'required'
    //      ]);

    //     $id = $request->input('id');

    //     // Store Logo Logic
    //     $prooductImg_id = $request->input('id');
    //     $previousProductImg = $request->input('previousProductImg');

    //     $files = Vendor_product_images::find($prooductImg_id);
    //     $filedelete = $files['productImage'];

    //     $pathToYourFile = 'public/backend/img/vendor/products/'.$filedelete ;

    //     if ($request->hasFile('productImage') && $previousProductImg=='') {
    //         // previous image null but input file has
    //         $destinationPath = 'public/backend/img/vendor/products/';
    //         $file = $request->productImage;
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = rand(1111,9999).".".$extension;
    //         $file->move($destinationPath,$fileName);
    //         $img = $fileName;
            
    //         DB::table('vendor_product_images')->where('id', $id)
    //             ->update(
    //                 [
    //                     'productImage' => $img
    //                 ]);

    //     }elseif( !empty($previousProductImg) )  {
            
    //         $id = $request->input('id');

    //         if ($request->hasFile('productImage')) {
    //             if(file_exists($pathToYourFile)) // make sure it exits inside the folder
    //         {
    //           unlink($pathToYourFile); // delete file/image
    //           // and delete the record from database
    //         }

    //         $destinationPath = 'public/backend/img/vendor/products/';
    //         $file = $request->productImage;
    //         $extension = $file->getClientOriginalExtension();
    //         $fileName = rand(1111,9999).".".$extension;
    //         $file->move($destinationPath,$fileName);
    //         $img = $fileName;

    //         DB::table('vendor_product_images')->where('id', $id)
    //             ->update(
    //                 [
    //                     'productImage' => $img
    //                 ]);

    //         }else {
    //             $id = $request->input('id');
    //             $id = $request->input('id');
    //             $pathToYourFile = 'public/backend/img/vendor/products/'.$previousProductImg ;

    //             DB::table('vendor_products')->where('id', $id)
    //             ->update(
    //                 [
    //                     'productName' => $request->input('productName'),
    //                     'productGenericName' => $request->input('productGenericName'),
    //                     'productDescription' => $request->input('productDescription'),
    //                     'productKeyword' => $request->input('productKeyword'),
    //                     'partNumber' => $request->input('partNumber'),
    //                     'menufacturer' => $request->input('menufacturer'),
    //                     'modelNumber' => $request->input('modelNumber'),
    //                     'supplyType' => $request->input('supplyType'),
    //                     'productCategory' => $request->input('productCategory'),
    //                     'productSubCategory' => $request->input('productSubCategory'),
    //                     'color' => $request->input('color'),
    //                     'accessories' => $request->input('accessories'),
    //                     'keySpecification' => $request->input('keySpecification'),
    //                     'vendor' => $request->input('vendor')
    //                 ]);

    //             DB::table('vendor_payment_delivery')->where('id', $id)
    //                     ->update(
    //                         [
    //                             'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
    //                             'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
    //                             'unitOfMeasure' => $request->input('unitOfMeasure'),
    //                             'pd_price' => $request->input('pd_price'),
    //                             'pd_priceForOptional' => $request->input('pd_priceForOptional'),
    //                             'instantPrice' => $request->input('instantPrice'),
    //                             'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
    //                             'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
    //                             'dpu_w_p_length' => $request->input('dpu_w_p_length'),
    //                             'dpu_w_p_width' => $request->input('dpu_w_p_width'),
    //                             'dpu_w_p_height' => $request->input('dpu_w_p_height'),
    //                             'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
    //                             'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
    //                             'p_d_p_u_length' => $request->input('p_d_p_u_length'),
    //                             'p_d_p_u_width' => $request->input('p_d_p_u_width'),
    //                             'p_d_p_u_height' => $request->input('p_d_p_u_height'),
    //                             'weightPerPack' => $request->input('weightPerPack'),
    //                             'exportCartonDimension' => $request->input('exportCartonDimension'),
    //                             'exportCartonWeight' => $request->input('exportCartonWeight'),
    //                             'DeliveryWithinState' => $request->input('DeliveryWithinState'),
    //                             'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
    //                             'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
    //                             'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
    //                             'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
    //                             'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
    //                             'paymentMethod' => $request->input('paymentMethod')
    //                         ]);
    //         }
    //     }else{
    //         $id = $request->input('id');
    //         $id = $request->input('id');
    //         $id = $request->input('id');

    //         DB::table('vendor_products')->where('id', $id)
    //             ->update(
    //                 [
    //                     'productName' => $request->input('productName'),
    //                     'productGenericName' => $request->input('productGenericName'),
    //                     'productDescription' => $request->input('productDescription'),
    //                     'productKeyword' => $request->input('productKeyword'),
    //                     'partNumber' => $request->input('partNumber'),
    //                     'menufacturer' => $request->input('menufacturer'),
    //                     'modelNumber' => $request->input('modelNumber'),
    //                     'supplyType' => $request->input('supplyType'),
    //                     'productCategory' => $request->input('productCategory'),
    //                     'productSubCategory' => $request->input('productSubCategory'),
    //                     'color' => $request->input('color'),
    //                     'accessories' => $request->input('accessories'),
    //                     'keySpecification' => $request->input('keySpecification'),
    //                     'vendor' => $request->input('vendor')
    //                 ]);

    //         DB::table('vendor_payment_delivery')->where('id', $id)
    //                 ->update(
    //                     [
    //                         'smallOrdersAccepted' => $request->input('smallOrdersAccepted'),
    //                         'minimumOrderQuantity' => $request->input('minimumOrderQuantity'),
    //                         'unitOfMeasure' => $request->input('unitOfMeasure'),
    //                         'pd_price' => $request->input('pd_price'),
    //                         'pd_priceForOptional' => $request->input('pd_priceForOptional'),
    //                         'instantPrice' => $request->input('instantPrice'),
    //                         'fifteenDaysPrice' => $request->input('fifteenDaysPrice'),
    //                         'thirteenDaysPrice' => $request->input('thirteenDaysPrice'),
    //                         'dpu_w_p_length' => $request->input('dpu_w_p_length'),
    //                         'dpu_w_p_width' => $request->input('dpu_w_p_width'),
    //                         'dpu_w_p_height' => $request->input('dpu_w_p_height'),
    //                         'dpu_w_p_weight' => $request->input('dpu_w_p_weight'),
    //                         'dpu_w_p_volume' => $request->input('dpu_w_p_volume'),
    //                         'p_d_p_u_length' => $request->input('p_d_p_u_length'),
    //                         'p_d_p_u_width' => $request->input('p_d_p_u_width'),
    //                         'p_d_p_u_height' => $request->input('p_d_p_u_height'),
    //                         'weightPerPack' => $request->input('weightPerPack'),
    //                         'exportCartonDimension' => $request->input('exportCartonDimension'),
    //                         'exportCartonWeight' => $request->input('exportCartonWeight'),
    //                         'DeliveryWithinState' => $request->input('DeliveryWithinState'),
    //                         'DeliveryWithinGR' => $request->input('DeliveryWithinGR'),
    //                         'DeliveryOutsideGR' => $request->input('DeliveryOutsideGR'),
    //                         'DurationDeliveryWithinState' => $request->input('DurationDeliveryWithinState'),
    //                         'DurationDeliveryWithinGR' => $request->input('DurationDeliveryWithinGR'),
    //                         'DurationDeliveryOutsideGR' => $request->input('DurationDeliveryOutsideGR'),
    //                         'paymentMethod' => $request->input('paymentMethod')
    //                     ]);

    //         DB::table('vendor_product_images')->where('id', $id)
    //             ->update(
    //                 [
    //                     'productImage' => $previousProductImg
    //                 ]);
    //     }

    //     return redirect('/vendor/products')->with('status', 'Product Updated Successfully!');
    // }

    // public function inventory_products()
    // {
    //     return view('vendor.products.inventory_products');
    // }

    // public function pending_review()
    // {
    //     return view('vendor.products.pending_review');
    // }
}