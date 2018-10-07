<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Session;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $shop_settings = DB::table('shop_settings')->first();
        view()->share('shop_settings', $shop_settings);

        $category_sub_category = DB::table('category_sub_category')->get();
        view()->share('category_sub_category', $category_sub_category);

        
        view()->composer('*', function ($view)
        {
            if (session()->has('cart_data')) {
                $cart_product = session()->get('cart_data');
                foreach ((array) $cart_product as $value) {
                    $cart_product_data[] = DB::table('vendor_products')->where('product_number',$value['product_id'])->get();
                    $product_image[] = DB::table('vendor_product_images')->where('product_number',$value['product_id'])->first();
                }
                view()->share('cart_product_data', $cart_product_data);
                view()->share('product_image', $product_image);
            }
        });
    }

    public function register()
    {
        //
    }
}
