<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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

}
