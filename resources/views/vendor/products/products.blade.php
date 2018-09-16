@extends('vendor.layouts.layout')

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
        <div class="col-lg-8">
            <div class="title-action">
                <a href="{{ url('/vendor/products/create_new_product') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create New Products </a>
                <a href="{{ url('/vendor/products/inventory_products') }}" class="btn btn-primary btn-sm"><i class="fa fa-houzz"></i> Inventory Products </a>
                <a href="{{ url('/vendor/products/pending_review') }}" class="btn btn-primary btn-sm"><i class="fa fa-clock-o"></i> Pending Review </a>
            </div>
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
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Number In Stock</th>
                        <th>Sold Quantity</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($get_products as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $products->productName }}</td>
                        <td>Price</td>
                        <td>Win 95+</td>
                        <td>4</td>
                        <td class="center">
                            <!-- <a href="{{ url('/vendor/products/product_detail', $products->id) }}" class="btn btn-primary btn-xs">View</a> -->
                            <a href="{{ url('/vendor/products/update_product', $products->id) }}" class="btn btn-primary btn-xs">Update</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>SL.</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Number In Stock</th>
                        <th>Sold Quantity</th>
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