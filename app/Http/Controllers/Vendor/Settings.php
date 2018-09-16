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
        $get_general_settings = DB::table('vendor_general_settings')->get();

        return view('vendor.generalSettings.general_settings', compact('get_general_settings'));
    }

    public function update_general_settings_request(Request $request)
    {
        // Settings Validation
        $this->validate($request, [
            'name'=> 'required',
            'owner'=> 'required',
            'address'=> 'required',
            'email'=> 'required',
            'telephone'=> 'required',
            'copyright'=> 'required',
            'storeLogo'=> '',
            'storeIcon'=> ''
         ]);

    	$id = $request->input('id');
        // Store Logo Logic
        $logo_id = $request->input('id');
        $previousLogo = $request->input('previousLogo');

        $files = Vendor_general_settings::find($logo_id);
        $filedelete = $files['storeLogo'];

        $pathToYourFile = 'public/backend/img/vendor/system/'.$filedelete ;

        if ($request->hasFile('storeLogo') && $previousLogo=='') {
            // previous image null but input file has
            $destinationPath = 'public/backend/img/vendor/system/';
            $file = $request->storeLogo;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $logo = $fileName;
            
            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'storeLogo' => $logo
                    ]);

        }elseif( !empty($previousLogo) )  {

            if ($request->hasFile('storeLogo')) {
                if(file_exists($pathToYourFile)) // make sure it exits inside the folder
            {
              unlink($pathToYourFile); // delete file/image
              // and delete the record from database
            }

            $destinationPath = 'public/backend/img/vendor/system/';
            $file = $request->storeLogo;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $logo = $fileName;

            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'storeLogo' => $logo
                    ]);

            }else {
                $pathToYourFile = 'public/backend/img/vendor/system/'.$previousLogo ;

                DB::table('vendor_general_settings')->where('id', '1')
	                ->update(
	                    [
	                        'name' => $request->input('name'),
	                        'owner' => $request->input('owner'),
	                        'address' => $request->input('address'),
	                        'geocode' => $request->input('geocode'),
	                        'email' => $request->input('email'),
	                        'telephone' => $request->input('telephone'),
	                        'fax' => $request->input('fax'),
	                        'facebook' => $request->input('facebook'),
	                        'twitter' => $request->input('twitter'),
	                        'linkdin' => $request->input('linkdin'),
	                        'googlePlus' => $request->input('googlePlus'),
	                        'instagram' => $request->input('instagram'),
	                        'pinterest' => $request->input('pinterest'),
	                        'country' => $request->input('country'),
	                        'language' => $request->input('language'),
	                        'state' => $request->input('state'),
	                        'administrationLanguage' => $request->input('administrationLanguage'),
	                        'copyright' => $request->input('copyright')
	                    ]);
            }
        }else{

            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'name' => $request->input('name'),
                        'owner' => $request->input('owner'),
                        'address' => $request->input('address'),
                        'geocode' => $request->input('geocode'),
                        'email' => $request->input('email'),
                        'telephone' => $request->input('telephone'),
                        'fax' => $request->input('fax'),
                        'facebook' => $request->input('facebook'),
                        'twitter' => $request->input('twitter'),
                        'linkdin' => $request->input('linkdin'),
                        'googlePlus' => $request->input('googlePlus'),
                        'instagram' => $request->input('instagram'),
                        'pinterest' => $request->input('pinterest'),
                        'country' => $request->input('country'),
                        'language' => $request->input('language'),
                        'state' => $request->input('state'),
                        'administrationLanguage' => $request->input('administrationLanguage'),
                        'storeLogo' => $previousLogo,
                        'copyright' => $request->input('copyright')
                    ]);
        }

        // Store Icon Logic
        $logo_id = $request->input('id');
        $previousIcon = $request->input('previousIcon');

        $files = Vendor_general_settings::find($logo_id);
        $filedelete = $files['storeIcon'];

        $pathToYourFile = 'public/backend/img/vendor/system/'.$filedelete ;

        if ($request->hasFile('storeIcon') && $previousIcon=='') {
            // previous image null but input file has
            $destinationPath = 'public/backend/img/vendor/system/';
            $file = $request->storeIcon;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $logo = $fileName;
            
            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'storeIcon' => $logo
                    ]);

        }elseif( !empty($previousIcon) )  {

            if ($request->hasFile('storeIcon')) {
                if(file_exists($pathToYourFile)) // make sure it exits inside the folder
            {
              unlink($pathToYourFile); // delete file/image
              // and delete the record from database
            }

            $destinationPath = 'public/backend/img/vendor/system/';
            $file = $request->storeIcon;
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(1111,9999).".".$extension;
            $file->move($destinationPath,$fileName);
            $logo = $fileName;

            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'storeIcon' => $logo
                    ]);

            }else {
                $pathToYourFile = 'public/backend/img/vendor/system/'.$previousIcon ;

                DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'name' => $request->input('name'),
                        'owner' => $request->input('owner'),
                        'address' => $request->input('address'),
                        'geocode' => $request->input('geocode'),
                        'email' => $request->input('email'),
                        'telephone' => $request->input('telephone'),
                        'fax' => $request->input('fax'),
                        'facebook' => $request->input('facebook'),
                        'twitter' => $request->input('twitter'),
                        'linkdin' => $request->input('linkdin'),
                        'googlePlus' => $request->input('googlePlus'),
                        'instagram' => $request->input('instagram'),
                        'pinterest' => $request->input('pinterest'),
                        'country' => $request->input('country'),
                        'language' => $request->input('language'),
                        'state' => $request->input('state'),
                        'administrationLanguage' => $request->input('administrationLanguage'),
                        'copyright' => $request->input('copyright')
                    ]);
            }
        }else{
            DB::table('vendor_general_settings')->where('id', '1')
                ->update(
                    [
                        'name' => $request->input('name'),
                        'owner' => $request->input('owner'),
                        'address' => $request->input('address'),
                        'geocode' => $request->input('geocode'),
                        'email' => $request->input('email'),
                        'telephone' => $request->input('telephone'),
                        'fax' => $request->input('fax'),
                        'facebook' => $request->input('facebook'),
                        'twitter' => $request->input('twitter'),
                        'linkdin' => $request->input('linkdin'),
                        'googlePlus' => $request->input('googlePlus'),
                        'instagram' => $request->input('instagram'),
                        'pinterest' => $request->input('pinterest'),
                        'country' => $request->input('country'),
                        'language' => $request->input('language'),
                        'state' => $request->input('state'),
                        'administrationLanguage' => $request->input('administrationLanguage'),
                        'storeIcon' => $previousIcon,
                        'copyright' => $request->input('copyright')
                    ]);
        }

        return redirect('/vendor/general_settings')->with('status', 'Product Updated Successfully!');
    }

}