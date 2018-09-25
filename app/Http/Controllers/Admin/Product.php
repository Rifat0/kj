<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Session;

class Product extends Controller
{
    public function create_new_product()
    {
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->get();

        return view('admin.Products.create_new_product', compact('product_category'));
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

        $vendore_user_id = $request->input('admin_user_id');

        $vendore_product_number = DB::table('vendor_products')->orderBy('product_number', 'desc')->first();
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
                        'product_status' => "1",
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

        return redirect('/admin/product_ap_rj')->with('status', 'Product Created Successfully!');
    }

    public function update_product_ap_rj()
    {
        $update_product_ap_rj = DB::table('vendor_products')
                                ->where('product_status', '=', '3')
                                ->join('vendore_user', 'vendor_products.vendore_user_id', '=', 'vendore_user.vendore_user_id')
                                ->get();
        return view('admin.Product_ap_rj.update_product_ap_rj', compact('update_product_ap_rj'));
    }
}
