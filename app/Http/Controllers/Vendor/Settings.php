<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Vendor_general_settings;

use Hash;
use Auth;

class Settings extends Controller
{
    // General Settings
    public function general_settings()
    {
        return view('vendor.generalSettings.general_settings');
    }

    public function update_general_settings_request(Request $request)
    {
        // Settings Validation
        $this->validate($request, [
            'mobile'=> 'max:14',
            // 'password' => Auth::user()->password,
            // 'oldPassword' => 'confirmed|max:8|different:password',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
         ]);

        $id = $request->input('vendore_user_id');

        DB::table('vendore_user')->where('vendore_user_id', $id)
            ->update(
                [
                    'companyName' => $request->input('companyName'),
                    'vendor_type' => $request->input('vendor_type'),
                    'address' => $request->input('address'),
                    'fax' => $request->input('fax'),
                    'mobile' => $request->input('mobile'),
                    'password' => Hash::make($request->input('password'))
                ]);

        return redirect('/vendor/general_settings')->with('status', 'Information Updated Successfully!');
    }

}