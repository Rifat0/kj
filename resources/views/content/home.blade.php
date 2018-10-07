<!DOCTYPE HTML>
<html>

<head>
    <title>Kajandi</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('public/content/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/mystyles.css') }}">

</head>

<body>
    <div class="global-wrapper clearfix" id="global-wrapper">
        
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
            <h3 class="widget-title">Member Login</h3>
            <p>Welcome back, friend. Login to get started</p>
            <hr />
            <form method="POST" action="{{ url('/login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input class="btn btn-primary" type="submit" value="Sign In" />
            </form>
            <div class="gap gap-small"></div>
            <ul class="list-inline">
                <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
                </li>
            </ul>
        </div>
        
        <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
            <h3 class="widget-title">Password Recovery</h3>
            <p>Enter Your Email and We Will Send the Instructions</p>
            <hr />
            <form>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <nav class="navbar navbar-inverse navbar-main navbar-pad">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Kajandi
                    </a>
                </div>
                <div class="rel">
                    <form class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
                        <select class="navbar-main-search-category-select">
                            <option>All Departmens</option>
                            @foreach($category_sub_category as $product_category)
                            @if($product_category->sub_category_id==0 )
                            <option>{{ $product_category->category_name }}</option>
                            @endif
                            @endforeach
                        </select>

                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                        </div>
                        <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                    </form>
                </div>
            </div>
        </nav>
        <nav class="navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="collapse navbar-collapse navbar-collapse-no-pad" id="main-nav-collapse">
                    <ul class="nav navbar-nav navbar-nav-lg">
                    <?php $i=1; ?>
                    @foreach($category_sub_category as $product_category)
                        @if($product_category->sub_category_id==0 )

                        <li class="dropdown yamm-fw">
                            <a href="{{ url('/category/'.$product_category->category_id) }}">
                            <span ></span>{{ $product_category->category_name }}
                            <i class="drop-caret" data-toggle="dropdown"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-sm-4">
                                            <ul class="dropdown-menu-items-list">
                                                @foreach($category_sub_category as $product_sub_categor)
                                                @if($product_category->category_id==$product_sub_categor->parent_category_id )
                                                <li>
                                                    <a href="{{ url('/category/sub-category/'.$product_sub_categor->parent_category_id.'/'.$product_sub_categor->sub_category_id) }}">
                                                    {{ $product_sub_categor->sub_category_name }}
                                                    </a>
                                                    <p>{{ $product_sub_categor->sub_category_description }}</p>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <?php if ($i++ == 7) break; ?>
                        @endif
                        @endforeach
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-right-no-mar navbar-nav-lg">
                        
                        @if (Session::get('web_user_data')[0] ['web_user_id'])
                        <li class="dropdown"><a class="popup-text"><span></span>Your Account</a>

                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                <li>
                                    <a>Wellcome, <strong>{{ Session::get('web_user_data')[0] ['company_name'] }}</strong></a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                            <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"><span>Existing</span>Sign In</a></li>
                            <li><a href="{{ url('/sing_up') }}"><span>New User</span>Create Account</a></li>
                        @endif
                        <li class="dropdown"><a href="{{ url('/cart_item') }}">
                            <span ></span>
                            <i class="fa fa-shopping-cart"></i></a>
                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                @if(@$cart_product_data)
                                @if(count($cart_product_data)>0)
                                <?php $balence=0; ?>
                                @foreach($cart_product_data as $item)
                                <?php $st = isset($item[0]) ? $item[0] : false; ?>
                                @if($st)
                                @foreach (session()->get('cart_data') as $cart_item)
                                @if($item[0]->product_number == $cart_item['product_id'])
                                <?php $product_price = $item[0]->pd_price*$cart_item['quantity']; ?>
                                <li>
                                    @foreach($product_image as $image)
                                    @if($item[0]->product_number == $image->product_number)
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="{{ asset('public/backend/img/vendor/products').'/'.$image->productImage1 }}" />
                                    </a>
                                    @endif
                                    @endforeach
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">${{ $item[0]->pd_price." * ".$cart_item['quantity']." = $".$product_price }}</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">{{ $item[0]->productName }}</a>
                                        </p>
                                    </div>
                                </li>
                                <?php $balence = $balence+$product_price; ?>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                                <li>
                                    <p class="dropdown-menu-shipping-cart-total">Subtotal: ${{ $balence }}</p>
                                    <a href="{{ url('/cart_item') }}" class="dropdown-menu-shipping-cart-checkout btn btn-primary">Cart</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <i class="fa fa-cart-arrow-down empty-cart-icon"></i>
                                    <p class="dropdown-menu-shipping-cart-total">Your Cart is empty</p>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="gap gap-small"></div>
            <div class="row row-sm-gap" data-gutter="10">
                @include('Admin.Layouts.message')
                <div class="col-md-3">
                    <div class="clearfix">
                        <ul class="dropdown-menu dropdown-menu-category dropdown-menu-category-hold dropdown-menu-category-sm">
                            @foreach($category_sub_category as $product_category)
                                @if($product_category->sub_category_id==0 )
                            <li><a href="{{ url('/category/'.$product_category->category_id) }}">
                                <i class="fa dropdown-menu-category-icon">
                                <img src="{{ asset('public/content/category_icone').'/'.$product_category->category_image }}" height="30" width="30" /></i>
                                {{ $product_category->category_name }}</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="dropdown-menu-category-list">
                                                        @foreach($category_sub_category as $product_sub_categor)
                                                        @if($product_category->category_id==$product_sub_categor->parent_category_id )
                                                        <li>
                                                            <a href="{{ url('/category/sub-category/'.$product_sub_categor->parent_category_id.'/'.$product_sub_categor->sub_category_id) }}">
                                                                {{ $product_sub_categor->sub_category_name }}
                                                            </a>
                                                            <p>{{ $product_sub_categor->sub_category_description }}</p>
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="owl-carousel owl-loaded owl-nav-dots-inner owl-carousel-curved" data-options='{"items":1,"loop":true}'>
                        @foreach($banar_data as $banar)
                        <div class="owl-item">
                            <div class="slider-item" style="background-image: url({{ asset('public/content/banar_image').'/'.$banar->banar_image }}); height:490px;">
                                <div class="slider-item-inner slider-item-inner-container">
                                    <div class="slider-item-caption-left slider-item-caption-white slider-item-caption-sm">
                                        <h4 class="slider-item-caption-title">{{ $banar->banar_text }}</h4>
                                        <a class="btn btn-lg btn-ghost btn-white" href="{{ $banar->banar_url }}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                @foreach($adv_sec_1 as $adv_sec_1)
                <div class="col-md-4">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/adv_sec_1').'/'.$adv_sec_1->image }});">
                        <a class="banner-link" href="{{ $adv_sec_1->vendor_category_id }}"></a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="gap"></div>
            <h3 class="widget-title">Today Featured</h3>
            <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
                @foreach($today_feture as $today_feture)
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/backend/img/vendor/products').'/'.$today_feture->productImage1 }}" height="150" width="100" />
                        </div>
                        <a class="product-link" href="{{ url('/product/'.$today_feture->productCategory.'/'.$today_feture->productSubCategory.'/'.$today_feture->product_number) }}"></a>
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
                            <h5 class="product-caption-title">{{ $today_feture->productName }}</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">${{ $today_feture->pd_price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="gap"></div>
            <div class="row" data-gutter="15">
                @foreach($adv_sec_2 as $adv_sec_2)
                <div class="col-md-6">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/adv_sec_2').'/'.$adv_sec_2->image }});">
                        <a class="banner-link" href="{{ $adv_sec_2->vendor_category_id }}"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="gap"></div>
            <h3 class="widget-title">Categories</h3>
            <div class="row" data-gutter="15">
                @foreach($category_sub_category as $product_category)
                @if($product_category->sub_category_id==0 )
                <div class="col-md-2">
                    <a class="banner-category" href="{{ url('/category/'.$product_category->category_id) }}">
                        <img class="banner-category-img-full" src="{{ asset('public/content/category_icone').'/'.$product_category->category_image }}" alt="Image Alternative text" />
                        <h5 class="banner-category-title">{{ $product_category->category_name }}</h5>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <div class="gap"></div>
        </div>

@include('content.layout.footer')


