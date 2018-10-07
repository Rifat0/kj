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
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List of all <?php echo str_replace('_', ' ', ucfirst($segment)); ?></h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Favorite</th>
                        <th>Credit</th>
                        <th>Paid Goods</th>
                        <th>Accept</th>
                        <th>Reject</th>
                        <th>Set Credit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trident</td>
                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                        <td>Trident</td>
                        <td>Trident</td>
                        <td><a href="{{ url('#') }}" class="btn btn-primary btn-sm">Accept</a></td>
                        <td><a href="{{ url('#') }}" class="btn btn-danger btn-sm">Reject</a></td>
                        <td>
                            <a href="{{ url('#') }}" class="btn btn-success btn-sm">Set Credit</a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Company Name</th>
                        <th>Favorite</th>
                        <th>Credit</th>
                        <th>Paid Goods</th>
                        <th>Accept</th>
                        <th>Reject</th>
                        <th>Set Credit</th>
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