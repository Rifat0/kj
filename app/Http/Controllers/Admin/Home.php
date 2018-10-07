<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon;
use Hash;
use Session;

class Home extends Controller
{
    public function login()
    {
        if (Session::get('admin_user_data')[0] ['admin_user_id']){
            return redirect('/admin/home');
        }else{
            return view('Admin.login');
        }
    }

    public function login_submit(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required',
            'password' => 'required|min:6'
         ]);

        $admin_user = DB::table('admin_user')->where('admin_user_email', $request->input('email'))->get();

        if (count($admin_user)>0) {

            if (Hash::check($request->input('password'), $admin_user[0]->admin_user_password))
            {
                if ( $admin_user[0]->admin_user_status==1 ) {
                    $session_data = [
                            'admin_user_id' => $admin_user[0]->admin_user_id,
                            'admin_user_role' => $admin_user[0]->admin_user_role,
                            'admin_user_name' => $admin_user[0]->admin_user_name,
                            'admin_user_email' => $admin_user[0]->admin_user_email
                        ];

                    Session::push('admin_user_data', $session_data);

                    return redirect('/admin');
                } else {
                    return redirect('/admin')->with('error_message', 'Sorry, Your account is temporary locked. Contact to support center!');
                }

            }elseif ( $admin_user[0]->admin_user_status==0 ) {
                return redirect('/admin')->with('error_message', 'Password do not match!');
            }

        }else {
            return redirect('/admin')->with('error_message', 'Email or Password do not match!');
        }
    }

    public function logout_submit(Request $request)
    {
        Session::flush();
        return redirect('/admin');
    }

    public function index()
    {
        return view('Admin.home');
    }

    public function category()
    {
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->orderBy('category_id', 'asc')->get();
        return view('Admin.Category.category_list',compact('product_category'));
    }

    public function add_category()
    {
        return view('Admin.Category.add_category');
    }

    public function add_category_submit(Request $request)
    {
        $this->validate($request, [
            'category_image'=> 'required|image|mimes:jpg,jpeg,png,ico,svg|dimensions:min_width=50,min_height=50,max_width=200,max_height=200',
            'category_name'=> 'required',
            'category_description'=> 'required',
            'category_abbreviation'=> 'required'
         ]);
        $prevoius_data = DB::table('category_sub_category')->where('category_id', '!=', '0')->orderBy('category_id', 'desc')->first();

        if (!empty($prevoius_data)) {
            $category_id = $prevoius_data->category_id+1;
        }else{
            $category_id = "1";
        }
        
        if ($request->hasFile('category_image')) {
            $destinationPath = 'public/content/category_icone';
            $file = $request->category_image;
            $extension = $file->getClientOriginalExtension();
            $fileName = $category_id.".".$extension;
            $file->move($destinationPath,$fileName);
            $icone = $fileName;
        }


    	DB::table('category_sub_category')
                ->insert(
                    [
                        'category_id' => $category_id,
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
        DB::table('category_sub_category')->where('category_id', $id)->delete();
        DB::table('category_sub_category')->where('parent_category_id', $id)->delete();
        return redirect('/admin/category')->with('status', 'Category Delete Successfully!');
    }

    public function update_category($id)
    {
        $category_data = DB::table('category_sub_category')->where('category_id', $id)->get();
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

            $destinationPath = 'public/content/category_icone/';
            if(file_exists($destinationPath.$request->input('previous_category_image'))){
              unlink($destinationPath.$request->input('previous_category_image'));
            }

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

        DB::table('category_sub_category')->where('category_id', $request->input('category_id'))
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
        $product_sub_category = DB::table('category_sub_category')
                                ->where('sub_category_id', '!=', '0')
                                ->orderBy('sub_category_id', 'asc')
                                ->get();
        return view('Admin.Sub-category.sub-category_list',compact('product_sub_category'));
    }

    public function add_sub_category()
    {
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->orderBy('category_id', 'asc')->get();
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

        $prevoius_data = DB::table('category_sub_category')->where('sub_category_id', '!=', '0')->orderBy('sub_category_id', 'desc')->first();
        if (!empty($prevoius_data)) {
            $sub_category_id = $prevoius_data->sub_category_id+1;
        }else{
            $sub_category_id = "1";
        }

        $parent_category_name_array = DB::table('category_sub_category')->where('category_id', '=', $request->input('category_id'))->where('category_id', '!=', '0')->first();
        $parent_category_name = $parent_category_name_array->category_name;

        DB::table('category_sub_category')
                ->insert(
                    [
                        'sub_category_id' => $sub_category_id,
                        'parent_category_id' => $request->input('category_id'),
                        'parent_category_name' => $parent_category_name,
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
        $product_category = DB::table('category_sub_category')->where('category_id', '!=', '0')->orderBy('category_id', 'asc')->get();
        return view('Admin.Today_fetured.add_today_fetured',compact('product_category'));
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
            'banar_image'=> 'required|image',
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
        $adv_sec_1_data = DB::table('adv_sec_1')->get();
        return view('Admin.Adv_sec_1.adv_sec_1_list',compact('adv_sec_1_data'));
    }

    public function add_adv_sec_1(){
        $vendore_data = DB::table('vendore_user')->get();
    	return view('Admin.Adv_sec_1.add_adv_sec_1',compact('vendore_data'));
    }

    public function vendor_category($id)
    {
        $category = DB::table("vendor_products")->where('vendore_user_id',$id)->get();

        $items = array();
        foreach ($category as $category_data) {
            $items[] = $category_data->productCategory;
        }
        
        $coun=count($items);

        foreach ($items as $value) {
            $cat = DB::table("category_sub_category")->where('category_id',$value)->pluck("category_name","category_id");
            foreach ($cat as $cat_value) {
                $category_items[] = $cat_value;
            }
        }

        if($category_items>0){
            return json_encode($category_items);
        }else{
            $category_items = array('0' => "No Sub Category Found");
            return json_encode($category_items);
        }
    }

    public function add_adv_sec_1_submit(Request $request)
    {
        $this->validate($request, [
            'image'=> 'required|image',
            'vendor_id'=> 'required',
            'vendor_category'=> 'required'
         ]);

        if ($request->hasFile('image')) {
            $destinationPath = 'public/content/adv_sec_1';
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $image = $fileName;
        }

        DB::table('adv_sec_1')
                ->insert(
                    [
                        'image' => $image,
                        'vendor_id' => $request->input('vendor_id'),
                        'vendor_category_id' => $request->input('vendor_category'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/adv_sec_1')->with('status', 'Ad Created Successfully!');
    }

    public function adv_sec_2(){
        $adv_sec_2_data = DB::table('adv_sec_2')->get();
        return view('Admin.Adv_sec_2.adv_sec_2_list',compact('adv_sec_2_data'));
    }

    public function add_adv_sec_2(){
    	$vendore_data = DB::table('vendore_user')->get();
        return view('Admin.Adv_sec_2.add_adv_sec_2',compact('vendore_data'));
    }

    public function add_adv_sec_2_submit(Request $request)
    {
        $this->validate($request, [
            'image'=> 'required|image',
            'vendor_id'=> 'required',
            'vendor_category'=> 'required'
         ]);

        if ($request->hasFile('image')) {
            $destinationPath = 'public/content/adv_sec_2';
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $image = $fileName;
        }

        DB::table('adv_sec_2')
                ->insert(
                    [
                        'image' => $image,
                        'vendor_id' => $request->input('vendor_id'),
                        'vendor_category_id' => $request->input('vendor_category'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/adv_sec_2')->with('status', 'Ad Created Successfully!');
    }

    public function others(){

    	$get_shop_settings = DB::table('shop_settings')->get();
        return view('Admin.Others.others_list', compact('get_shop_settings'));
    }

    public function others_update(Request $request)
    {
    	$this->validate($request, [
            'shop_name'=> 'required',
            'shop_description'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'pinterest'=> 'required',
            'instagram'=> 'required',
            'googlePlus'=> 'required',
         ]);

        DB::table('shop_settings')->where('shop_id', $request->input('shop_id'))
                ->update(
                    [
                        'shop_name' => $request->input('shop_name'),
                        'shop_description' => $request->input('shop_description'),
                        'facebook' => $request->input('facebook'),
                        'twitter' => $request->input('twitter'),
                        'pinterest' => $request->input('pinterest'),
                        'instagram' => $request->input('instagram'),
                        'googlePlus' => $request->input('googlePlus'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/others')->with('status', 'Data updated!');
    }

    public function product_ap_rj(){
        $vendor_products = DB::table('vendor_products')->where('product_status', "0")
                                                    ->join('vendore_user', 'vendor_products.vendore_user_id', '=', 'vendore_user.vendore_user_id')
                                                    ->get();
    	return view('Admin.Product_ap_rj.product_ap_rj_list', compact('vendor_products'));
    }

    public function product_view($id)
    {
        $product_data = DB::table('vendor_products')->where('product_number', $id)
                                                    ->first();

        $category = DB::table("category_sub_category")->where("category_id",$product_data->productCategory)->first();                                           
        $sub_category = DB::table("category_sub_category")->where("sub_category_id",$product_data->productSubCategory)->first();                                           
        $product_payment_delivery_data = DB::table('vendor_payment_delivery')->where('product_number', $id)->first();
        $product_images_data = DB::table('vendor_product_images')->where('product_number', $id)->first();
        return view('Admin.Product_ap_rj.product_view', compact('product_data','product_payment_delivery_data','product_images_data','category','sub_category'));
    }

    public function product_status_approve($id){

        DB::table('vendor_products')->where('product_number', $id)
                ->update(
                    [
                        'product_status' => "1",
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/product_ap_rj')->with('status', 'Product Status Updated Successfully!');
    }

    public function product_status_disapprove($id){

        DB::table('vendor_products')->where('product_number', $id)
                ->update(
                    [
                        'product_status' => "2",
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/admin/product_ap_rj')->with('status', 'Product Status Updated Successfully!');
    }

    public function product_data(){
    	return view('Admin.Product_data.product_data');
    }

    public function vendor_ap_rj(){

        $vendore_data = DB::table('vendore_user')->get();
        return view('Admin.Vendors_sellers.vendor_ap_rj_lsit', compact('vendore_data'));
    }

    public function vendore_status_change($id){

        $user_data = DB::table('vendore_user')->where('vendore_user_id', $id)->first();
        if($user_data->vendore_user_status==0){
            DB::table('vendore_user')->where('vendore_user_id', $id)
                    ->update(
                        [
                            'vendore_user_status' => "1",
                            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);
            return redirect('/admin/vendor_ap_rj')->with('status', 'Vendor status changed!');
        }elseif($user_data->vendore_user_status==1){
            DB::table('vendore_user')->where('vendore_user_id', $id)
                    ->update(
                        [
                            'vendore_user_status' => "0",
                            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);
            return redirect('/admin/vendor_ap_rj')->with('status', 'Vendor status changed!');
        }
    }

    public function vendore_view(Request $request)
    {
        $vendore_data = DB::table('vendore_user')->where('vendore_user_id', $request->input('vendore_user_id'))->first();
        return view('Admin.Vendors_sellers.vendore_view', compact('vendore_data'));
    }

    public function coustomer_buyer(){

    	$coustomer_buyer_list = DB::table('web_user')->get();
        return view('Admin.Coustomer_buyer.coustomer_buyer_list', compact('coustomer_buyer_list'));
    }

    public function coustomer_buyer_view(Request $request){

        $coustomer_buyer_data = DB::table('web_user')->where('web_user_id', $request->input('coustomer_buyer_id'))->first();
        return view('Admin.Coustomer_buyer.coustomer_buyer_view', compact('coustomer_buyer_data'));
    }

    public function coustomer_buyer_status_change($id){
    	$user_data = DB::table('web_user')->where('web_user_id', $id)->first();
        if($user_data->web_user_status==0){
            DB::table('web_user')->where('web_user_id', $id)
                    ->update(
                        [
                            'web_user_status' => "1",
                            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);
            return redirect('/admin/coustomer_buyer_list')->with('status', 'User status changed!');
        }elseif($user_data->web_user_status==1){
            DB::table('web_user')->where('web_user_id', $id)
                    ->update(
                        [
                            'web_user_status' => "0",
                            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);
            return redirect('/admin/coustomer_buyer_list')->with('status', 'User status changed!');
        }
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
