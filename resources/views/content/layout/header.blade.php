<!DOCTYPE HTML>
<html>

<head>
    <title><?php if($segment = Request::segment(1)) { echo str_replace('_', ' ', ucfirst($segment)); } ?></title> 
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('public/content/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/content/css/mystyles.css') }}">
    @yield('css')

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
                <!-- <div class="checkbox">
                    <label>
                        <input class="form-check-input i-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div> -->
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
                @csrf
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="text" />
                </div>
                <input class="btn btn-primary" type="submit" value="Recover Password" />
            </form>
        </div>
        <nav class="navbar navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="navbar-header">
                    <!-- <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Kajandi
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">
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
                        </li>
                        <li class="dropdown yamm-fw"><a href="#">Pages<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Homepages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Banners Area + Product Carousel</p>
                                                </li>
                                                <li><a href="index-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Aside Departmens</p>
                                                </li>
                                                <li><a href="index-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="index-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Sidebar</p>
                                                </li>
                                                <li><a href="index-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">Full Banners + Product Tabs</p>
                                                </li>
                                                <li><a href="index-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Slider</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Category Pages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="category.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="category-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Banner Title</p>
                                                </li>
                                                <li><a href="category-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">4 Columns Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">6 Columns Small Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">3 Columns Horizontal Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">4 Columns Horizontal Thumbs</p>
                                                </li>
                                                <li><a href="category-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">No Filters</p>
                                                </li>
                                                <li><a href="category-layout-8.html">Layout 8</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="category-layout-9.html">Layout 9</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Inverse</p>
                                                </li>
                                                <li><a href="category-layout-10.html">Layout 10</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Color</p>
                                                </li>
                                                <li><a href="category-layout-11.html">Layout 11</a>
                                                    <p class="dropdown-menu-items-list-desc">Horizontal Thumbs</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Product Pages</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="product-page.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="product-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">No Sidebar</p>
                                                </li>
                                                <li><a href="product-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Full Area Layout + Banners</p>
                                                </li>
                                                <li><a href="product-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">Gallery Style</p>
                                                </li>
                                                <li><a href="product-layout-5.html">Layout 5</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                                </li>
                                                <li><a href="product-layout-6.html">Layout 6</a>
                                                    <p class="dropdown-menu-items-list-desc">Sidebar Left</p>
                                                </li>
                                                <li><a href="product-layout-7.html">Layout 7</a>
                                                    <p class="dropdown-menu-items-list-desc">Product Gallery Left</p>
                                                </li>
                                                <li><a href="product-layout-8.html">Layout 8</a>
                                                    <p class="dropdown-menu-items-list-desc">Product Gallery Right</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Header Layouts</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-nav-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Center Logo + Category Nav</p>
                                                </li>
                                                <li><a href="index-nav-layout-3.html">Layout 3</a>
                                                    <p class="dropdown-menu-items-list-desc">Special Area + Extended Search</p>
                                                </li>
                                                <li><a href="index-nav-layout-4.html">Layout 4</a>
                                                    <p class="dropdown-menu-items-list-desc">White Area + Extended Search</p>
                                                </li>
                                            </ul>
                                            <hr />
                                            <h5>Footer Layouts</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="index.html">Layout 1</a>
                                                    <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                                </li>
                                                <li><a href="index-footer-layout-2.html">Layout 2</a>
                                                    <p class="dropdown-menu-items-list-desc">Minimal</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Misc</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                                </li>
                                                <li><a href="shopping-cart-empty.html">Cart Empty</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="order-summary.html">Summary</a>
                                                </li>
                                                <li><a href="about-us.html">About Us</a>
                                                </li>
                                                <li><a href="contact.html">Contact</a>
                                                </li>
                                                <li><a href="404.html">404</a>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                </li>
                                                <li><a href="blog-post.html">Blog Post</a>
                                                </li>
                                                <li><a href="login-register.html">Login/Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left navbar-main-search" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                        </div>
                        <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Session::get('web_user_data')[0] ['web_user_id'])
                        <li class="dropdown"><a href="#" class="popup-text"><span>User</span>Your Account</a>

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
                            <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a></li>
                            <li><a href="{{ url('/sing_up') }}">Create Account</a></li>
                        @endif
                        <li class="dropdown">
                            <a class="fa fa-shopping-cart" href="shopping-cart.html"></a>
                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$45</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$57</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Nikon D5200 24.1 MP Digital SLR Camera</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$66</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Apple 11.6" MacBook Air Notebook </a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="img/100x100.png" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$76</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Fossil Women's Original Boyfriend</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="dropdown-menu-shipping-cart-total">Total: $150</p>
                                    <button class="dropdown-menu-shipping-cart-checkout btn btn-primary">Checkout</button>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>