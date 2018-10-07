@extends('buyer.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
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
                <button type="submit" form="form-search" title="Save" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Search</button>
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
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label">Sub Category</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <label class="col-sm-2 control-label">Products</label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Selected Supplier</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline"> 
                                        <input type="checkbox" value="option1" id="inlineCheckbox1"> Gold Supplier </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> Assessed Supplier </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> Online </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option4" id="inlineCheckbox4"> Trade Assurance </label>
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
                            <h4><strong>Price</strong> <strong>Product name</strong></h4>
                            <p><i class="fa fa-map-marker"></i> Location</p>
                            <p>
                                Product short description
                            </p>
                            <p><i class="fa fa-map-marker"></i> Supplier Company Name</p>
                            <div class="row m-t-lg"></div>
                            <div class="user-button">
                                <div class="row">
                                    <!-- <div class="col-md-6"></div> -->
                                    <div class="col-md-6">
                                        <a href="{{ url('buyer/messages') }}" class="btn btn-default btn-sm btn-block"> Contact Supplier <i class="fa fa-envelope-open"></i></a>
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
    <script src="{{ asset('public/backend/js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
@endsection