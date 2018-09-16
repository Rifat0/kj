@extends('vendor.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">

    <style>
        .imgPopup {
            position: relative;
            width: 96px;
            height: 96px;
        }

        .imgPopup img {
            width: 96px;
            height: 96px;
        }

        .imgPopup .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .imgPopup .btn:hover {
            background-color: black;
        }
    </style>
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(2); ?>
            <?php $segment2 = Request::segment(3); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <?php echo str_replace('_', ' ', ucfirst($segment1)); ?>
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
                <button type="submit" form="form-product" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> </button>
                <a href="{{ url('/vendor/products') }}"class="btn btn-default btn-sm"><i class="fa fa-reply"></i></a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> General</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"> Data</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"> Payment & Deliver Information</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                    </ul>
                    <form method="POST" action="{{ url('/vendor/products/update_product_request') }}" class="form-horizontal" id="form-product" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" id="id" name="id" value="{{ $get_product_detail[0]->id }}" class="form-control">
                    <input type="hidden" id="id" name="id" value="{{ $get_payment_delivery[0]->id }}" class="form-control">
                    <input type="hidden" id="id" name="id" value="{{ $get_product_images[0]->id }}" class="form-control">
                    <input type="hidden" name="previousProductImg" value="{{ $get_product_images[0]->productImage }}" class="form-control">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Name: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productName" value="{{ $get_product_detail[0]->productName }}" class="form-control" placeholder="Enter product name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Generic Name: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productGenericName" value="{{ $get_product_detail[0]->productGenericName }}" class="form-control" placeholder="Enter product generic name">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description: <font color="red"> *</font></label>
                                        <div class="col-sm-10">
                                            <textarea class="summernote" name="productDescription" placeholder="Enter description">
                                                {{ $get_product_detail[0]->productDescription }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keywords:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productKeyword" value="{{ $get_product_detail[0]->productKeyword }}" class="tagsinput form-control" placeholder="Enter keywords">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Part Number:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="partNumber" value="{{ $get_product_detail[0]->partNumber }}" class="form-control" placeholder="Enter part pumber">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Menufacturer:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="menufacturer" value="{{ $get_product_detail[0]->menufacturer }}" class="form-control" placeholder="Enter menufacturer">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Model:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="modelNumber" value="{{ $get_product_detail[0]->modelNumber }}" class="form-control" placeholder="Enter model number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Category: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <select name="productCategory" class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Sub-Category: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <select name="productSubCategory" class="form-control" >
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Accessories:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="accessories" value="{{ $get_product_detail[0]->accessories }}" class="form-control" placeholder="Enter Accessories">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Key Specification: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <textarea name="keySpecification" class="summernote" placeholder="Enter key specification">
                                                {{ $get_product_detail[0]->keySpecification }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Dimensions Per Unit:</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_length" value="{{ $get_payment_delivery[0]->dpu_w_p_length }}" class="form-control" placeholder="Enter length (Centimeter/CM)">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_width" value="{{ $get_payment_delivery[0]->dpu_w_p_width }}" class="form-control" placeholder="Enter width (Centimeter/CM)">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_height" value="{{ $get_payment_delivery[0]->dpu_w_p_height }}" class="form-control" placeholder="Enter height (Centimeter/CM)">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_weight" value="{{ $get_payment_delivery[0]->dpu_w_p_weight }}" class="form-control" placeholder="Enter weight (Killogram/KG)">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_volume" value="{{ $get_payment_delivery[0]->dpu_w_p_volume }}" class="form-control" placeholder="Enter volume (Cube meter/CM3)">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Vendor/Seller:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="vendor" value="{{ $get_product_detail[0]->vendor }}" class="form-control" placeholder="Enter vendor/seller">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Supply Type:</label>
                                        <div class="col-sm-10">
                                            <select name="supplyType" class="form-control">
                                                <option>OEM / Manufacturer</option>
                                                <option>Distributor</option>
                                                <option>Wholesaler</option>
                                                <option>Retailer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="color" value="{{ $get_product_detail[0]->color }}" class="tagsinput form-control" placeholder="Enter Color">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Small Orders Accepted:</label>
                                        <div class="col-sm-10">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="yes" name="smallOrdersAccepted" checked="">
                                                <label for="inlineRadio1"> Yes </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="no" name="smallOrdersAccepted">
                                                <label for="inlineRadio2"> No </label>
                                            </div>
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Minimum Order Quantity:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="minimumOrderQuantity" value="{{ $get_payment_delivery[0]->minimumOrderQuantity }}" class="form-control" placeholder="Enter minimum order quantity">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Unit of Measure: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <select name="unitOfMeasure" class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pd_price" value="{{ $get_payment_delivery[0]->pd_price }}" class="form-control" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price for Optional Units:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pd_priceForOptional" value="{{ $get_payment_delivery[0]->pd_priceForOptional }}" class="form-control" placeholder="Enter price for optional">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="instantPrice" value="{{ $get_payment_delivery[0]->instantPrice }}" class="form-control" placeholder="Enter instant price">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="fifteenDaysPrice" value="{{ $get_payment_delivery[0]->fifteenDaysPrice }}" class="form-control" placeholder="Enter 15 days price">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="thirteenDaysPrice" value="{{ $get_payment_delivery[0]->thirteenDaysPrice }}" class="form-control" placeholder="Enter 30 days price">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Packaging Dimensions Per Unit:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="p_d_p_u_length" value="{{ $get_payment_delivery[0]->p_d_p_u_length }}" class="form-control" placeholder="Enter length">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="p_d_p_u_width" value="{{ $get_payment_delivery[0]->p_d_p_u_width }}" class="form-control" placeholder="Enter width">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="p_d_p_u_height" value="{{ $get_payment_delivery[0]->p_d_p_u_height }}" class="form-control" placeholder="Enter height">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-3">
                                            <input type="text" name="weightPerPack" value="{{ $get_payment_delivery[0]->weightPerPack }}" class="form-control" placeholder="Enter weight per packaging">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="exportCartonDimension" value="{{ $get_payment_delivery[0]->exportCartonDimension }}" class="form-control" placeholder="Enter export carton dimension">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="exportCartonWeight" value="{{ $get_payment_delivery[0]->exportCartonWeight }}" class="form-control" placeholder="Enter export carton weigth">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Delivery Rate:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="DeliveryWithinState" value="{{ $get_payment_delivery[0]->DeliveryWithinState }}" class="form-control" placeholder="Enter delivery within state">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="DeliveryWithinGR" value="{{ $get_payment_delivery[0]->DeliveryWithinGR }}" class="form-control" placeholder="Enter delivery within geographical range">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="DeliveryOutsideGR" value="{{ $get_payment_delivery[0]->DeliveryOutsideGR }}" class="form-control" placeholder="Enter delivery outside geographical range">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-3">
                                            <input type="text" name="DurationDeliveryWithinState" value="{{ $get_payment_delivery[0]->DurationDeliveryWithinState }}" class="form-control" placeholder="Enter duration delivery within state">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="DurationDeliveryWithinGR" value="{{ $get_payment_delivery[0]->DurationDeliveryWithinGR }}" class="form-control" placeholder="Enter duration delivery within geographical range">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="DurationDeliveryOutsideGR" value="{{ $get_payment_delivery[0]->DurationDeliveryOutsideGR }}" class="form-control" placeholder="Enter duration delivery outside geographical range">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Payment Method: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <select name="paymentMethod" class="form-control" id="paymentTerm" class="inputTxt"> 
                                                <option value="">--Select One--</option>
                                                <option value="CIA">Cash in Advance (CIA)</option>
                                                <option value="COD">Cash on Delivery (COD)</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image <font color="red">*</font>
                                            </th>
                                            <th>
                                                Browse
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src=""></td>
                                            <td>
                                                <input type="file" name="productImage" class="form-control">
                                            </td>
                                            <td>
                                                <button class="btn btn-primary"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Additional Image
                                            </th>
                                            <th>
                                                Sort order
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="addImage">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button onclick="myFunction()" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
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

    <!-- iCheck -->
    <script src="{{ asset('public/backend/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <!-- Tags Input -->
    <script src="{{ asset('public/backend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    
    <script>
        $(document).ready(function(){

            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            var elem_4 = document.querySelector('.js-switch_4');
            var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
                switchery_4.disable();

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });


        });

        $('.chosen-select').chosen({width: "100%"});

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        var basic_slider = document.getElementById('basic_slider');

        noUiSlider.create(basic_slider, {
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        var range_slider = document.getElementById('range_slider');

        noUiSlider.create(range_slider, {
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        var drag_fixed = document.getElementById('drag-fixed');

        noUiSlider.create(drag_fixed, {
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>

    <!-- Data picker -->
    <script src="{{ asset('public/backend/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- SUMMERNOTE -->
    <script src="{{ asset('public/backend/js/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });
    </script>

    <script>
        function myFunction() {
            var table = document.getElementById("addImage");
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            cell1.innerHTML = '<div class="imgPopup"><img src="{{ asset('public/backend/img/gallery/1s.jpg') }}" alt="Snow" style="width:100%"><button class="btn"><i class="fa fa-pencil"></i></button></div>';
            cell2.innerHTML = '<td><input type="text" class="form-control" name="name" /></td>';
            cell3.innerHTML = '<button class="btn btn-white"><i class="fa fa-trash"></i> </button>';
        }
    </script>
    
@endsection