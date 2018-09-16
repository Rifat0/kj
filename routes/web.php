<?php

// ==========================================================================================================
// Vendor
// ==========================================================================================================
// Dashboard
Route::get('/vendor/dashboard', 'Vendor\Dashboard@index');
// Products
Route::get('/vendor/products', 'Vendor\Products@products');
Route::get('/vendor/products/create_new_product', 'Vendor\Products@create_new_product');
Route::post('/vendor/products/store_new_product', 'Vendor\Products@store_new_product');
// Route::get('/vendor/products/product_detail/{id}', 'Vendor\Products@product_detail');
Route::get('/vendor/products/update_product/{id}', 'Vendor\Products@update_product');
Route::post('/vendor/products/update_product_request', 'Vendor\Products@update_product_request');
// Inventory Products
Route::get('/vendor/products/inventory_products', 'Vendor\Products@inventory_products');
// Products Review
Route::get('/vendor/products/pending_review', 'Vendor\Products@pending_review');
// Orders
Route::get('/vendor/orders', 'Vendor\Products@orders');
// Report
Route::get('/vendor/report', 'Vendor\Products@report');
// Customers
Route::get('/vendor/customers', 'Vendor\Customers@customers');
// Mailbox
Route::get('/vendor/mailbox', 'Vendor\Customers@mailbox');
Route::get('/vendor/mailbox/mail_compose', 'Vendor\Customers@mail_compose');
Route::get('/vendor/mailbox/mail_detail', 'Vendor\Customers@mail_detail');
// General Settings
Route::get('/vendor/general_settings', 'Vendor\Settings@general_settings');
Route::post('/vendor/general_settings/update_general_settings_request', 'Vendor\Settings@update_general_settings_request');


// ==========================================================================================================
// Content
// ==========================================================================================================


Auth::routes();
Route::get('/', 'Content\Home@index')->name('home');
Route::get('/home', 'Content\Home@index')->name('home');
Route::get('/category', 'Content\Home@category')->name('category');
Route::get('/product', 'Content\Home@product')->name('product');
Route::get('/cart_empty', 'Content\Home@cart_empty')->name('cart_empty');
Route::get('/cart_item', 'Content\Home@cart_item')->name('cart_item');
Route::get('/checkout ', 'Content\Home@checkout')->name('checkout');
Route::get('/summery ', 'Content\Home@summery')->name('summery');
Route::get('/about_us ', 'Content\Home@about_us')->name('about_us');
Route::get('/legal ', 'Content\Home@legal')->name('legal');
Route::get('/favorite ', 'Content\Home@favorite')->name('favorite');
Route::get('/compare ', 'Content\Home@compare')->name('compare');
Route::get('/sing_up ', 'Content\Home@sing_up')->name('sing_up');

// ==========================================================================================================
// Admin
// ==========================================================================================================

Route::get('/admin', 'Admin\Home@login')->name('admin_home');
Route::get('/admin/home', 'Admin\Home@index')->name('admin_home');

Route::get('/admin/category', 'Admin\Home@category')->name('admin_category');
Route::get('/admin/add_category', 'Admin\Home@add_category')->name('admin_category_add');
Route::post('/admin/add_category_submit', 'Admin\Home@add_category_submit');
Route::get('/admin/delete_category/{id}', 'Admin\Home@delete_category');
Route::get('/admin/update_category/{id}', 'Admin\Home@update_category');
Route::post('/admin/update_category', 'Admin\Home@update_category_submit');

Route::get('/admin/sub-category', 'Admin\Home@sub_category')->name('admin_sub_category');
Route::get('/admin/add_sub-category', 'Admin\Home@add_sub_category')->name('admin_sub_category_add');
Route::post('/admin/add_sub-category', 'Admin\Home@add_sub_category_submit')->name('admin_add_sub_category_submit');
Route::get('/admin/delete_sub-category/{id}', 'Admin\Home@delete_sub_category');
Route::get('/admin/update_sub-category/{id}', 'Admin\Home@update_sub_category');
Route::post('/admin/update_sub-category', 'Admin\Home@update_sub_category_submit');

Route::get('/admin/today_fetured', 'Admin\Home@today_fetured')->name('admin_today_fetured');
Route::get('/admin/add_today_fetured', 'Admin\Home@add_today_fetured')->name('admin_add_today_fetured');

Route::get('/admin/banar', 'Admin\Home@banar')->name('admin_banar');
Route::get('/admin/add_banar', 'Admin\Home@add_banar')->name('admin_add_banar');
Route::post('/admin/add_banar', 'Admin\Home@add_banar_submit');

Route::get('/admin/adv_sec_1', 'Admin\Home@adv_sec_1')->name('admin_adv_sec_1');
Route::get('/admin/add_adv_sec_1', 'Admin\Home@add_adv_sec_1')->name('admin_add_adv_sec_1');
Route::get('/admin/adv_sec_2', 'Admin\Home@adv_sec_2')->name('admin_adv_sec_2');
Route::get('/admin/add_adv_sec_2', 'Admin\Home@add_adv_sec_2')->name('admin_add_adv_sec_2');
Route::get('/admin/others', 'Admin\Home@others')->name('admin_others');
Route::get('/admin/add_others', 'Admin\Home@add_others')->name('admin_add_others');
Route::get('/admin/product_ap_rj', 'Admin\Home@product_ap_rj')->name('admin_product_ap_rj');
Route::get('/admin/update_product_ap_rj', 'Admin\Home@update_product_ap_rj')->name('admin_update_product_ap_rj');
Route::get('/admin/product_data', 'Admin\Home@product_data')->name('admin_product_data');
Route::get('/admin/vendor_ap_rj', 'Admin\Home@vendor_ap_rj')->name('admin_vendor_ap_rj');
Route::get('/admin/add_vendor', 'Admin\Home@add_vendor')->name('admin_add_vendor');
Route::get('/admin/coustomer_buyer_list', 'Admin\Home@coustomer_buyer')->name('admin_coustomer_buyer');
Route::get('/admin/add_coustomer_buyer', 'Admin\Home@add_coustomer_buyer')->name('admin_add_coustomer_buyer');
Route::get('/admin/orders_list', 'Admin\Home@orders_list')->name('admin_orders_list');
Route::get('/admin/requisitions_list', 'Admin\Home@requisitions_list')->name('admin_requisitions_list');
Route::get('/admin/user_list', 'Admin\Home@user_list')->name('admin_user_list');
Route::get('/admin/add_new_user', 'Admin\Home@add_new_user')->name('admin_add_new_user');
