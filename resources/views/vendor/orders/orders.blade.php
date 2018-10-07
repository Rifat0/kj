@extends('vendor.layouts.layout')

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
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        @include('Admin.Layouts.message')
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo str_replace('_', ' ', ucfirst($segment)); ?></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Company Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($order_data as $key => $order_data)
                        <tr>
                            <td>{{ $order_data['order_id'] }}</td>
                            <td>{{ $order_data['ordrer_person'] }}</td>
                            <td>{{ $order_data['country'] }}</td>
                            <td>{{ $order_data['city'] }}</td>
                            <td>{{ $order_data['address'] }}</td>
                            <td>{{ Carbon::parse($order_data['date'])->format('d-m-Y') }}</td>
                            <td>
                                @if($order_data['status']==0)
                                <label>Pending</label>
                                @elseif($order_data['status']==1)
                                <label>Accepted</label>
                                @elseif($order_data['status']==2)
                                <label>Rejected</label>
                                @endif
                            </td>
                            <td class="center">
                                <a href="{{ url('/vendor/orders/view/'.$order_data['order_id']) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Order ID</th>
                        <th>Company Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Order Date</th>
                        <th>Status</th>
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