@extends('admin.layouts.layout')

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
                <a href="{{ url('/admin/add_banar') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Banar </a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">

        @include('Admin.Layouts.message')

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Banar Table </h5>
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
                                <th>Text</th>
                                <th>URL</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banar_data as $banar_data)
                            <tr>
                                <td>{{ $banar_data->banar_id }}</td>
                                <td><img class="" src="{{ asset('public/content/banar_image/' . $banar_data->banar_image) }}"  height="200" width="300"></td>
                                <td>{{ $banar_data->banar_text }}</td>
                                <td>{{ $banar_data->banar_url }}</td>
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