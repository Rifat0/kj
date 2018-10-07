@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

<div class="container">
    <header class="page-header">
        <h1 class="page-title">Checkout Order</h1>
    </header>
    @include('Admin.Layouts.message')
    @if (Session::get('web_user_data')[0] ['web_user_id'])
    @else
    <p class="checkout-login-text">Sign in or Register to faster order checkout.</p>
    @endif

    <div class="row row-col-gap" data-gutter="60">
        <div class="col-md-4">
            <h3 class="widget-title">Order Info</h3>
            <div class="box">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nop=0; $sub_total=0; ?>
                        @foreach((array) $cart_product_data as $key => $item)
                        <?php 
                        $st = isset($item[0]) ? $item[0] : false;
                        $nop++;
                        ?>
                        @if($st)
                            @foreach(Session::get('cart_data') as $values)
                            @if($item[0]->product_number == $values['product_id'])
                            <tr>
                                <td>{{ $nop }}</td>
                                <td>{{ $item[0]->productName }}</td>
                                <td>{{ $values['quantity'] }}</td>
                                <td>${{ $item[0]->pd_price }}</td>
                                <td>${{ $item_total_price = $item[0]->pd_price*$values['quantity'] }}</td>
                                <?php $sub_total=$sub_total+$item_total_price; ?>
                            </tr>
                            @endif
                            @endforeach
                        @endif
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Subtotal</td>
                            <td></td>
                            <td></td>
                            <td>${{ $sub_total }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shipping</td>
                            <td></td>
                            <td></td>
                            <td>${{ $shopping_cost = 0 }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Taxes</td>
                            <td></td>
                            <td></td>
                            <td>${{ $taxes = 0 }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td>${{ $sub_total+$shopping_cost+$taxes }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="widget-title">Billng Details</h3>
            <form method="post" action="{{ url('/checkout') }}">
                @csrf
                <input type="hidden" name="web_user_id" value="{{ Session::get('web_user_data')[0] ['web_user_id'] }}" />
                <div class="form-group">
                    <label>Company Name</label>
                    <input class="form-control" type="text" name="company_name" value="@if(Session::get('web_user_data')[0] ['web_user_id']){{ Session::get('web_user_data')[0] ['company_name'] }}@else{{ old('company_name') }}@endif" />
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="email" name="login_email" value="@if(Session::get('web_user_data')[0] ['web_user_id']){{ Session::get('web_user_data')[0] ['login_email'] }}@else{{ old('login_email') }}@endif" />
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone" value="@if(Session::get('web_user_data')[0] ['web_user_id']){{ Session::get('web_user_data')[0] ['phone'] }}@else{{ old('phone') }}@endif" />
                </div>
                @if (Session::get('web_user_data')[0] ['web_user_id'])
                @else
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" id="create-account-checkbox" />
                        Create Kajadi Profile
                    </label>
                </div>
                <div id="create-account" class="hide">
                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="form-group">
                        <label>Confirm Passwprd</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <hr />
                </div>
                @endif
                <div class="form-group">
                    <label>Country</label>
                    <input class="form-control" type="text" name="country" value="{{ old('country') }}" />
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>City</label>
                            <input class="form-control" type="text" name="city" value="{{ old('city') }}" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Zip/Postal</label>
                            <input class="form-control" type="text" name="zip_postal" value="{{ old('zip_postal') }}" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" >{{ old('address') }}</textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input class="i-check" type="checkbox" id="shipping-address-checkbox" />Ship to a Different Address</label>
                </div>
                <div id="shipping-address" class="hide">
                    <div class="form-group">
                        <label>Shipping Country</label>
                        <input class="form-control" type="text" name="shipping_country" value="{{ old('shipping_country') }}" />
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Shipping City</label>
                                <input class="form-control" type="text" name="shipping_city" value="{{ old('shipping_city') }}" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Zip/Postal</label>
                                <input class="form-control" type="text" name="shipping_zip_postal" value="{{ old('shipping_zip_postal') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Shipping Address</label>
                        <textarea class="form-control" name="shipping_address" >{{ old('shipping_address') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="widget-title">Payment</h3>
                
                <img src="{{ asset('public/content/img/paypal.png') }}" />
                <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                <button type="submit" class="btn btn-primary" >Pay With Paypal</button>
            </div>
        </form>
    </div>
</div>
        
@endsection

@section('js')

@endsection