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
            if(@$sub_category_data){
                $sub_category_id = $sub_category_data[0]->sub_category_id;
                $category_id = $sub_category_data[0]->category_id;
                $sub_category_name = $sub_category_data[0]->sub_category_name;
                $sub_category_description = $sub_category_data[0]->sub_category_description;
                $sub_category_abbreviation = $sub_category_data[0]->sub_category_abbreviation;
            }else{
                $sub_category_id = "";
                $category_id = "";
                $sub_category_name = "";
                $sub_category_description = "";
                $sub_category_abbreviation = "";
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
                        @if(@$sub_category_data)
                        <form method="POST" action="{{ url('/admin/update_sub-category') }}" class="form-horizontal" enctype="multipart/form-data">
                        @else
                        <form method="POST" action="{{ url('/admin/add_sub-category') }}" class="form-horizontal" enctype="multipart/form-data">
                        @endif
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control" >
                                        @foreach($product_category as $category)
                                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sub-category Name<font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="sub_category_id" value="{{ $sub_category_id }}" class="form-control">
                                    <input type="text" name="sub_category_name" value="{{ $sub_category_name }}" class="form-control" value="" placeholder="Enter Product Generic Name">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sub-category Description <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <textarea name="sub_category_description" class="form-control" placeholder="Enter Product Description">{{ $sub_category_description }}</textarea>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sub-category Abbreviation <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <textarea name="sub_category_abbreviation" class="form-control" placeholder="Enter Product Description">{{ $sub_category_abbreviation }}</textarea>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{ url('/admin/sub-category') }}" class="btn btn-white" type="submit">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    
@endsection