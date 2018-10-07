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

                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="{{ asset('public/backend/img/buyer/profilePicture/profile_big.jpg') }}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Product name</strong></h4>
                                <p><i class="fa fa-map-marker"></i> Location</p>
                                <h5>
                                    Branches
                                </h5>
                                <h5>
                                    Supplier Type
                                </h5>
                                <p>
                                    Experience
                                </p>
                                <div class="row m-t-lg"></div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-primary btn-sm btn-block">Add to cart <i class="fa fa-shopping-cart"></i> </a>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope-open"></i> Contact Supplier</button>
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