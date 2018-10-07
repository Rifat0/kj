@extends('Admin.Layouts.layout')

@section('css')
    <!-- <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet"> -->
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
        <div class="col-lg-8">
            <div class="title-action">
                <a href="{{ url('/admin/add_adv_sec_2') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Item </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        @include('Admin.Layouts.message')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Advertisement Section One </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Vendor</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adv_sec_2_data as $adv_sec_2_data)
                            <tr>
                                <td>{{ $adv_sec_2_data->adv_sec_2_id }}</td>
                                <td><img class="" src="{{ asset('public/content/adv_sec_2/' . $adv_sec_2_data->image) }}"  height="200" width="300"></td>
                                <td>{{ $adv_sec_2_data->vendor_id }}</td>
                                <td>{{ $adv_sec_2_data->vendor_category_id }}</td>
                                <td class="center">
                                    <a href="{{ url('/admin/edit_adv_sec_2/'.$adv_sec_2_data->adv_sec_2_id) }}" class="btn btn-primary btn-xs">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    
@endsection