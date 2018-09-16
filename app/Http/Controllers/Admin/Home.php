<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;

class Home extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }

    public function index()
    {
        return view('Admin.home');
    }

    public function category()
    {
        $product_category = DB::table('product_category')->get();
        return view('Admin.Category.category_list',compact('product_category'));
    }

    public function add_category()
    {
        return view('Admin.Category.add_category');
    }

    public function add_category_submit(Request $request)
    {
        $this->validate($request, [
            'category_image'=> 'required|image|dimensions:min_width=2200,min_height=900,max_width=2200,max_height=900',
            'category_name'=> 'required',
            'category_description'=> 'required',
            'category_abbreviation'=> 'required'
         ]);
        
    	if ($request->hasFile('category_image')) {
            $destinationPath = 'public/content/category_icone';
            $file = $request->category_image;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $icone = $fileName;
        }

    	DB::table('product_category')
                ->insert(
                    [
                        'category_image' => $icone,
                        'category_name' => $request->input('category_name'),
                        'category_description' => $request->input('category_description'),
                        'category_abbreviation' => $request->input('category_abbreviation'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/admin/category')->with('status', 'Category Created Successfully!');
    }

    public function delete_category($id)
    {
        DB::table('product_category')->where('category_id', $id)->delete();
        DB::table('product_sub_category')->where('category_id', $id)->delete();
        return redirect('/admin/category')->with('status', 'Category Delete Successfully!');
    }

    public function update_category($id)
    {
        $category_data = DB::table('product_category')->where('category_id', $id)->get();
        return view('Admin.Category.add_category',compact('category_data'));
    }

    public function update_category_submit(Request $request)
    {
        $this->validate($request, [
            'category_image'=> 'image|dimensions:min_width=20,min_height=20,max_width=2200,max_height=900',
            'category_name'=> 'required',
            'category_description'=> 'required',
            'category_abbreviation'=> 'required'
         ]);

        if (!empty($request->input('previous_category_image'))) {

            if ($request->hasFile('category_image')) {
                $destinationPath = 'public/content/category_icone';
                $file = $request->category_image;
                $extension = $file->getClientOriginalExtension();
                $fileName = rand(1111,9999).".".$extension;
                $file->move($destinationPath,$fileName);
                $icone = $fileName;
            }

            $filepath = 'public/content/category_icone/'.$request->input('previous_category_image') ;
            unlink($filepath);

        }elseif ($request->hasFile('category_image')) {

            if (empty($request->input('previous_category_image'))) {
                $destinationPath = 'public/content/category_icone';
                $file = $request->category_image;
                $extension = $file->getClientOriginalExtension();
                $fileName = rand(1111,9999).".".$extension;
                $file->move($destinationPath,$fileName);
                $icone = $fileName;
            }

        }else{
            $icone = $request->input('previous_category_image');
        }

        DB::table('product_category')->where('category_id', $request->input('category_id'))
                ->update(
                    [
                        'category_image' => $icone,
                        'category_name' => $request->input('category_name'),
                        'category_description' => $request->input('category_description'),
                        'category_abbreviation' => $request->input('category_abbreviation'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/admin/category')->with('status', 'Category Updated Successfully!');
    }

    public function sub_category()
    {
        $product_sub_category = DB::table('product_sub_category')
                                ->join('product_category', 'product_sub_category.category_id', '=', 'product_category.category_id')
                                ->orderBy('sub_category_id', 'asc')
                                ->get();
        return view('Admin.Sub-category.sub-category_list',compact('product_sub_category'));
    }

    public function add_sub_category()
    {
        $product_category = DB::table('product_category')->get();
        return view('Admin.Sub-category.add_sub_category',compact('product_category'));
    }

    public function add_sub_category_submit(Request $request)
    {
        $this->validate($request, [
            'category_id'=> 'required',
            'sub_category_name'=> 'required',
            'sub_category_description'=> 'required',
            'sub_category_abbreviation'=> 'required'
         ]);

        DB::table('product_sub_category')
                ->insert(
                    [
                        'category_id' => $request->input('category_id'),
                        'sub_category_name' => $request->input('sub_category_name'),
                        'sub_category_description' => $request->input('sub_category_description'),
                        'sub_category_abbreviation' => $request->input('sub_category_abbreviation'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/sub-category')->with('status', 'Sub-category Created Successfully!');
    }

    public function delete_sub_category($id)
    {
        DB::table('product_sub_category')->where('sub_category_id', $id)->delete();
        return redirect('/admin/sub-category')->with('status', 'Sub-category Delete Successfully!');
    }

    public function update_sub_category($id)
    {
        $product_category = DB::table('product_category')->get();
        $sub_category_data = DB::table('product_sub_category')->where('sub_category_id', $id)->get();
        return view('Admin.Sub-category.add_sub_category',compact('sub_category_data','product_category'));
    }

    public function update_sub_category_submit(Request $request)
    {
        $this->validate($request, [
            'sub_category_name'=> 'required',
            'sub_category_description'=> 'required',
            'sub_category_abbreviation'=> 'required'
         ]);

        DB::table('product_sub_category')->where('sub_category_id', $request->input('sub_category_id'))
                ->update(
                    [
                        'sub_category_name' => $request->input('sub_category_name'),
                        'sub_category_description' => $request->input('sub_category_description'),
                        'sub_category_abbreviation' => $request->input('sub_category_abbreviation'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        return redirect('/admin/sub-category')->with('status', 'Sub-category Updated Successfully!');
    }

    public function today_fetured()
    {
        return view('Admin.Today_fetured.today_fetured_list');
    }

    public function add_today_fetured()
    {
        return view('Admin.Today_fetured.add_today_fetured');
    }

    public function banar(){
    	$banar_data = DB::table('banar')->get();
        return view('Admin.Banar.banar_list',compact('banar_data'));
    }

    public function add_banar(){
    	return view('Admin.Banar.add_banar');
    }

    public function add_banar_submit(Request $request)
    {
        $this->validate($request, [
            'banar_image'=> 'required|image|dimensions:min_width=660,min_height=500,max_width=660,max_height=500',
            'banar_text'=> 'required',
            'banar_url'=> 'required'
         ]);

        if ($request->hasFile('banar_image')) {
            $destinationPath = 'public/content/banar_image';
            $file = $request->banar_image;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $banar_image = $fileName;
        }

        DB::table('banar')
                ->insert(
                    [
                        'banar_image' => $banar_image,
                        'banar_text' => $request->input('banar_text'),
                        'banar_url' => $request->input('banar_url'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/banar')->with('status', 'Banar Created Successfully!');
    }

    public function adv_sec_1(){
    	return view('Admin.Adv_sec_1.adv_sec_1_list');
    }

    public function add_adv_sec_1(){
    	return view('Admin.Adv_sec_1.add_adv_sec_1');
    }

    public function adv_sec_2(){
    	return view('Admin.Adv_sec_2.adv_sec_2_list');
    }

    public function add_adv_sec_2(){
    	return view('Admin.Adv_sec_2.add_adv_sec_2');
    }

    public function others(){

    	$get_general_settings = DB::table('vendor_general_settings')->get();
        return view('Admin.Others.others_list', compact('get_general_settings'));
    }

    public function add_others(){
    	return view('Admin.Others.add_others');
    }

    public function product_ap_rj(){
    	return view('Admin.Product_ap_rj.product_ap_rj_list');
    }

    public function update_product_ap_rj(){
    	return view('Admin.Update_product_ap_rj.update_product_ap_rj_list');
    }

    public function product_data(){
    	return view('Admin.Product_data.product_data');
    }

    public function vendor_ap_rj(){
    	return view('Admin.Vendors_sellers.vendor_ap_rj_lsit');
    }
    
    public function add_vendor(){
    	return view('Admin.Vendors_sellers.add_vendor');
    }

    public function coustomer_buyer(){
    	return view('Admin.Coustomer_buyer.coustomer_buyer_list');
    }

    public function add_coustomer_buyer(){
    	return view('Admin.Coustomer_buyer.add_coustomer_buyer');
    }

    public function orders_list(){
    	return view('Admin.Orders.orders_list');
    }

    public function requisitions_list(){
    	return view('Admin.Requisitions.requisitions_list');
    }

    public function user_list(){
    	return view('Admin.User.user_list');
    }

    public function add_new_user(){
    	return view('Admin.User.add_new_user');
    }
}
