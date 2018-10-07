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
        return view('content.home',compact('banar_data'));
    }

    public function category()
    {
        return view('content.category');
    }

    public function product()
    {
        return view('content.product');
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
        return view('content.checkout');
    }

    public function summery()
    {
        return view('content.summery');
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

    public function sing_up()
    {
        return view('content.sing_up');
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
