@extends('admin.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
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
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                @if (session('status'))

                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>

                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Total Products</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Vendor Name</th>
                        <th>Vendor Type</th>
                        <th>Login Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($vendore_data as $vendore_data)
                        <tr>
                            <td>{{ $vendore_data->vendore_user_id }}</td>
                            <td>{{ $vendore_data->name }}</td>
                            <td>{{ $vendore_data->vendor_type }}</td>
                            <td>{{ $vendore_data->email }}</td>
                            <td class="center">
                                <a href="{{ url('/admin/vendore/view') }}" onclick="event.preventDefault(); document.getElementById('vendore-view-form').submit();" class="btn btn-info btn-xs">{{ __('View') }}
                                </a>

                                <form id="vendore-view-form" action="{{ url('/admin/vendore/view') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="vendore_user_id" value="{{ $vendore_data->vendore_user_id }}">
                                    @csrf
                                </form>
                                @if( $vendore_data->vendore_user_status==0 )
                                    <a href="{{ url('/admin/vendore/status_change').'/'.$vendore_data->vendore_user_id }}" class="btn btn-primary btn-xs">Activate</a>
                                @elseif( $vendore_data->vendore_user_status==1 )
                                    <a href="{{ url('/admin/vendore/status_change').'/'.$vendore_data->vendore_user_id }}" class="btn btn-danger btn-xs">Deactivate</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL.</th>
                        <th>Vendor Name</th>
                        <th>Vendor Type</th>
                        <th>Login Email</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
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