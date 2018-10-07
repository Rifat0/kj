@extends('Admin.Layouts.layout')

@section('css')

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
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                            <form method="POST" action="{{ url('/admin/add_adv_sec_1') }}" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Vendor<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select name="vendor_id" class="form-control" >
                                        <option>--Select Vendor--</option>
                                        @foreach($vendore_data as $vendore)
                                        <option value="{{ $vendore->vendore_user_id }}">{{ $vendore->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vendor Category<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select name="vendor_category" class="form-control" >

                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">image <font color="red">*</font></label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Product Name">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <a href="{{ url('/admin/adv_sec_1') }}" class="btn btn-white" type="submit">Cancel</a>
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
    <script src="{{ asset('public/backend/js/get_vendor_category.js') }}"></script>
@endsection