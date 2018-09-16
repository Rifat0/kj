@extends('admin.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(2); ?>
            <?php $segment2 = Request::segment(3); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment1)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/admin/home') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment1)); ?></strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        @include('Admin.Layouts.message')

        <?php
            if(@$category_data){
                $category_id = $category_data[0]->category_id;
                $category_image = $category_data[0]->category_image;
                $category_name = $category_data[0]->category_name;
                $category_description = $category_data[0]->category_description;
                $category_abbreviation = $category_data[0]->category_abbreviation;
            }else{
                $category_id = "";
                $category_image = "";
                $category_name = "";
                $category_description = "";
                $category_abbreviation = "";
            }
        ?>

        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Category Info</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @if(@$category_data)
                        <form method="POST" action="{{ url('/admin/update_category') }}" class="form-horizontal" enctype="multipart/form-data">
                        @else
                        <form method="POST" action="{{ url('/admin/add_category_submit') }}" class="form-horizontal" enctype="multipart/form-data">
                        @endif
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category image <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="file" name="category_image" class="form-control">
                                    <input type="hidden" name="previous_category_image" value="{{ $category_image }}" class="form-control">
                                    <input type="hidden" name="category_id" value="{{ $category_id }}" class="form-control">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category Name<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="text" name="category_name" class="form-control" value="{{ $category_name }}" placeholder="Enter Category Name">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category Description <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <textarea name="category_description" class="form-control" placeholder="Enter Category Description">{{ $category_description }}</textarea>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category Abbreviation <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <textarea name="category_abbreviation" class="form-control" placeholder="Enter Category Abbreviation">{{ $category_abbreviation }}</textarea>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{ url('/admin/category') }}" class="btn btn-white" type="submit">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    
@endsection