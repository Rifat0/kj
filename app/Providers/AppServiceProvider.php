<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $shop_settings = DB::table('shop_settings')->first();
        view()->share('shop_settings', $shop_settings);
        $category_sub_category = DB::table('category_sub_category')->get();
        view()->share('category_sub_category', $category_sub_category);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
