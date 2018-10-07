@extends('Admin.Layouts.layout')

@section('css')
    
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
    <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Vendor Profile</h5>
                        </div>
                        <div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{ $vendore_data->name }}</strong></h4>
                                <p><i class="fa fa-map-marker"></i> join Date {{ Carbon::parse($vendore_data->created_at)->format('d-m-Y') }}</p>
                                <br>
                                <h4>
                                    Vendore Type : {{ $vendore_data->vendor_type }}
                                </h4>
                                <h4>
                                    Vendore Email : {{ $vendore_data->email }}
                                </h4>
                            </div>
                    </div>
                </div>
                    </div>
                
            </div>
        </div>
@endsection

@section('js')
    
@endsection