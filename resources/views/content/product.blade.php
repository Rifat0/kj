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
            <div class="col-md-5">
                <div class="product-page-product-wrap jqzoom-stage">
                    <div class="clearfix">
                        <a href="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" id="jqzoom" data-rel="gal-1">
                            <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </div>
                </div>
                <ul class="jqzoom-list">
                    <li>
                        <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}'}">
                            <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage2 }}" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </li>
                    <li>
                        <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}'}">
                            <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </li>
                    <li>
                        <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}'}">
                            <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </li>
                    <li>
                        <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}', largeimage: '{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}'}">
                            <img src="{{ asset('public/backend/img/vendor/products').'/'.$vendor_product_images->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="row" data-gutter="10">
                    <div class="col-md-8">
                        <div class="box">
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
                            <p class="product-page-product-rating-sign"><a href="#">238 customer reviews</a>
                            </p>
                            <p class="product-page-desc">The first Android smartphone with a 6.4” Full HD Display and the first one ever to incorporate a TRILUMINOS™ Display with X-Reality for mobile – Xperia Z Ultra is the smartphone that takes you beyond your wildest dreams.</p>
                            <table
                            class="table table-striped product-page-features-table">
                                <tbody>
                                    <tr>
                                        <td>Display:</td>
                                        <td>6.4 inches</td>
                                    </tr>
                                    <tr>
                                        <td>Camera:</td>
                                        <td>8.0MP</td>
                                    </tr>
                                    <tr>
                                        <td>Cellular Band:</td>
                                        <td>GSM/GPRS/EDGE 850/900/1800/1900 (Quadband) UMTS/HSPA+ 850/900/1700/1900/2100</td>
                                    </tr>
                                    <tr>
                                        <td>Contract:</td>
                                        <td>Without Contract</td>
                                    </tr>
                                    <tr>
                                        <td>Color:</td>
                                        <td>Black</td>
                                    </tr>
                                    <tr>
                                        <td>Brand:</td>
                                        <td>Sony</td>
                                    </tr>
                                    <tr>
                                        <td>Features:</td>
                                        <td>3G Data Capable, 4G Data Capable, Internet Browser, Wi-Fi Capable, GPS, Touchscreen, Music Player, Bluetooth Enabled</td>
                                    </tr>
                                    <tr>
                                        <td>Network:</td>
                                        <td>Unlocked</td>
                                    </tr>
                                    <tr>
                                        <td>Storage:</td>
                                        <td>16GB</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-highlight">
                            <p class="product-page-price-list">$498</p>
                            <p class="product-page-price">$199.99</p>
                            <p class="text-muted text-sm text-uppercase">Free Shipping</p><a class="btn btn-block btn-primary" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><a class="btn btn-block btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a>
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
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/348x382.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="col-md-6">
                            <div class="product-overview-text">
                                <h5 class="product-overview-title">The only waterproof Full HD smartphone</h5>
                                <p class="product-overview-desc">Waterproof**, dust resistant and with tough tempered glass coated with an anti-shatter film, this Android smartphone is much tougher than it looks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <div class="product-overview-text text-right">
                                <h5 class="product-overview-title">Ultra entertainment. Ultra business. An ultra experience. Experience 60% more</h5>
                                <p class="product-overview-desc">From reading e-books to browsing web pages – the Full HD display has been optimized so you can see and experience 60% more than most smartphones.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/376x476.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/620x400.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="col-md-6">
                            <div class="product-overview-text">
                                <h5 class="product-overview-title">Get precise</h5>
                                <p class="product-overview-desc">Xperia Z Ultra works with a pencil or stylus, and the super responsive screen lets you to write and sketch with precise accuracy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <div class="product-overview-text text-right">
                                <h5 class="product-overview-title">Increase productivity</h5>
                                <p class="product-overview-desc">An easy-toggle keyboard for one-handed input, plus multi-tasking apps that improve productivity help make this big screen Android smartphone the perfect business partner.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/430x450.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/620x323.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="col-md-6">
                            <div class="product-overview-text">
                                <h5 class="product-overview-title">Be immersed</h5>
                                <p class="product-overview-desc">The 6.4” TRILUMINOS™ Display with X-Reality for mobile creates rich, natural colours delivered in the crispest and sharpest images imaginable – turning every flick into a blockbuster experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <div class="product-overview-text text-right">
                                <h5 class="product-overview-title">Extend the universe of Xperia Z Ultra</h5>
                                <p class="product-overview-desc">With its tasteful design and amazing sound quality, this wireless headset can be used as either a smart mini-handset to take phone calls or a Bluetooth® headset, the perfect partner to your big screen phone.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/346x445.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/620x300.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="col-md-6">
                            <div class="product-overview-text">
                                <h5 class="product-overview-title">Go connected</h5>
                                <p class="product-overview-desc">A clever extension of you Xperia Z Ultra, this Android-compatible SmartWatch will keep you discreetly informed of incoming calls, messages and more.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height product-overview-section">
                        <div class="col-md-6">
                            <div class="product-overview-text text-right">
                                <h5 class="product-overview-title">Go easy</h5>
                                <p class="product-overview-desc">This magnet docking station is designed for ease of use, letting you charge your Xperia Z Ultra without opening the USB protective cover. And while charging, you can browse menus and view content – all from a comfortable
                                    viewing angle.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="product-overview-img" src="{{ asset('public/img/620x283.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Specs:</th>
                                <th>Details:</th>
                                <th>Description:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-page-features-table-specs">Warranty Terms - Parts:</td>
                                <td class="product-page-features-table-details">1 Year</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Height:</td>
                                <td class="product-page-features-table-details">5.7 inches</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Width:</td>
                                <td class="product-page-features-table-details">2.9 inches</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Depth:</td>
                                <td class="product-page-features-table-details">0.3 inches</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Weight:</td>
                                <td class="product-page-features-table-details">6 oz</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Bluetooth-Enabled:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Network:</td>
                                <td class="product-page-features-table-details">Unlocked</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Phone Style:</td>
                                <td class="product-page-features-table-details">Bar phone</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Operating System:</td>
                                <td class="product-page-features-table-details">Android 4.3 Jelly Bean</td>
                                <td>The master software that controls hardware functions and provides a platform on top of which any software applications will run. Commonly used systems include Microsoft Windows, Mac OS and Chrome OS for computers; Android,
                                    Apple iOS, BlackBerry and Windows Phone for cell phones; and Android, Apple iOS and Windows for tablets.</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Touch Screen:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">MMS:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td>Multimedia Messaging Service enables cell phone users to send text messages, graphics, photos and audio and video clips to other MMS users or to e-mail accounts.</td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Color Display:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Vibration Alert:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Build-In GPS:</td>
                                <td class="product-page-features-table-details">Yes</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Mobile Operating System:</td>
                                <td class="product-page-features-table-details">Android</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="product-page-features-table-specs">Band and Mode:</td>
                                <td class="product-page-features-table-details">Quad-band</td>
                                <td>Number/type of bands and modes the phone can use, which affects coverage and capabilities.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                        <div class="col-md-4">
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
                            <p><strong>98%</strong> of reviewers would recommend this product</p><a class="btn btn-primary" href="#">Write a Review</a>
                        </div>
                        <div class="col-md-5">
                            <ul class="product-rate-list">
                                <li>
                                    <p class="product-rate-list-item">Camera</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:95%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">95%</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">Sound Quality</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:90%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">90%</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">Screen</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:100%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">100%</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">Battery Life</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:95%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">95%</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">Look & Feel</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:100%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">100%</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="product-rate-list">
                                <li>
                                    <p class="product-rate-list-item">5 Stars</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:96%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">210</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">4 Stars</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:3%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">10</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">3 Stars</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:0%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">0</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">2 Stars</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:2%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">6</p>
                                </li>
                                <li>
                                    <p class="product-rate-list-item">1 Star</p>
                                    <div class="product-rate-list-bar">
                                        <div style="width:1%;"></div>
                                    </div>
                                    <p class="product-rate-list-count">3</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr />
                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="product-review-meta">by Keith Churchill on 08/14/2015</p>
                            <p class="product-review-body">Maecenas vestibulum primis et congue enim convallis pharetra mi diam a venenatis venenatis nibh fames pretium convallis</p>
                            <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                            </p>
                            <ul class="list-inline product-review-actions">
                                <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review-side">
                            <p><strong>6</strong> out of <strong>6</strong> found this review helpful</p>
                            <p class="product-review-side-sign">Was this review helpful?</p><a class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>6</a><a class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                        </div>
                    </article>
                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="product-review-content">
                            <h5 class="product-review-title">Too Big. Unusable.</h5>
                            <ul class="product-page-product-rating">
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="product-review-meta">by Carl Butler on 08/14/2015</p>
                            <p class="product-review-body">Ac donec dictum sociis pharetra cubilia bibendum convallis volutpat in placerat suscipit urna mus posuere habitasse venenatis praesent himenaeos litora arcu magna imperdiet mollis phasellus vel</p>
                            <p class="text-danger"><strong><i class="fa fa-close"></i> No, I would not recommend this to a friend.</strong>
                            </p>
                            <ul class="list-inline product-review-actions">
                                <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review-side">
                            <p><strong>1</strong> out of <strong>2</strong> found this review helpful</p>
                            <p class="product-review-side-sign">Was this review helpful?</p><a class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>1</a><a class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>1</a>
                        </div>
                    </article>
                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="product-review-content">
                            <h5 class="product-review-title">Worth it</h5>
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
                            <p class="product-review-meta">by John Doe on 08/14/2015</p>
                            <p class="product-review-body">Rhoncus elementum lobortis parturient tempus vestibulum suscipit proin mus vel et suscipit consequat ornare senectus elit lacus aenean commodo nostra senectus nascetur dignissim dictumst cubilia eget porta pharetra proin
                                luctus</p>
                            <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                            </p>
                            <ul class="list-inline product-review-actions">
                                <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review-side">
                            <p><strong>6</strong> out of <strong>6</strong> found this review helpful</p>
                            <p class="product-review-side-sign">Was this review helpful?</p><a class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>6</a><a class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                        </div>
                    </article>
                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="product-review-content">
                            <h5 class="product-review-title">Great Affordable Phone</h5>
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
                            <p class="product-review-meta">by Joe Smith on 08/14/2015</p>
                            <p class="product-review-body">Elit habitant dictumst sociis vitae maecenas ante est netus magna duis morbi sed porttitor dapibus risus suscipit vestibulum tellus montes leo nunc rutrum ut sed mi tincidunt</p>
                            <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                            </p>
                            <ul class="list-inline product-review-actions">
                                <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review-side">
                            <p><strong>5</strong> out of <strong>6</strong> found this review helpful</p>
                            <p class="product-review-side-sign">Was this review helpful?</p><a class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>5</a><a class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>1</a>
                        </div>
                    </article>
                    <article class="product-review">
                        <div class="product-review-author">
                            <img class="product-review-author-img" src="{{ asset('public/img/70x70.png') }}" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <div class="product-review-content">
                            <h5 class="product-review-title">Excellent</h5>
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
                            <p class="product-review-meta">by Oliver Ross on 08/14/2015</p>
                            <p class="product-review-body">Aptent leo dapibus arcu inceptos orci nunc sollicitudin vestibulum diam magnis posuere vulputate tincidunt proin eget</p>
                            <p class="text-success"><strong><i class="fa fa-check"></i> I would recommend this to a friend!</strong>
                            </p>
                            <ul class="list-inline product-review-actions">
                                <li><a href="#"><i class="fa fa-flag"></i> Flag this review</a>
                                </li>
                                <li><a href="#"><i class="fa fa-comment"></i> Comment review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-review-side">
                            <p><strong>8</strong> out of <strong>8</strong> found this review helpful</p>
                            <p class="product-review-side-sign">Was this review helpful?</p><a class="product-review-rate" href="#"><i class="fa fa-thumbs-up"></i>8</a><a class="product-review-rate" href="#"><i class="fa fa-thumbs-down"></i>0</a>
                        </div>
                    </article>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="category-pagination-sign">238 customer reviews found. Showing 1 - 5</p>
                        </div>
                        <div class="col-md-6">
                            <nav>
                                <ul class="pagination category-pagination pull-right">
                                    <li class="active"><a href="#">1</a>
                                    </li>
                                    <li><a href="#">2</a>
                                    </li>
                                    <li><a href="#">3</a>
                                    </li>
                                    <li><a href="#">4</a>
                                    </li>
                                    <li><a href="#">5</a>
                                    </li>
                                    <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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
                                                <img class="product-accessory-img" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                                <img class="product-accessory-img" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                                <img class="product-accessory-img" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                                <img class="product-accessory-img" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                                <img class="product-accessory-img" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
        <div class="row" data-gutter="15">
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">Apple iPhone 4S 16GB Factory Unlocked Black and White Smartphone</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$51</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels">
                        <li>-20%</li>
                    </ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        <h5 class="product-caption-title">LG G Flex D959 - 32GB - Titan Silver GSM Unlocked Android Smartphone (B)</h5>
                        <div class="product-caption-price"><span class="product-caption-price-old">$85</span><span class="product-caption-price-new">$68</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        <h5 class="product-caption-title">Samsung Galaxy Note 4 IV 4G FACTORY UNLOCKED Black or White</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$68</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" data-gutter="15">
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product ">
                    <ul class="product-labels"></ul>
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <img class="product-img-alt" src="{{ asset('public/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="#"></a>
                    <div class="product-caption">
                        <ul class="product-caption-rating">
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
                        </ul>
                        <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                        <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                        </div>
                        <ul class="product-caption-feature-list">
                            <li>Free Shipping</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection