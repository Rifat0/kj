<?php

// ==========================
// Admin
// ==========================

Route::get('/admin', 'Admin\Home@login');
Route::post('/admin/login', 'Admin\Home@login_submit');

Route::group(['middleware' => 'admin_user'], function () {
    
	Route::post('/admin/logout', 'Admin\Home@logout_submit');
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
	Route::get('/admin/add_today_fetured', 'Admin\Home@add_today_fetured');

	Route::get('/admin/banar', 'Admin\Home@banar')->name('admin_banar');
	Route::get('/admin/add_banar', 'Admin\Home@add_banar')->name('admin_add_banar');
	Route::post('/admin/add_banar', 'Admin\Home@add_banar_submit');

	Route::get('/admin/adv_sec_1', 'Admin\Home@adv_sec_1');
	Route::get('/admin/add_adv_sec_1', 'Admin\Home@add_adv_sec_1');
	Route::post('/admin/add_adv_sec_1', 'Admin\Home@add_adv_sec_1_submit');

	Route::get('/admin/vendor_category/{id}', 'Admin\Home@vendor_category');

	Route::get('/admin/adv_sec_2', 'Admin\Home@adv_sec_2');
	Route::post('/admin/add_adv_sec_2', 'Admin\Home@add_adv_sec_2_submit');
	Route::get('/admin/add_adv_sec_2', 'Admin\Home@add_adv_sec_2')->name('admin_add_adv_sec_2');

	Route::get('/admin/others', 'Admin\Home@others');
	Route::post('/admin/others_update', 'Admin\Home@others_update');

	Route::get('/admin/product_ap_rj', 'Admin\Home@product_ap_rj');
	Route::get('/admin/product/view/{id}', 'Admin\Home@product_view');
	Route::get('/admin/product/status_approve/{id}', 'Admin\Home@product_status_approve');
	Route::get('/admin/product/status_disapprove/{id}', 'Admin\Home@product_status_disapprove');
	Route::get('/admin/product_data', 'Admin\Home@product_data')->name('admin_product_data');

	Route::get('/admin/products/create_new_product', 'Admin\Product@create_new_product');
	Route::post('/admin/store_new_product', 'Admin\Product@store_new_product');

	Route::get('/admin/update_product_ap_rj', 'Admin\Product@update_product_ap_rj');

	Route::get('/admin/vendor_ap_rj', 'Admin\Home@vendor_ap_rj');
	Route::get('/admin/vendore/status_change/{id}', 'Admin\Home@vendore_status_change');
	Route::post('/admin/vendore/view', 'Admin\Home@vendore_view');

	Route::get('/admin/coustomer_buyer_list', 'Admin\Home@coustomer_buyer');
	Route::get('/admin/coustomer_buyer/view/{id}', 'Admin\Home@coustomer_buyer_view');
	Route::get('/admin/coustomer_buyer/status_change/{id}', 'Admin\Home@coustomer_buyer_status_change');

	Route::get('/admin/orders_list', 'Admin\Home@orders_list')->name('admin_orders_list');
	Route::get('/admin/requisitions_list', 'Admin\Home@requisitions_list')->name('admin_requisitions_list');
	Route::get('/admin/user_list', 'Admin\Home@user_list')->name('admin_user_list');
	Route::get('/admin/add_new_user', 'Admin\Home@add_new_user')->name('admin_add_new_user');

});

// ====================================
// Vendor
// ====================================

Route::get('/vendore', 'Vendor\Home@login');
Route::get('/vendore/signUp', 'Vendor\Home@signUp');
Route::post('/vendore/login', 'Vendor\Home@login_submit');
Route::post('/vendore/signUp', 'Vendor\Home@signUp_submit');
	
Route::get('sub_category/{id}', 'Vendor\Products@get_sub_category');

Route::group(['middleware' => 'vendore_user'], function () {

	Route::post('/vendore/logout', 'Vendor\Home@logout');
	// Dashboard
	Route::get('/vendor/dashboard', 'Vendor\Dashboard@index');
	// Products
	Route::get('/vendor/products', 'Vendor\Products@products');
	Route::get('/vendor/product/view/{id}', 'Vendor\Products@product_detail');
	Route::get('/vendor/products/create_new_product', 'Vendor\Products@create_new_product');
	Route::post('/vendor/products/store_new_product', 'Vendor\Products@store_new_product');
	Route::get('/vendor/products/update_product/{id}', 'Vendor\Products@update_product');
	Route::post('/vendor/products/products_update', 'Vendor\Products@update_product_request');
	// Inventory Products
	Route::get('/vendor/products/inventory_products', 'Vendor\Products@inventory_products');
	Route::post('/vendor/products/stock_updaet', 'Vendor\Products@stock_updaet');
	// Products Review
	Route::get('/vendor/products/pending_review', 'Vendor\Products@pending_review');
	// Orders
	Route::get('/vendor/orders', 'Vendor\Products@orders');
	Route::get('/vendor/orders/view/{id}', 'Vendor\Products@orders_view');
	Route::get('/vendor/orders/accept/{id}', 'Vendor\Products@orders_accept');
	Route::get('/vendor/orders/reject/{id}', 'Vendor\Products@orders_reject');
	// Report
	Route::get('/vendor/report', 'Vendor\Products@report');
	// Communication-> Customers
	Route::get('/vendor/customers', 'Vendor\Communication@customers');
	// Communication-> Message
	Route::get('/vendor/message', 'Vendor\Communication@message');
	// Communication-> Mailbox
	Route::get('/vendor/mailbox', 'Vendor\Communication@mailbox');
	Route::get('/vendor/mailbox/mail_compose', 'Vendor\Communication@mail_compose');
	Route::get('/vendor/mailbox/mail_detail', 'Vendor\Communication@mail_detail');
	// General Settings
	Route::get('/vendor/general_settings', 'Vendor\Settings@general_settings');
	Route::post('/vendor/general_settings/update_general_settings_request', 'Vendor\Settings@update_general_settings_request');

});

