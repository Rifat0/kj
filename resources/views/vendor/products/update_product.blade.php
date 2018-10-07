@extends('vendor.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/jasny/jasny-bootstrap.min.css') }}" rel="stylesheet">

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
                <button type="submit" form="form-product" data-toggle="tooltip" title="Save" class="btn btn-primary btn-sm"><i class="fa fa-save"></i></button>
                <a href="{{ url('/vendor/products') }}" data-toggle="tooltip" title="" class="btn btn-default btn-sm" data-original-title="Cancel"><i class="fa fa-reply"></i></a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> General</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"> Data</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"> Payment & Deliver Information</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                    </ul>
                    <form method="POST" action="{{ url('/vendor/products/products_update') }}" class="form-horizontal" id="form-product" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" name="product_number" value="{{ $product_data->product_number }}" class="form-control">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Name: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productName" class="form-control" value="{{ old('productName') }}{{ $product_data->productName }}">
                                            @if ($errors->has('productName'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productName') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Generic Name: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productGenericName" class="form-control" value="{{ old('productGenericName') }}{{ $product_data->productGenericName }}">
                                            @if ($errors->has('productGenericName'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productGenericName') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Description: <font color="red"> *</font></label>
                                        <div class="col-sm-10">
                                            <textarea class="summernote" name="productDescription" value="{{ old('productDescription') }}{{ $product_data->productDescription }}"></textarea>
                                            @if ($errors->has('productDescription'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productDescription') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Keywords:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="productKeyword" class="tagsinput form-control">
                                            </br>
                                            @if ($errors->has('productKeyword'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productKeyword') }}</font></strong>
                                                </span>
                                            @endif
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
                                            <input type="text" name="partNumber" class="form-control" value="{{ old('partNumber') }}{{ $product_data->partNumber }}">
                                            @if ($errors->has('partNumber'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('partNumber') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Menufacturer:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="menufacturer" class="form-control" value="{{ old('menufacturer') }}{{ $product_data->menufacturer }}">
                                            @if ($errors->has('menufacturer'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('menufacturer') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Model:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="modelNumber" class="form-control" value="{{ old('modelNumber') }}{{ $product_data->modelNumber }}">
                                            @if ($errors->has('modelNumber'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('modelNumber') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Category: <font color="red">*</font></label>
                                        <div class="col-sm-4">
                                            <select name="productCategory" class="form-control">
                                                <option disabled>-- Select Product Category --</option>
                                                @foreach($product_category as $category)
                                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-4">
                                            @if ($errors->has('productCategory'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productCategory') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Product Sub-Category: <font color="red">*</font></label>
                                        <div class="col-sm-4">
                                            <select name="productSubCategory" class="form-control" >
                                                <option disabled>-- Select Sub Category --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-4">
                                            @if ($errors->has('productSubCategory'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('productSubCategory') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Stock Count:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="stock_count" class="form-control" value="{{ old('stock_count') }}{{ $product_data->stock_count }}">
                                            @if ($errors->has('stock_count'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('stock_count') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Accessories:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="accessories" class="form-control" value="{{ old('accessories') }}{{ $product_data->accessories }}">
                                            @if ($errors->has('accessories'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('accessories') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Key Specification: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <textarea name="keySpecification" class="summernote" value="{{ old('keySpecification') }}{{ $product_data->keySpecification }}"></textarea>
                                            @if ($errors->has('keySpecification'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('keySpecification') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Dimensions Per Unit:</label>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_length" class="form-control" value="{{ old('dpu_w_p_length') }}{{ $product_payment_delivery_data->dpu_w_p_length }}">
                                            @if ($errors->has('dpu_w_p_length'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('dpu_w_p_length') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_width" class="form-control" value="{{ old('dpu_w_p_width') }}{{ $product_payment_delivery_data->dpu_w_p_width }}" >
                                            @if ($errors->has('dpu_w_p_width'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('dpu_w_p_width') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_height" class="form-control" value="{{ old('dpu_w_p_height') }}{{ $product_payment_delivery_data->dpu_w_p_height }}">
                                            @if ($errors->has('dpu_w_p_height'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('dpu_w_p_height') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_weight" class="form-control" value="{{ old('dpu_w_p_weight') }}{{ $product_payment_delivery_data->dpu_w_p_weight }}">
                                            @if ($errors->has('dpu_w_p_weight'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('dpu_w_p_weight') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="dpu_w_p_volume" class="form-control" value="{{ old('dpu_w_p_volume') }}{{ $product_payment_delivery_data->dpu_w_p_volume }}">
                                            @if ($errors->has('dpu_w_p_volume'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('dpu_w_p_volume') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Supply Type:</label>
                                        <div class="col-sm-10">
                                            <select name="supplyType" class="form-control">
                                                <option value="">Select</option>
                                                <option>OEM / Manufacturer</option>
                                                <option>Distributor</option>
                                                <option>Wholesaler</option>
                                                <option>Retailer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            @if ($errors->has('supplyType'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('supplyType') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="color" class="tagsinput form-control">
                                            @if ($errors->has('color'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('color') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
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
                                            @if( $get_payment_delivery[0]->smallOrdersAccepted =="yes")
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="yes" name="smallOrdersAccepted" checked>
                                                
                                                <label for="inlineRadio1"> Yes </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio1" value="no" name="smallOrdersAccepted">
                                                <label for="inlineRadio2"> No </label>
                                            </div>
                                            @else
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="yes" name="smallOrdersAccepted">
                                                
                                                <label for="inlineRadio1"> Yes </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio1" value="no" name="smallOrdersAccepted" checked>
                                                <label for="inlineRadio2"> No </label>
                                            </div>
<<<<<<< HEAD
                                            @endif
                                            <span class="help-block m-b-none"></span>
=======
                                            @if ($errors->has('smallOrdersAccepted'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('smallOrdersAccepted') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Minimum Order Quantity:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="minimumOrderQuantity" class="form-control" value="{{ old('minimumOrderQuantity') }}{{ $product_payment_delivery_data->minimumOrderQuantity }}">
                                            @if ($errors->has('minimumOrderQuantity'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('minimumOrderQuantity') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Unit of Measure:</label>
                                        <div class="col-sm-4">
                                            <select name="unitOfMeasure" class="form-control">
                                                <option value="">Select</option>
                                                <option>option 1</option>
                                                <option>option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            @if ($errors->has('unitOfMeasure'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('unitOfMeasure') }}</font></strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pd_price" class="form-control" value="{{ old('pd_price') }}{{ $product_data->pd_price }}">
                                            @if ($errors->has('pd_price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('pd_price') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price for Optional Units:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pd_priceForOptional" class="form-control" value="{{ old('pd_priceForOptional') }}{{ $product_payment_delivery_data->pd_priceForOptional }}">
                                            @if ($errors->has('pd_priceForOptional'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('pd_priceForOptional') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="instantPrice" class="form-control" value="{{ old('instantPrice') }}{{ $product_payment_delivery_data->instantPrice }}">
                                            @if ($errors->has('instantPrice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('instantPrice') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="fifteenDaysPrice" class="form-control" value="{{ old('fifteenDaysPrice') }}{{ $product_payment_delivery_data->fifteenDaysPrice }}">
                                            @if ($errors->has('fifteenDaysPrice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('fifteenDaysPrice') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="thirteenDaysPrice" class="form-control" value="{{ old('thirteenDaysPrice') }}{{ $product_payment_delivery_data->thirteenDaysPrice }}">
                                            @if ($errors->has('thirteenDaysPrice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('thirteenDaysPrice') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Packaging Dimensions Per Unit:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="p_d_p_u_length" class="form-control" value="{{ old('p_d_p_u_length') }}{{ $product_payment_delivery_data->p_d_p_u_length }}">
                                            @if ($errors->has('p_d_p_u_length'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('p_d_p_u_length') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="p_d_p_u_width" class="form-control" value="{{ old('productName') }}{{ $product_payment_delivery_data->p_d_p_u_width }}">
                                            @if ($errors->has('p_d_p_u_width'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('p_d_p_u_width') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="p_d_p_u_height" class="form-control" value="{{ old('p_d_p_u_height') }}{{ $product_payment_delivery_data->p_d_p_u_height }}">
                                            @if ($errors->has('p_d_p_u_height'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('p_d_p_u_height') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-3">
                                            <input type="text" name="weightPerPack" class="form-control" value="{{ old('weightPerPack') }}{{ $product_payment_delivery_data->weightPerPack }}">
                                            @if ($errors->has('weightPerPack'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('weightPerPack') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="exportCartonDimension" class="form-control" value="{{ old('exportCartonDimension') }}{{ $product_payment_delivery_data->exportCartonDimension }}">
                                            @if ($errors->has('exportCartonDimension'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('exportCartonDimension') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="exportCartonWeight" class="form-control" value="{{ old('exportCartonWeight') }}{{ $product_payment_delivery_data->exportCartonWeight }}">
                                            @if ($errors->has('exportCartonWeight'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('exportCartonWeight') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Delivery Rate:</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="DeliveryWithinState" class="form-control" value="{{ old('DeliveryWithinState') }}{{ $product_payment_delivery_data->DeliveryWithinState }}">
                                            @if ($errors->has('DeliveryWithinState'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DeliveryWithinState') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="DeliveryWithinGR" class="form-control" value="{{ old('DeliveryWithinGR') }}{{ $product_payment_delivery_data->DeliveryWithinGR }}">
                                            @if ($errors->has('DeliveryWithinGR'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DeliveryWithinGR') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="DeliveryOutsideGR" class="form-control" value="{{ old('DeliveryOutsideGR') }}{{ $product_payment_delivery_data->DeliveryOutsideGR }}">
                                            @if ($errors->has('DeliveryOutsideGR'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DeliveryOutsideGR') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-3">
                                            <input type="text" name="DurationDeliveryWithinState" class="form-control" value="{{ old('DurationDeliveryWithinState') }}{{ $product_payment_delivery_data->DurationDeliveryWithinState }}">
                                            @if ($errors->has('DurationDeliveryWithinState'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DurationDeliveryWithinState') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="DurationDeliveryWithinGR" class="form-control" value="{{ old('DurationDeliveryWithinGR') }}{{ $product_payment_delivery_data->DurationDeliveryWithinGR }}">
                                            @if ($errors->has('DurationDeliveryWithinGR'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DurationDeliveryWithinGR') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="DurationDeliveryOutsideGR" class="form-control" value="{{ old('DurationDeliveryOutsideGR') }}{{ $product_payment_delivery_data->DurationDeliveryOutsideGR }}">
                                            @if ($errors->has('DurationDeliveryOutsideGR'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        <font color="red">{{ $errors->first('DurationDeliveryOutsideGR') }}</font>
                                                    </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Payment Method: <font color="red">*</font></label>
                                        <div class="col-sm-4">
                                            <select name="paymentMethod" class="form-control" class="inputTxt"> 
                                                <option value="">--Select One--</option>
                                                <option value="CIA">Cash in Advance (CIA)</option>
                                                <option value="COD">Cash on Delivery (COD)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-4">
                                            @if ($errors->has('paymentMethod'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong><font color="red">{{ $errors->first('paymentMethod') }}</font></strong>
                                                </span>
                                            @endif
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($get_product_images as $image)
                                        <tr>
<<<<<<< HEAD
                                            <td>
                                                <img src="{{ asset('public/backend/img/vendor/products/'. $image->productImage) }}" class="img-lg">
=======
                                            <td><img src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage1) }}" height="100" width="100" ></td>
                                            <td>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="productImage1"></span>
                                                    <span class="fileinput-filename"></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                </div>
                                                <input type="hidden" name="p_productImage1" value="{{ $product_images_data->productImage1 }}">
                                            </td>
                                            @if ($errors->has('productImage1'))
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                
                                                <div class="col-sm-10">
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><font color="red">{{ $errors->first('productImage1') }}</font></strong>
                                                    </span>
                                                </div>
                                                
                                            </div>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage2) }}" height="100" width="100" ></td>
                                            <td>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="productImage2"></span>
                                                    <span class="fileinput-filename"></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                </div>
                                                <input type="hidden" name="p_productImage2" value="{{ $product_images_data->productImage2 }}">
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
                                            </td>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                @if ($errors->has('productImage2'))
                                                <div class="col-sm-10">
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><font color="red">{{ $errors->first('productImage2') }}</font></strong>
                                                    </span>
                                                </div>
                                                @endif
                                            </div>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage3) }}" height="100" width="100" ></td>
                                            <td>
<<<<<<< HEAD
                                                <input type="file" name="productImage" class="form-control">
                                            </td>
                                            <td>
                                                <a href="{{ url('/vendor/products/delete_product_request/'.$image->id) }}" class="btn btn-primary"><i class="fa fa-trash"></i></a>
=======
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="productImage3"></span>
                                                    <span class="fileinput-filename"></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                </div>
                                                <input type="hidden" name="p_productImage3" value="{{ $product_images_data->productImage3 }}">
                                            </td>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                @if ($errors->has('productImage3'))
                                                <div class="col-sm-10">
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><font color="red">{{ $errors->first('productImage3') }}</font></strong>
                                                    </span>
                                                </div>
                                                @endif
                                            </div>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage4) }}" height="100" width="100" ></td>
                                            <td>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="productImage4" onchange="readURL(this);"></span>
                                                    <span class="fileinput-filename"></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                </div>
                                                <input type="hidden" name="p_productImage4" value="{{ $product_images_data->productImage4 }}">
                                            </td>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                @if ($errors->has('productImage4'))
                                                <div class="col-sm-10">
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><font color="red">{{ $errors->first('productImage4') }}</font></strong>
                                                    </span>
                                                </div>
                                                @endif
                                            </div>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ asset('public/backend/img/vendor/products'.'/'.$product_images_data->productImage5) }}" height="100" width="100" ></td>
                                            <td>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                    <input type="file" name="productImage5" onchange="readURL(this);"></span>
                                                    <span class="fileinput-filename"></span>
                                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                                </div>
                                                <input type="hidden" name="p_productImage5" value="{{ $product_images_data->productImage5 }}">
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
                                            </td>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label"></label>
                                                @if ($errors->has('productImage5'))
                                                <div class="col-sm-4">
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong><font color="red">{{ $errors->first('productImage5') }}</font></strong>
                                                    </span>
                                                </div>
                                                @endif
                                            </div>
                                        </tr>
                                        @endforeach
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
    <script src="{{ asset('public/backend/js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

    <script src="{{ asset('public/backend/js/get_sub_category.js') }}"></script>

    <script src="{{ asset('public/backend/js/plugins/dataTables/datatables.min.js') }}"></script>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

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
<<<<<<< HEAD
    
=======
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
@endsection