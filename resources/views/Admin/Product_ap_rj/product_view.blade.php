@extends('Admin.Layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
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
    <div class="wrapper wrapper-content animated fadeInRight">
        @include('Admin.Layouts.message')
        <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">

                                        <div class="item">
                                            <div class="image">
                                                <img class="img-responsive" src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage1) }}" height="400" width="400">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="image">
                                                <img class="img-responsive" src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage2) }}" height="400" width="400">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="image">
                                                <img class="img-responsive" src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage3) }}" height="400" width="400">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="image">
                                                <img class="img-responsive" src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage4) }}" height="400" width="400">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="image">
                                                <img class="img-responsive" src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage5) }}" height="400" width="400">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        {{ $product_data->productName }}
                                    </h2>
                                    <small>{{ $product_data->productGenericName }}</small>
                                    <br><small>Created :{{ $product_data->created_at }} || Updated :{{ $product_data->updated_at }}</small>
                                    <br><small><strong>Category :{{ $category->category_name }} || Sub-category :{{ $sub_category->sub_category_name }}</strong></small>
                                    <hr>
                                    <div>
                                        <h1 class="product-main-price">${{ $product_data->pd_price }}</h1>
                                        <p>instant Price : ${{ $product_payment_delivery_data->instantPrice }}
                                        || 15 Day Price : ${{ $product_payment_delivery_data->fifteenDaysPrice }}
                                        || 30 day Price : ${{ $product_payment_delivery_data->thirteenDaysPrice }}</p>
                                    </div>
                                    <hr>
                                    <h4>Product description</h4>

                                    <div class="small text-muted">
                                        {!! $product_data->productDescription !!}
                                    </div>
                                    <h4>Color</h4>

                                    <div class="small text-muted">
                                        <?php
                                        $productcolor = explode(',',$product_data->color);
                                        foreach ($productcolor as $productcolor) { ?>
                                        <button class="btn btn-info btn-xs">{{ $productcolor }}</button>
                                        <?php } ?>
                                    </div>
                                    <h4>Key Specification</h4>

                                    <div class="small text-muted">
                                        {!! $product_data->keySpecification !!}
                                    </div>
                                    <dl class="dl-horizontal m-t-md small">
                                        <dt>Key words :</dt>
                                        <dd><p>
                                            <?php
                                            $productKeyword = explode(',',$product_data->productKeyword);
                                            foreach ($productKeyword as $value) { ?>
                                            <button class="btn btn-info btn-xs">{{ $value }}</button>
                                            <?php } ?>
                                        </p></dd>
                                        <dt><p>Part Number :</p></dt>
                                        <dd>{{ $product_data->partNumber }}</dd>
                                        <dt><p>Menufacturer :</p></dt>
                                        <dd>{{ $product_data->menufacturer }}</dd>
                                        <dt><p>Accessories Accessories :</p></dt>
                                        <dd>{{ $product_data->accessories }}</dd>
                                        <dt><p>Dimensions Per Length :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->dpu_w_p_length }}</dd>
                                        <dt><p>Dimensions Per width :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->dpu_w_p_width }}</dd>
                                        <dt><p>Dimensions Per Height :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->dpu_w_p_height }}</dd>
                                        <dt><p>Dimensions Per Weight :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->dpu_w_p_weight }}</dd>
                                        <dt><p>Dimensions Per Volume :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->dpu_w_p_volume }}</dd>
                                        <dt><p>Supply Type :</p></dt>
                                        <dd>{{ $product_data->supplyType }}</dd>
                                        <dt><p>Small Orders Accepted :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->smallOrdersAccepted }}</dd>
                                        <dt><p>Minimum Order Quantity :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->minimumOrderQuantity }}</dd>
                                        <dt><p>Unit of Measure :</p></dt>
                                        <dd>{{ $product_payment_delivery_data->unitOfMeasure }}</dd>
                                        <dt>Packaging Dimensions Per Length :</dt>
                                        <dd>{{ $product_payment_delivery_data->p_d_p_u_length }}</dd>
                                        <dt>Packaging Dimensions Per Width :</dt>
                                        <dd>{{ $product_payment_delivery_data->p_d_p_u_width }}</dd>
                                        <dt>Packaging Dimensions Per Height :</dt>
                                        <dd>{{ $product_payment_delivery_data->p_d_p_u_height }}</dd>
                                        <dt>Weight Per Pack :</dt>
                                        <dd>{{ $product_payment_delivery_data->weightPerPack }}</dd>
                                        <dt>Export Carton Dimension :</dt>
                                        <dd>{{ $product_payment_delivery_data->exportCartonDimension }}</dd>
                                        <dt>Delivery Within State :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryWithinState }}</dd>
                                        <dt>Delivery Within Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryWithinGR }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                        <dt>Duration Delivery Within State :</dt>
                                        <dd>{{ $product_payment_delivery_data->DurationDeliveryWithinState }}</dd>
                                        <dt>Duration Delivery Within Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DurationDeliveryWithinGR }}</dd>
                                        <dt>Duration Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DurationDeliveryOutsideGR }}</dd>
                                        <dt>Payment Method :</dt>
                                        <dd>{{ $product_payment_delivery_data->paymentMethod }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                        <dt>Delivery Outside Go-Range :</dt>
                                        <dd>{{ $product_payment_delivery_data->DeliveryOutsideGR }}</dd>
                                    </dl>
                                    <hr>
                                    <div>
                                        <div class="btn-group">
                                            <a href="{{ url('/admin/product/status_approve').'/'.$product_data->product_number }}" class="btn btn-primary btn-sm">{{ __('Approve') }}</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="{{ url('/admin/product/status_disapprove').'/'.$product_data->product_number }}" class="btn btn-danger btn-sm">{{ __('Disapprove') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/backend/js/plugins/slick/slick.min.js') }}"></script>

    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>
@endsection