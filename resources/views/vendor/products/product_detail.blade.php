@extends('vendor.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/slick/slick-theme.css') }}" rel="stylesheet">
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
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment1)); ?></strong>
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
                <div class="ibox product-detail">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-images">
                                    <div>
                                        @foreach($get_product_images as $product_images)
                                        <div class="image-imitation">
                                            <img class="" src="{{ asset('public/vendor/storage/images/products/' . $product_images->productImage) }}">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h2 class="font-bold m-b-xs">
                                    {{ $get_product_detail[0]->productName }}
                                </h2>
                                <small>{{ $get_product_detail[0]->productGenericName }}</small>
                                <div class="m-t-md">
                                    <h2 class="product-main-price">${{ $get_payment_delivery[0]->pd_price }} <small class="text-muted">Exclude Tax</small> </h2>
                                </div>
                                <hr>

                                <h4>Product description</h4>

                                <div class="small text-muted">
                                    {{ $get_product_detail[0]->productDescription }}
                                </div>
                                <dl class="small m-t-md">
                                    <dt>Part Number</dt>
                                    <dd>{{ $get_product_detail[0]->partNumber }}</dd>
                                    <dt>Menufacturer</dt>
                                    <dd>{{ $get_product_detail[0]->menufacturer }}</dd>
                                    <dt>Model Number</dt>
                                    <dd>{{ $get_product_detail[0]->modelNumber }}</dd>
                                    <dt>Supply Type</dt>
                                    <dd>{{ $get_product_detail[0]->supplyType }}</dd>
                                    <dt>Product Category</dt>
                                    <dd>{{ $get_product_detail[0]->productCategory }}</dd>
                                    <dt>Product Sub Category</dt>
                                    <dd>{{ $get_product_detail[0]->productSubCategory }}</dd>
                                    <dt>Color</dt>
                                    <dd>{{ $get_product_detail[0]->color }}</dd>
                                </dl>
                                <hr>

                                <div>
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-cart-plus"></i> Add to cart</button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> Add to wishlist </button>
                                        <button class="btn btn-white btn-sm"><i class="fa fa-envelope"></i> Contact with author </button>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="ibox-footer">
                        <span class="pull-right">
                            Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                        </span>
                        The generated Lorem Ipsum is therefore always free
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Product info</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2"> Data</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3"> Discount</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="Product name"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="$160.00"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                                <div class="summernote">
                                                    <h3>Lorem Ipsum is simply</h3>
                                                    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                    <br/>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Title:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Description:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="Sheets containing Lorem"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                                        </div>
                                    </fieldset>

                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">

                                    <fieldset class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">ID:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="543"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Model:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="..."></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Location:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="location"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Tax Class:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" >
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Quantity:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="Quantity"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Minimum quantity:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="2"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Sort order:</label>
                                            <div class="col-sm-10"><input type="text" class="form-control" placeholder="0"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Status:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" >
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>


                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table table-stripped table-bordered">

                                            <thead>
                                            <tr>
                                                <th>
                                                    Group
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                    Discount
                                                </th>
                                                <th style="width: 20%">
                                                    Date start
                                                </th>
                                                <th style="width: 20%">
                                                    Date end
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select class="form-control" >
                                                        <option selected>Group 1</option>
                                                        <option>Group 2</option>
                                                        <option>Group 3</option>
                                                        <option>Group 4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="10">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="$10.00">
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group date">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>

                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Image preview
                                                </th>
                                                <th>
                                                    Image url
                                                </th>
                                                <th>
                                                    Sort order
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/2s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image1.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="1">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/1s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image2.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="2">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/3s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image3.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="3">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/4s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image4.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="4">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/5s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image5.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="5">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/6s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image6.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="6">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="img/gallery/7s.jpg">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" disabled value="http://mydomain.com/images/image7.png">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" value="7">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <!-- slick carousel-->
    <script src="{{ asset('public/backend/js/plugins/slick/slick.min.js') }}"></script>

    <script>
        $(document).ready(function(){


            $('.product-images').slick({
                dots: true
            });

        });

    </script>
@endsection