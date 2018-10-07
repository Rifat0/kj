@extends('buyer.layouts.layout')

@section('css')
    <!-- Toastr style -->
    <link href="{{ asset('public/backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-6">
            <?php $segment = Request::segment(2); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment)); ?></strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-6">
            <div class="title-action">
                <button type="submit" title="Save" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Search</button>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <form method="POST" action="{{ url('#') }}" id="form-search" role="form" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vendors</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option value="">-- Select Vendors --</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">-- Select Category --</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label">Sub Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value="">-- Select Sub Category --</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">

                        <div class="product-imitation">
                            [ INFO ]
                        </div>
                        <div class="product-desc">
                            <span class="product-price">
                                $10
                            </span>
                            <small class="text-muted">Category</small>
                            <a href="#" class="product-name"> Product</a>



                            <div class="small m-t-xs">
                                Many desktop publishing packages and web page editors now.
                            </div>
                            <div class="m-t text-righ">

                                <a href="#" class="btn btn-xs btn-outline btn-primary">Add to cart <i class="fa fa-shopping-cart"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection