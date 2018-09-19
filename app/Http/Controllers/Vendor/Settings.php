<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Vendor_general_settings;

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
            'name'=> 'required|max:100',
            'email'=> 'required|max:100'
         ]);

        $id = $request->input('vendore_user_id');

        DB::table('vendore_user')->where('vendore_user_id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'companyName' => $request->input('companyName'),
                    'email' => $request->input('email'),
                    'vendor_type' => $request->input('vendor_type'),
                    'address' => $request->input('address'),
                    'fax' => $request->input('fax'),
                    'mobile' => $request->input('mobile')
                ]);

        return redirect('/vendor/general_settings')->with('status', 'Product Updated Successfully!');
    }

}