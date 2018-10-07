@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

<div class="gap"></div>
	<div class="container">
        <div class="payment-success-icon fa fa-check-circle-o"></div>
        <div class="payment-success-title-area">
            <h1 class="payment-success-title">{{ Session::get('web_user_data')[0] ['company_name'] }}, your payment was successful!</h1>
            <p class="lead">Order details has been send to <strong>{{ Session::get('web_user_data')[0] ['login_email'] }}</strong>
            </p>
        </div>
        <div class="gap gap-small"></div>
        <div class="row row-col-gap">
            <div class="col-md-4">
                <h3 class="widget-title">Order Summary</h3>
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
                            <?php $i=0; $sub = 0; ?>
                            @foreach($ordered_product as $product)
                            <?php $i++; ?>
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $product->productName }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>${{ $product->pd_price }}</td>
                                    <td>${{ $sub=$sub+$product->pd_price*$product->quantity }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>Subtotal</td>
                                <td></td>
                                <td></td>
                                <td>${{ $sub }}</td>
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
                                <td>${{ $sub+$shopping_cost+$taxes }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="widget-title">Billing/Shipping Details</h3>
                <div class="box">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Shipping Details</th>
                                <th>Billing Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Order ID</td>
                                <td>{{ $order_data->order_id }}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{ $order_data->city }}</td>
                            </tr>
                            <tr>
                                <td>Zip/Postal</td>
                                <td>{{ $order_data->zip_postal }}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{ $order_data->country }}</td>
                            </tr>
                            <tr>
                                <td>Order Date</td>
                                <td>{{ Carbon::parse($order_data->created_at)->format('d-m-Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>
@endsection

@section('js')

@endsection