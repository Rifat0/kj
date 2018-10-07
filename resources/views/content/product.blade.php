@extends('content.layout.layout')

@section('css')

@endsection

@section('container')
    <div class="container">
        <header class="page-header">
            <h1 class="page-title">{{ $product->productName }}</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/category/'.$category->category_id) }}">{{ $category->category_name }}</a>
                </li>
                <li><a href="{{ url('/category/sub-category/'.$category->category_id.'/'.$sub_category->sub_category_id) }}">{{ $sub_category->sub_category_name }}</a>
                </li>
                <li class="active">{{ $product->productName }}</li>
            </ol>
        </header>
        <div class="row">
            @include('Admin.Layouts.message')
            <div class="col-md-5">
                    @if($vendor_product_images->productImage1 != null)
                    <div class="product-page-product-wrap jqzoom-stage">
                        <div class="clearfix">
                            <a href="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" id="jqzoom" data-rel="gal-1">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" height="450" width="400" />
                            </a>
                        </div>
                    </div>
                    @endif
                    <ul class="jqzoom-list">

                        @if($vendor_product_images->productImage1 != null)
                        <li>
                            <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}'}">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </li>
                        @endif
                        @if($vendor_product_images->productImage2 != null)
                        <li>
                            <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}'}">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </li>
                        @endif
                        @if($vendor_product_images->productImage3 != null)
                        <li>
                            <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage3 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage3 }}'}">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage3 }}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </li>
                        @endif
                        @if($vendor_product_images->productImage4 != null)
                        <li>
                            <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage4 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage4 }}'}">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage4 }}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </li>
                        @endif
                        @if($vendor_product_images->productImage5 != null)
                        <li>
                            <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage5 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage5 }}'}">
                                <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage5 }}" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            <div class="col-md-7">
                <div class="row" data-gutter="10">
                    <div class="col-md-8">
                        <div class="box">
                            <table
                            class="table table-striped product-page-features-table">
                                <tbody>
                                    <tr>
                                        <td>Generic Name:</td>
                                        <td>{{ $product->productGenericName }}</td>
                                    </tr>
                                    <tr>
                                        <td>Menufacturer:</td>
                                        <td>{{ $product->menufacturer }}</td>
                                    </tr>
                                    <tr>
                                        <td>Vendor:</td>
                                        <td>{{ $product->companyName }}</td>
                                    </tr>
                                    <tr>
                                        <td>Model Number:</td>
                                        <td>{{ $product->modelNumber }}</td>
                                    </tr>
                                    <tr>
                                        <td>Supply Type:</td>
                                        <td>{{ $product->supplyType }}</td>
                                    </tr>
                                    <tr>
                                        <td>Color:</td>
                                        <td>{{ $product->color }}</td>
                                    </tr>
                                    <tr>
                                        <td>Small Orders:</td>
                                        <td>{{ $product_details->smallOrdersAccepted }}</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Order:</td>
                                        <td>{{ $product_details->minimumOrderQuantity }}</td>
                                    </tr>
                                    <tr>
                                        <td>Unit Of Measure:</td>
                                        <td>{{ $product_details->unitOfMeasure }}</td>
                                    </tr>
                                    <tr>
                                        <td>Optional Price:</td>
                                        <td>{{ $product_details->pd_priceForOptional }}</td>
                                    </tr>
                                    <tr>
                                        <td>Instant Price:</td>
                                        <td>{{ $product_details->instantPrice }}</td>
                                    </tr>
                                    <tr>
                                        <td>15 Days Price:</td>
                                        <td>{{ $product_details->fifteenDaysPrice }}</td>
                                    </tr>
                                    <tr>
                                        <td>30 Days Price:</td>
                                        <td>{{ $product_details->thirteenDaysPrice }}</td>
                                    </tr>
                                    <tr>
                                        <td>Weight Per Pack:</td>
                                        <td>{{ $product_details->weightPerPack }}</td>
                                    </tr>
                                    <tr>
                                        <td>Key Specification:</td>
                                        <td>{!! $product->keySpecification !!}</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-highlight">
                            <p class="product-page-price">${{ $product->pd_price }}</p>
                            <hr>
                            <a class="btn btn-block btn-primary" href="{{ url('/add-to-cart/'.$product->product_number) }}"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                            <a class="btn btn-block btn-default" href="{{ url('/add-to-wishlist/'.$product->product_number) }}"><i class="fa fa-star"></i>Wishlist</a>
                            <div class="product-page-side-section">
                                <h5 class="product-page-side-title">Share This Item</h5>
                                <ul class="product-page-share-item">
                                    <li>
                                        <a class="fa fa-facebook" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-twitter" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-pinterest" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-instagram" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="fa fa-google-plus" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="product-page-side-section">
                                <h5 class="product-page-side-title">Shipping & Returns</h5>
                                <p class="product-page-side-text">In the store of your choice in 3-5 working days</p>
                                <p class="product-page-side-text">STANDARD 4.95 USD FREE (ORDERS OVER 50 USD) In 2-4 working days*</p>
                                <p class="product-page-side-text">EXPRESS 9.95 USD In 24-48 hours (working days)*</p>
                                <p class="product-page-side-text">* Except remote areas</p>
                                <p class="product-page-side-text">You have one month from the shipping confirmation email.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <div class="tabbable product-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-list nav-tab-icon"></i>Overview</a>
                </li>
                <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-cogs nav-tab-icon"></i>Full Specs</a>
                </li>
                <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-star nav-tab-icon"></i>Rating and Reviews</a>
                </li>
                <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-plug nav-tab-icon"></i>Accessories</a>
                </li>
                <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-comment nav-tab-icon"></i>Customer Q&A</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-12">
                            <div class="product-overview-text">
                                <p class="product-overview-desc">{!! $product->productDescription !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        @if($vendor_product_images->productImage1 != null)
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" />
                        </div>
                        @endif
                        @if($vendor_product_images->productImage2 != null)
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}" />
                        </div>
                        @endif
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        @if($vendor_product_images->productImage3 != null)
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage3 }}" />
                        </div>
                        @endif
                        @if($vendor_product_images->productImage4 != null)
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage4 }}" />
                        </div>
                        @endif
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        @if($vendor_product_images->productImage5 != null)
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage5 }}" />
                        </div>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Specs:</th>
                                <th>Details:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-page-features-table-specs">Dimensions Per Unit Length:</td>
                                <td class="product-page-features-table-details">{{ $product_details->dpu_w_p_length }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Dimensions Per Unit Width:</td>
                                <td class="product-page-features-table-details">{{ $product_details->dpu_w_p_width }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Dimensions Per Unit Height:</td>
                                <td class="product-page-features-table-details">{{ $product_details->dpu_w_p_height }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Dimensions Per Unit weight:</td>
                                <td class="product-page-features-table-details">{{ $product_details->dpu_w_p_weight }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Dimensions Per Unit Volume:</td>
                                <td class="product-page-features-table-details">{{ $product_details->dpu_w_p_volume }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Packaging Dimensions Per Unit Length:</td>
                                <td class="product-page-features-table-details">{{ $product_details->p_d_p_u_length }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Packaging Dimensions Per Unit Width:</td>
                                <td class="product-page-features-table-details">{{ $product_details->p_d_p_u_width }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Packaging Dimensions Per Unit Height:</td>
                                <td class="product-page-features-table-details">{{ $product_details->p_d_p_u_height }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Export Carton Dimension:</td>
                                <td class="product-page-features-table-details">{{ $product_details->exportCartonDimension }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Export Carton Weight:</td>
                                <td class="product-page-features-table-details">{{ $product_details->exportCartonWeight }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Delivery With in State:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DeliveryWithinState }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Delivery Within Geographic Range:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DeliveryWithinGR }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Delivery Out Geographic Range:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DeliveryOutsideGR }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Duration Delivery Within State:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DurationDeliveryWithinState }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Duration Delivery Within Geographic Range:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DurationDeliveryWithinGR }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Duration Delivery Outside Geographic Range:</td>
                                <td class="product-page-features-table-details">{{ $product_details->DurationDeliveryOutsideGR }}</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Payment Method:</td>
                                <td class="product-page-features-table-details">{{ $product_details->paymentMethod }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="write-review-dialog">
                    <h3 class="widget-title">Write Your Review</h3>
                    @if (Session::get('web_user_data')[0] ['web_user_id'])
                    @else
                    <p>You need to singin or singup to write review.</p>
                    @endif
                    <hr />
                    <form method="POST" action="{{ url('/review_submit') }}" aria-label="{{ __('review_submit') }}">
                        @csrf
                        <div class="form-group">
                            <label>Review</label>
                            <textarea class="form-control" name="review">{{ old('review') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="number" class="form-control" step="1" name="rating" min="1" max="5" placeholder="Minimum 1 and Maximum 5" >
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit" />
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                            <ul class="product-page-product-rating product-rating-big">
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="count">4.9</li>
                            </ul><small>238 customer reviews</small>

                            <a href="#write-review-dialog" data-effect="mfp-move-from-top" class="popup-text btn btn-primary">Write a Review</a>
                        </div>
                        
                        
                    </div>
                    <hr />


                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/content/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="product-review-content">
                            <h5 class="product-review-title">Terrific Buy!</h5>
                            <ul class="product-page-product-rating">
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star-half-o"></i>
                                </li>
                            </ul>
                            <p class="product-review-meta">by Keith Churchill on 08/14/2015</p>
                            <p class="product-review-body">Maecenas vestibulum primis et congue enim convallis pharetra mi diam a venenatis venenatis nibh fames pretium convallis</p>
                        </div>
                    </article>

                </div>
                <div class="tab-pane fade" id="tab-4">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>Additional Accessories</h3>
                            <ul class="product-accessory-list">
                                <li class="product-accessory">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="product-accessory-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="product-page-product-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-accessory-title"><a href="#">High Quality For Sony XPERIA Z AC Wall Charger USB Cable ORIGINAl OEM</a></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="product-accessory-price">$10.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-accessory">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="product-accessory-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="product-page-product-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-accessory-title"><a href="#">1x USB Cable For XPERIA Z Ultra Charger Data 8Pin Cord</a></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="product-accessory-price">$36.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-accessory">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="product-accessory-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="product-page-product-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-accessory-title"><a href="#">Fire Skull HAPPY Protective Shell Hard Skin Case Back Cover for Sony XPERIA Z</a></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="product-accessory-price">$44.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-accessory">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="product-accessory-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="product-page-product-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-accessory-title"><a href="#">Leather Flip Painted For Sony XPERIA Z Ultra Stand Wallet Case Cover Card Holder</a></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="product-accessory-price">$47.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-accessory">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img class="product-accessory-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="product-page-product-rating">
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="rated"><i class="fa fa-star"></i>
                                                </li>
                                            </ul>
                                            <h5 class="product-accessory-title"><a href="#">20000mAh Portable Powerbank External Battery Charger for Sony, iPhone, Samsung, HTC, LG</a></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="product-accessory-price">$40.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>What's Inculded</h3>
                            <ul class="product-accessory-included-list">
                                <li>Sony Xperia Z Ultra Smartphone</li>
                                <li>Sony Xperia Z Ultra C6833 4G Handset</li>
                                <li>Battery</li>
                                <li>Stereo Headset</li>
                                <li>Charger</li>
                                <li>USB Cable</li>
                                <li>User Manuel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-5">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form class="product-page-qa-form">
                                <div class="row" data-gutter="10">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Have a question? Feel free to ask." />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="btn btn-primary btn-block" type="submit" value="Ask" />
                                    </div>
                                </div>
                            </form>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">Is this the 6.6 inch screen?</p>
                                    <p class="product-page-qa-meta">asked by Richard Jones on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">No, this is the 6.4 inch screen</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">for those who owns this model phone in USA, may I know if this phone has the 4G LTE in Tmobile's network? Thank you in advance.</p>
                                    <p class="product-page-qa-meta">asked by Joseph Hudson on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">Yes. can use TMobile LTE 1700MHZ.</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">I'm from Puerto Rico! this phone work for me???</p>
                                    <p class="product-page-qa-meta">asked by Neil Davidson on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">Yes... It will work with any gsm radio system in the world... It does not work, however on any cdma radio system...</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">so this phone works on tmobile current network ll i have to do is switch the sim card?</p>
                                    <p class="product-page-qa-meta">asked by Blake Hardacre on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">the phone works fine with T-mobile's 4G LTE network, all you have to do is get a micro-sim card and insert it to start using your phone, if you already have a micro-sim sized card then just plug in.</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">does it work on the boost mobile network?</p>
                                    <p class="product-page-qa-meta">asked by John Mathis on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">It only works on gms networks so you have to check I think boost mobile is cmd network like verizon towers not sure</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">Is this version waterproof?</p>
                                    <p class="product-page-qa-meta">asked by Brandon Burgess on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">All Sony Xperia z lines are water proof the Sony Xperia z1,z2,z3,z ultra all of those</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                            <article class="product-page-qa">
                                <div class="product-page-qa-question">
                                    <p class="product-page-qa-text">how strong is the phone..does the screen crack easily ?</p>
                                    <p class="product-page-qa-meta">asked by Blake Abraham on 08/14/2015</p>
                                </div>
                                <div class="product-page-qa-answer">
                                    <p class="product-page-qa-text">Is strong enough to keep running even if it drops a few times, but I reckon if you kick it it Will smash, as any smartphone in the World. I had it for 3 months and it hasn't got a scratch.</p>
                                    <p class="product-page-qa-meta">answered on 08/14/2015</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
        <h3 class="widget-title">You Might Also Like</h3>
        
        @foreach($related as $product_data)

        <div class="row" data-gutter="15">
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/backend/img/vendor/products').'/'.$product_data->productImage1 }}" />
                        <img class="product-img-alt" src="{{ asset('public/backend/img/vendor/products').'/'.$product_data->productImage2 }}" />
                    </div>
                    <a class="product-link" href="{{ url('/product/'.$product_data->productCategory.'/'.$product_data->productSubCategory.'/'.$product_data->product_number) }}"></a>
                    <div class="product-caption">
                        <!-- <ul class="product-caption-rating">
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul> -->
                        <h5 class="product-caption-title">{{ $product_data->productName }}</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">${{ $product_data->pd_price }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
    </div>
@endsection

@section('js')



@endsection