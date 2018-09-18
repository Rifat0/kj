<?php

namespace App\Http\Controllers\Vendor;

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
        if (Session::get('vendore_user_data')[0] ['vendore_user_id']){
            return redirect('/vendor/dashboard');
        }else{
            return view('vendor.login');
        }
    }

    public function login_submit(Request $request)
    {
    	$this->validate($request, [
            'email'=> 'required',
            'password' => 'required|min:6'
         ]);

        $vendore_user = DB::table('vendore_user')->where('email', $request->input('email'))->get();

        if (count($vendore_user)>0) {

            if (Hash::check($request->input('password'), $vendore_user[0]->password))
            {
                if ( $vendore_user[0]->vendore_user_status==1 ) {

                    $session_data = [
                        'vendore_user_id' => $vendore_user[0]->vendore_user_id,
                        'vendore_name' => $vendore_user[0]->name,
                        'email' => $vendore_user[0]->email,
                        'companyName' => $vendore_user[0]->companyName,
                        'vendor_type' => $vendore_user[0]->vendor_type,
                        'address' => $vendore_user[0]->address,
                        'fax' => $vendore_user[0]->fax,
                        'mobile' => $vendore_user[0]->mobile
		            ];

		        	Session::push('vendore_user_data', $session_data);

                    return redirect('/vendore');
                } else {
                    return redirect('/vendore')->with('error_message', 'Sorry, Your account is temporary locked. Contact to support center!');
                }

            }elseif ( $vendore_user[0]->vendore_user_status==0 ) {
                return redirect('/vendore')->with('error_message', 'Password do not match!');
            }

        }else {
            return redirect('/vendore')->with('error_message', 'Email or Password do not match!');
        }
    }

    public function signUp()
    {
        return view('vendor.signUp');
    }

    public function signUp_submit(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'vendor_type' => 'required',
            'email' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
         ]);

        DB::table('vendore_user')
                ->insert(
                    [
                        'name' => $request->input('name'),
                        'vendor_type' => $request->input('vendor_type'),
                        'email' => $request->input('email'),
                     	'password' => Hash::make($request->input('password')),
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);

        $vendore_user_data = DB::table('vendore_user')->where('email', $request->input('email'))->get();

        $session_data = [
                'vendore_user_id' => $vendore_user_data[0]->vendore_user_id,
                'vendore_name' => $vendore_user_data[0]->name,
                'email' => $vendore_user_data[0]->email,
                'companyName' => $vendore_user_data[0]->companyName,
                'vendor_type' => $vendore_user_data[0]->vendor_type,
                'address' => $vendore_user_data[0]->address,
                'fax' => $vendore_user_data[0]->fax,
                'mobile' => $vendore_user_data[0]->mobile
            ];

        Session::push('vendore_user_data', $session_data);

        return redirect('/vendor/dashboard');
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/vendore');
    }
}