// ======================================
// Content
// ======================================

Route::get('/', 'Content\Home@index')->name('home');
Route::get('/home', 'Content\Home@index')->name('home');
Route::get('/category/{cat_id}', 'Content\Product@get_category_product');
Route::get('/category/sub-category/{cat_id}/{sub_cat_id}', 'Content\Product@get_sub_category_product');
Route::get('/product/{cat_id}/{sub_cat_id}/{p_id}', 'Content\Product@get_product');

Route::get('/add-to-cart/{id}', 'Content\Product@add_to_cart');
Route::get('/cart_item', 'Content\Home@cart_item')->name('cart_item');
Route::get('/remove_cart_product/{key}', 'Content\Product@remove_cart_product');
Route::get('/add-to-cart_des', 'Content\Product@cart_des');
Route::post('/update_cart', 'Content\Product@update_cart');

Route::post('/review_submit', 'Content\Product@review_submit');

Route::get('/add-to-wishlist/{id}', 'Content\Product@add_to_wishlist');

Route::get('/checkout ', 'Content\Home@checkout');
Route::post('/checkout ', 'Content\Home@checkout_submit');

Route::get('/summery/{order_id} ', 'Content\Home@summery')->name('summery');
Route::get('/about_us ', 'Content\Home@about_us')->name('about_us');
Route::get('/legal ', 'Content\Home@legal')->name('legal');
Route::get('/favorite ', 'Content\Home@favorite')->name('favorite');
Route::get('/compare ', 'Content\Home@compare')->name('compare');
Route::get('/sing_up ', 'Content\Home@sing_up')->name('sing_up');
Route::post('/sing_up ', 'Content\Home@sing_up_submit');
Route::post('/login ', 'Content\Home@login_submit');
Route::post('/logout ', 'Content\Home@logout');
Route::post('/newsletter_submit ', 'Content\Home@newsletter_submit');

// =============================
// Buyer Portal
// =============================

// Dashboard
Route::get('/buyer/dashboard', 'Buyer\Dashboard@index');
// Products
// Route::get('/buyer/products', 'Buyer\Products@products');
// Route::get('/buyer/products/create_new_product', 'Buyer\Products@create_new_product');
// Route::post('/buyer/products/store_new_product', 'Buyer\Products@store_new_product');
// Route::get('/buyer/products/product_detail/{id}', 'Buyer\Products@product_detail');
// Route::get('/buyer/products/update_product/{id}', 'Buyer\Products@update_product');
// Route::post('/buyer/products/update_product_request', 'Buyer\Products@update_product_request');
// Inventory Products
// Route::get('/buyer/products/inventory_products', 'Buyer\Products@inventory_products');
// Products Review
// Route::get('/buyer/products/pending_review', 'Buyer\Products@pending_review');
// Products -> Orders
Route::get('/buyer/orders', 'Buyer\Products@orders');
// Products -> Report
Route::get('/buyer/report', 'Buyer\Products@report');
// Products -> accounting
Route::get('/buyer/accounting', 'Buyer\Products@accounting');
Route::get('/buyer/account_summery', 'Buyer\Products@accountSummery');
// Payment -> dueAndOutstandingPayment
Route::get('/buyer/due_and_outstanding_payment', 'Buyer\Products@dueAndOutstandingPayment');
// Payment -> supplierResearchAndSelection
Route::get('/buyer/supplier_research_and_selection', 'Buyer\Products@supplierResearchAndSelection');
Route::get('/buyer/messages', 'Buyer\Products@messages');
// Vendors -> supplierResearchAndSelection
Route::get('/buyer/favorite_and_credit_vendors', 'Buyer\Products@favoriteAndCreditVendors');
// Products -> accounting
Route::get('/buyer/my_vendor_products', 'Buyer\Products@myVendorProducts');
// Products -> tenders_and_bids
Route::get('/buyer/tenders_and_bids', 'Buyer\Products@tendersAndBids');
Route::get('/buyer/send_RFQ', 'Buyer\Products@sendRFQ');
// Products -> vendor_frofile
Route::get('/buyer/vendor_profile', 'Buyer\Products@vendorProfile');
// Communication-> Message
// Route::get('/buyer/message', 'Buyer\Communication@message');
// Communication-> Mailbox
// Route::get('/buyer/mailbox', 'Buyer\Communication@mailbox');
// Route::get('/buyer/mailbox/mail_compose', 'Buyer\Communication@mail_compose');
// Route::get('/buyer/mailbox/mail_detail', 'Buyer\Communication@mail_detail');