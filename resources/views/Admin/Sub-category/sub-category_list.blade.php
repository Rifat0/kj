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
        <div class="col-lg-8">
            <div class="title-action">
                <a href="{{ url('/admin/add_sub-category') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Sub-category </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        @include('Admin.Layouts.message')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Category Table </h5>
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
                                <th>Category Name</th>
                                <th>Sub-category Name</th>
                                <th>Description</th>
                                <th>Abbreviation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product_sub_category as $sub_category)
                            <tr>
                                <td>{{ $sub_category->sub_category_id }}</td>
                                <td>{{ $sub_category->category_name }}</td>
                                <td>{{ $sub_category->sub_category_name }}</td>
                                <td>{{ $sub_category->sub_category_description }}</td>
                                <td>{{ $sub_category->sub_category_abbreviation }}</td>
                                <td class="center">
                                    <a href="{{ url('/admin/update_sub-category/'.$sub_category->sub_category_id) }}" class="btn btn-primary btn-xs">Update</a>
                                    <a href="{{ url('/admin/delete_sub-category/'.$sub_category->sub_category_id) }}" class="btn btn-danger btn-xs">Delete</a>
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