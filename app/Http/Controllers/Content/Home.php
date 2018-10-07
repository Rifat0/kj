<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Carbon;
use Session;

class Home extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $banar_data = DB::table('banar')->get();
        $adv_sec_1 = DB::table('adv_sec_1')->get();
        $adv_sec_2 = DB::table('adv_sec_2')->get();
        $today_feture = DB::table('vendor_products')
                        ->join('vendor_product_images', 'vendor_products.product_number', '=', 'vendor_product_images.product_number')
                        ->where('product_status', '=','1')
                        ->get();

        return view('content.home',compact('banar_data','category_sub_category','adv_sec_1','adv_sec_2','today_feture'));
    }

    public function cart_empty()
    {
        return view('content.cart_empty');
    }

    public function cart_item()
    {
        return view('content.cart_item');
    }

    public function checkout()
    {
        if(session()->has('cart_data')){
            return view('content.checkout');
        }else{
            return redirect('/')->with('error_message', 'You have no product in your shopping cart for checkout.');
        }
    }

    public function checkout_submit(Request $checkout)
    {
        $this->validate($checkout, [
            'company_name'=> 'required',
            'login_email'=> 'required|email',
            'phone'=> 'required',
            'password' => 'required_with:password_confirmation|same:password_confirmation',
            'country'=> 'required',
            'city'=> 'required',
            'zip_postal'=> 'required',
            'address'=> 'required'
         ]);

        if (empty($checkout->input('web_user_id')) && !empty($checkout->input('password'))) {

            DB::table('web_user')
                    ->insert(
                        [
                            'company_name' => $checkout->input('company_name'),
                            'login_email' => $checkout->input('login_email'),
                            'phone_of_contact_person' => $checkout->input('phone'),
                            'password' => Hash::make($checkout->input('password')),
                            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                        ]);

            $web_user_data = DB::table('web_user')->where('login_email', $checkout->input('login_email'))->first();

            $session_data = [
                    'web_user_id' => $web_user_data->web_user_id,
                    'company_name' => $web_user_data->company_name,
                    'phone' => $web_user_data->phone_of_contact_person,
                    'login_email' => $web_user_data->login_email
                ];

            Session::push('web_user_data', $session_data);
        }
        elseif(empty($checkout->input('web_user_id')) && empty($checkout->input('password'))){
            $guest=true;
            $session_data = [
                    'web_user_id' => "9999999",
                    'company_name' => $checkout->input('company_name'),
                    'phone' => $checkout->input('phone'),
                    'login_email' => $checkout->input('login_email')
                ];

            Session::push('web_user_data', $session_data);
        }

        $previous_order_id = DB::table('order_data')->orderBy('order_id', 'desc')->first();

        if (!empty($previous_order_id)) {

            $p_order_id = explode("_",$previous_order_id->order_id);
            $alpha = $p_order_id[0];
            $numeric = $p_order_id[1]+1;
            $order_id = $alpha."_".$numeric;

            $reserved_order_id_check = DB::table('reserved_order_id')->where('order_id', $order_id)->first();
                
                if (empty($reserved_order_id_check)) {

                    DB::table('reserved_order_id')
                            ->insert(
                                [
                                    'order_id' => $order_id,
                                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                ]);

                }elseif (!empty($reserved_order_id_check)) {

                    $reserved_order_id_check = DB::table('reserved_order_id')->orderBy('order_id', 'desc')->first();
                    $r_order_id = explode("_",$reserved_order_id_check->order_id);
                    $alpha = $r_order_id[0];
                    $numeric = $r_order_id[1]+1;
                    $order_id = $alpha."_".$numeric;
                    

                        DB::table('reserved_order_id')
                                ->insert(
                                    [
                                        'order_id' => $order_id,
                                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                    ]);
                }

        }else{

            $order_id = "kj_1";

            $reserved_order_id_check = DB::table('reserved_order_id')->where('order_id', $order_id)->first();
            if (empty($reserved_order_id_check)) {

                DB::table('reserved_order_id')
                        ->insert(
                            [
                                'order_id' => $order_id,
                                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                            ]);

            }elseif (!empty($reserved_order_id_check)) {

                $reserved_order_id_check = DB::table('reserved_order_id')->orderBy('order_id', 'desc')->first();
                
                $r_order_id = explode("_",$reserved_order_id_check->order_id);
                $alpha = $r_order_id[0];
                $numeric = $r_order_id[1]+1;
                $order_id = $alpha."_".$numeric;

                    DB::table('reserved_order_id')
                            ->insert(
                                [
                                    'order_id' => $order_id,
                                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                ]);
            }

        }

        DB::table('order_data')
                ->insert(
                    [
                        'order_id' => $order_id,
                        'web_user_id' => Session::get('web_user_data')[0] ['web_user_id'],
                        'country' => $checkout->input('country'),
                        'city' => $checkout->input('city'),
                        'zip_postal' => $checkout->input('zip_postal'),
                        'address' => $checkout->input('address'),
                        'shipping_country' => $checkout->input('shipping_country'),
                        'shipping_city' => $checkout->input('shipping_city'),
                        'shipping_zip_postal' => $checkout->input('shipping_zip_postal'),
                        'shipping_address' => $checkout->input('shipping_address'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        foreach(Session::get('cart_data') as $cart_data){

            $ordered_product[] = [
                'order_id' => $order_id,
                'web_user_id' => Session::get('web_user_data')[0] ['web_user_id'],
                'product_id' => $cart_data['product_id'],
                'quantity' => $cart_data['quantity'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
        }

        DB::table('ordered_product')->insert($ordered_product);

        DB::table('reserved_order_id')->where('order_id', $order_id)->delete();

        Session::flash('cart_data');
        Session::reflash('cart_data');

        $ordered_product = DB::table('ordered_product')
                        ->where('web_user_id',Session::get('web_user_data')[0] ['web_user_id'])
                        ->where('order_id',$order_id)
                        ->join('vendor_products', 'ordered_product.product_id', '=', 'vendor_products.product_number')
                        ->get();
        $order_data = DB::table('order_data')
                        ->where('web_user_id',Session::get('web_user_data')[0] ['web_user_id'])
                        ->where('order_id',$order_id)
                        ->first();
        return view('content.summery',compact('ordered_product','order_data'));

    }

    public function about_us()
    {
        return view('content.about_us');
    }

    public function legal()
    {
        return view('content.legal');
    }

    public function favorite()
    {
        return view('content.favorite');
    }

    public function compare()
    {
        return view('content.compare');
    }

    public function newsletter_submit(Request $newsletter)
    {
        $this->validate($newsletter, [
            'newsletter'=> 'required|email',
         ]);
        
        DB::table('newsletter')
                ->insert(
                    [
                        'newsletter' => $newsletter->input('newsletter'),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
        return redirect('/')->with('status', 'You have successfully subscribed for newsletter!');
    }

    public function sing_up()
    {
        $shop_settings = DB::table('shop_settings')->first();
        return view('content.sing_up',compact('shop_settings'));
    }

    public function sing_up_submit(Request $request)
    {
        $this->validate($request, [
            'company_name'=> 'required',
            'about_company'=> 'required',
            'company_description'=> 'required',
            'website_url'=> 'required',
            'cac_number'=> 'required',
            'type_of_business'=> 'required',
            'year_of_existence'=> 'required',
            'phone_of_MD_Chairman'=> 'required',
            'email_of_MD_Chairman'=> 'required',
            'phone_of_contact_person'=> 'required',
            'email_of_contact_person'=> 'required',
            'company_rating'=> 'required',
            'login_email'=> 'required|unique:web_user',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
         ]);
        
        DB::table('web_user')
                ->insert(
                    [
                        'company_name' => $request->input('company_name'),
                        'about_company' => $request->input('about_company'),
                        'company_description' => $request->input('company_description'),
                        'website_url' => $request->input('website_url'),
                        'cac_number' => $request->input('cac_number'),
                        'type_of_business' => $request->input('type_of_business'),
                        'year_of_existence' => $request->input('year_of_existence'),
                        'phone_of_MD_Chairman' => $request->input('phone_of_MD_Chairman'),
                        'email_of_MD_Chairman' => $request->input('email_of_MD_Chairman'),
                        'phone_of_contact_person' => $request->input('phone_of_contact_person'),
                        'email_of_contact_person' => $request->input('email_of_contact_person'),
                        'company_rating' => $request->input('company_rating'),
                        'login_email' => $request->input('login_email'),
                        'password' => Hash::make($request->input('password')),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        $web_user_data = DB::table('web_user')->where('login_email', $request->input('login_email'))->get();

        $session_data = [
                'web_user_id' => $web_user_data[0]->web_user_id,
                'company_name' => $web_user_data[0]->company_name,
                'phone' => $web_user_data[0]->phone_of_contact_person,
                'login_email' => $web_user_data[0]->login_email
            ];

        Session::push('web_user_data', $session_data);

        return redirect('/buyer/dashboard');
    }

    public function login_submit(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required',
            'password' => 'required|min:6'
         ]);

        $web_user = DB::table('web_user')->where('login_email', $request->input('email'))->get();

        if (count($web_user)>0) {

            if (Hash::check($request->input('password'), $web_user[0]->password))
            {
                if ( $web_user[0]->web_user_status==1 ) {
                    $session_data = [
                            'web_user_id' => $web_user[0]->web_user_id,
                            'company_name' => $web_user[0]->company_name,
                            'phone' => $web_user[0]->phone_of_contact_person,
                            'login_email' => $web_user[0]->login_email
                        ];

                    Session::push('web_user_data', $session_data);

                    return redirect('/');
                } else {
                    return redirect('/')->with('error_message', 'Sorry, Your account is temporary locked. Contact to support center!');
                }

            }elseif ( $web_user[0]->web_user_status==0 ) {
                return redirect('/')->with('error_message', 'Password do not match!');
            }

        }else {
            return redirect('/')->with('error_message', 'Email or Password do not match!');
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/');
    }

}
