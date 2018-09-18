<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class Dashboard extends Controller
{
    public function index()
    {
        $get_products = DB::table('vendor_products')->get();
        $get_payment_delivery = DB::table('vendor_payment_delivery')->get();

        return view('vendor.dashboard', compact('get_products', 'get_payment_delivery'));
    }
}