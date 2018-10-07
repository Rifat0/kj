@extends('vendor.layouts.layout')

@section('css')
    
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(1); ?>
            <?php $segment2 = Request::segment(2); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Order Details</h5>
                        </div>
                        <div>
                            <div class="ibox-content profile-content">
                                @foreach($products as $products)
                                <p><a target="_blank" href="{{ url('/product').'/'.$products->productCategory.'/'.$products->productSubCategory.'/'.$products->product_number }}">{{ $products->productName }}</a> * {{ $products->quantity }}</p>
                                @endforeach
                                <h4>Order Person: <strong>{{ $order_data->web_user_id }}</strong></h4>
                                <h4>Shipping Country: <strong>{{ $order_data->country }}</strong></h4>
                                <h4>Shipping City: <strong>{{ $order_data->city }}</strong></h4>
                                <h4>Shipping Address: <strong>{{ $order_data->address }}</strong></h4>
                                <h4>Order Date: <strong>{{ Carbon::parse($order_data->created_at)->format('d-m-Y') }}</strong></h4>
                                <a href="{{ url('/vendor/orders/accept').'/'.$order_data->order_id }}" class="btn btn-info btn-xs">Accept</a>
                                <a href="{{ url('/vendor/orders/reject').'/'.$order_data->order_id }}" class="btn btn-danger btn-xs">Reject</a>
                            </div>
                    </div>
                </div>
                    </div>
                
            </div>
        </div>
@endsection

@section('js')
    
@endsection