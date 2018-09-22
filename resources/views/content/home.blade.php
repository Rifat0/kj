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
                    <!-- <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> -->
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
                        <li class="dropdown yamm-fw"><a href="#"><span >Explore</span>Pages<i class="drop-caret" data-toggle="dropdown"></i></a>
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
                        <li class="dropdown yamm-fw"><a href="#"><span >Best of</span>Fashion<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Mans</a>
                                                    <p class="dropdown-menu-items-list-desc">Facilisi pulvinar vel</p>
                                                </li>
                                                <li><a href="#">Womans</a>
                                                    <p class="dropdown-menu-items-list-desc">Gravida magna sapien</p>
                                                </li>
                                                <li><a href="#">Kids & Baby</a>
                                                    <p class="dropdown-menu-items-list-desc">Sociosqu cum iaculis</p>
                                                </li>
                                                <li><a href="#">Shoes</a>
                                                    <p class="dropdown-menu-items-list-desc">Nascetur posuere aliquet</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Shop For</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Designer Collective</a>
                                                    <p class="dropdown-menu-items-list-desc">Interdum cursus risus</p>
                                                </li>
                                                <li><a href="#">Jewelry & Watches</a>
                                                    <p class="dropdown-menu-items-list-desc">Suspendisse natoque dapibus</p>
                                                </li>
                                                <li><a href="#">Handbags & Accessories</a>
                                                    <p class="dropdown-menu-items-list-desc">Rhoncus vel fermentum</p>
                                                </li>
                                                <li><a href="#">Health & Beauty</a>
                                                    <p class="dropdown-menu-items-list-desc">Phasellus tortor curae</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Top Brands</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Vera Bradley</a>
                                                </li>
                                                <li><a href="#">Rolex</a>
                                                </li>
                                                <li><a href="#">Nike</a>
                                                </li>
                                                <li><a href="#">Michael Kors</a>
                                                </li>
                                                <li><a href="#">Coach</a>
                                                </li>
                                                <li><a href="#">Adidas</a>
                                                </li>
                                                <li><a href="#">Zara</a>
                                                </li>
                                                <li><a href="#">Fossil</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/600x317.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span >Your Ride</span>Motors<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Cars & Trucks</a>
                                                    <p class="dropdown-menu-items-list-desc">Odio euismod tincidunt</p>
                                                </li>
                                                <li><a href="#">Motorcycles</a>
                                                    <p class="dropdown-menu-items-list-desc">Senectus vivamus commodo</p>
                                                </li>
                                                <li><a href="#">Parts & Accessories</a>
                                                    <p class="dropdown-menu-items-list-desc">Vel sapien felis</p>
                                                </li>
                                                <li><a href="#">Auto Tools & Supplies</a>
                                                    <p class="dropdown-menu-items-list-desc">Platea sem interdum</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Additional Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Boats</a>
                                                    <p class="dropdown-menu-items-list-desc">Consequat cursus phasellus</p>
                                                </li>
                                                <li><a href="#">Motors Blog</a>
                                                    <p class="dropdown-menu-items-list-desc">Mattis hendrerit congue</p>
                                                </li>
                                                <li><a href="#">Other Vehicles</a>
                                                    <p class="dropdown-menu-items-list-desc">Eu libero mattis</p>
                                                </li>
                                                <li><a href="#">Powersports</a>
                                                    <p class="dropdown-menu-items-list-desc">Nullam sociosqu at</p>
                                                </li>
                                                <li><a href="#">RVs & Campers</a>
                                                    <p class="dropdown-menu-items-list-desc">Molestie fames at</p>
                                                </li>
                                                <li><a href="#">Sales & Events</a>
                                                    <p class="dropdown-menu-items-list-desc">Posuere torquent elementum</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Top Models</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Audi</a>
                                                </li>
                                                <li><a href="#">BMW</a>
                                                </li>
                                                <li><a href="#">Mercedes-Benz</a>
                                                </li>
                                                <li><a href="#">Mitubishi</a>
                                                </li>
                                                <li><a href="#">Porsche</a>
                                                </li>
                                                <li><a href="#">Ford</a>
                                                </li>
                                                <li><a href="#">Chevrolete</a>
                                                </li>
                                                <li><a href="#">Toyota</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/712x350.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span >Make it Yours</span>Home & Garden<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Cycling</a>
                                                    <p class="dropdown-menu-items-list-desc">Risus ornare hendrerit</p>
                                                </li>
                                                <li><a href="#">Golf</a>
                                                    <p class="dropdown-menu-items-list-desc">Semper eleifend sociis</p>
                                                </li>
                                                <li><a href="#">Hunting</a>
                                                    <p class="dropdown-menu-items-list-desc">Fusce dapibus fringilla</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Shop For</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Action Figures</a>
                                                    <p class="dropdown-menu-items-list-desc">Nunc hendrerit conubia</p>
                                                </li>
                                                <li><a href="#">Bilding Toys</a>
                                                    <p class="dropdown-menu-items-list-desc">Sagittis in urna</p>
                                                </li>
                                                <li><a href="#">Dolls & Bears</a>
                                                    <p class="dropdown-menu-items-list-desc">Ridiculus senectus vel</p>
                                                </li>
                                                <li><a href="#">Railroads & Trains</a>
                                                    <p class="dropdown-menu-items-list-desc">Viverra potenti cum</p>
                                                </li>
                                                <li><a href="#">RC & Control Line</a>
                                                    <p class="dropdown-menu-items-list-desc">Penatibus accumsan aenean</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Shops</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Martha Stewart American Made</a>
                                                    <p class="dropdown-menu-items-list-desc">Volutpat hac vitae</p>
                                                </li>
                                                <li><a href="#">Refurbished Shop</a>
                                                    <p class="dropdown-menu-items-list-desc">Felis at in</p>
                                                </li>
                                            </ul>
                                            <hr />
                                            <h5>Inspiration</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Buying Guides & DIY Tips</a>
                                                    <p class="dropdown-menu-items-list-desc">Fusce phasellus netus</p>
                                                </li>
                                                <li><a href="#">Home Center</a>
                                                    <p class="dropdown-menu-items-list-desc">Nisl augue porttitor</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Sales & Events</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">DeWalt Tools</a>
                                                    <p class="dropdown-menu-items-list-desc">Eu fusce pellentesque</p>
                                                </li>
                                                <li><a href="#">Daily Deals</a>
                                                    <p class="dropdown-menu-items-list-desc">Luctus hendrerit laoreet</p>
                                                </li>
                                                <li><a href="#">Halloween Ideas</a>
                                                    <p class="dropdown-menu-items-list-desc">Amet nisl mus</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Top Brands</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Black + Decker</a>
                                                </li>
                                                <li><a href="#">DeWalt</a>
                                                </li>
                                                <li><a href="#">Worx</a>
                                                </li>
                                                <li><a href="#">Dyson</a>
                                                </li>
                                                <li><a href="#">Kitchen Aid</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/300x468.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span >Like a Champion</span>Sporting Goods<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Cycling</a>
                                                    <p class="dropdown-menu-items-list-desc">Est urna arcu</p>
                                                </li>
                                                <li><a href="#">Golf</a>
                                                    <p class="dropdown-menu-items-list-desc">Est et ut</p>
                                                </li>
                                                <li><a href="#">Hunting</a>
                                                    <p class="dropdown-menu-items-list-desc">Pellentesque venenatis dolor</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Additional Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Exrecise & Fitness</a>
                                                    <p class="dropdown-menu-items-list-desc">Dui sollicitudin curae</p>
                                                </li>
                                                <li><a href="#">Fishing</a>
                                                    <p class="dropdown-menu-items-list-desc">Et non nisi</p>
                                                </li>
                                                <li><a href="#">PGA Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Ligula dis litora</p>
                                                </li>
                                                <li><a href="#">Outdoor Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Id vel dis</p>
                                                </li>
                                                <li><a href="#">Team Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Nostra curae eget</p>
                                                </li>
                                                <li><a href="#">Sales & Events</a>
                                                    <p class="dropdown-menu-items-list-desc">Volutpat justo integer</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Top Brands</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Callaway Golf</a>
                                                </li>
                                                <li><a href="#">Johnson</a>
                                                </li>
                                                <li><a href="#">Quicksilver</a>
                                                </li>
                                                <li><a href="#">Sports Authority</a>
                                                </li>
                                                <li><a href="#">Nike</a>
                                                </li>
                                                <li><a href="#">Mizuno</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/897x450.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span >Have Fun</span>Toys & Hobbies<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Collectors & Hobby Toys</a>
                                                    <p class="dropdown-menu-items-list-desc">Curae aenean platea</p>
                                                </li>
                                                <li><a href="#">Kids & Family Toys</a>
                                                    <p class="dropdown-menu-items-list-desc">Posuere aptent ultrices</p>
                                                </li>
                                                <li><a href="#">Toys "R" Us Toys</a>
                                                    <p class="dropdown-menu-items-list-desc">Condimentum dis accumsan</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Additional Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Exrecise & Fitness</a>
                                                    <p class="dropdown-menu-items-list-desc">Mus aptent egestas</p>
                                                </li>
                                                <li><a href="#">Fishing</a>
                                                    <p class="dropdown-menu-items-list-desc">Hac interdum odio</p>
                                                </li>
                                                <li><a href="#">PGA Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Ad vehicula leo</p>
                                                </li>
                                                <li><a href="#">Outdoor Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Leo facilisi consequat</p>
                                                </li>
                                                <li><a href="#">Team Sports</a>
                                                    <p class="dropdown-menu-items-list-desc">Cras natoque et</p>
                                                </li>
                                                <li><a href="#">Sales & Events</a>
                                                    <p class="dropdown-menu-items-list-desc">Pretium ligula non</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/1200x472.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#"><span >Save Money on</span>Deals & Gifts<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu">
                                <li class="yamm-content">
                                    <div class="row row-eq-height row-col-border">
                                        <div class="col-md-2">
                                            <h5>Top Categories</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Daily Delas</a>
                                                    <p class="dropdown-menu-items-list-desc">Per class taciti</p>
                                                </li>
                                                <li><a href="#">Vacation Specials</a>
                                                    <p class="dropdown-menu-items-list-desc">Parturient posuere bibendum</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Gift Ideas</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Gift Cards</a>
                                                    <p class="dropdown-menu-items-list-desc">Fringilla facilisi commodo</p>
                                                </li>
                                                <li><a href="#">Innovation Collections</a>
                                                    <p class="dropdown-menu-items-list-desc">Aenean fringilla nunc</p>
                                                </li>
                                                <li><a href="#">Group Gifts</a>
                                                    <p class="dropdown-menu-items-list-desc">At risus sit</p>
                                                </li>
                                                <li><a href="#">Wish List</a>
                                                    <p class="dropdown-menu-items-list-desc">Enim fringilla pharetra</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h5>Top Deals</h5>
                                            <ul class="dropdown-menu-items-list">
                                                <li><a href="#">Trending Now</a>
                                                </li>
                                                <li><a href="#">Editors Pick</a>
                                                </li>
                                                <li><a href="#">Best of Tech</a>
                                                </li>
                                                <li><a href="#">Best of Fasion</a>
                                                </li>
                                                <li><a href="#">Best of Toys</a>
                                                </li>
                                                <li><a href="#">Cell Phones Under $200</a>
                                                </li>
                                                <li><a href="#">Hunting Favorites</a>
                                                </li>
                                                <li><a href="#">Deals Under $50</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <img class="dropdown-menu-theme-image" src="img/600x366.png" alt="Image Alternative text" title="Image Title" />
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-right-no-mar navbar-nav-lg">
                        
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
                            <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"><span>Existing</span>Sign In</a></li>
                            <li><a href="{{ url('/sing_up') }}"><span>New User</span>Create Account</a></li>
                        @endif
                        <li class="dropdown"><a href="shopping-cart.html"><span ></span><i class="fa fa-shopping-cart"></i></a>
                            <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                <li>
                                    <a class="dropdown-menu-shipping-cart-img" href="#">
                                        <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                    </a>
                                    <div class="dropdown-menu-shipping-cart-inner">
                                        <p class="dropdown-menu-shipping-cart-price">$93</p>
                                        <p class="dropdown-menu-shipping-cart-item"><a href="#">Gucci Patent Leather Open Toe Platform</a>
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

        <div class="container">
            <div class="gap gap-small"></div>
            <div class="row row-sm-gap" data-gutter="10">
                @include('Admin.Layouts.message')
                <div class="col-md-3">
                    <div class="clearfix">
                        <ul class="dropdown-menu dropdown-menu-category dropdown-menu-category-hold dropdown-menu-category-sm">
                            @foreach($category_sub_category as $product_category)
                                @if($product_category->sub_category_id==0 )
                            <li><a href="#"><i class="fa dropdown-menu-category-icon"><img src="{{ asset('public/content/category_icone').'/'.$product_category->category_image }}" /></i>
                                {{ $product_category->category_name }}</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="dropdown-menu-category-list">
                                                        @foreach($category_sub_category as $product_sub_categor)
                                                        @if($product_category->category_id==$product_sub_categor->parent_category_id )
                                                        <li><a href="#">{{ $product_sub_categor->sub_category_name }}</a>
                                                        <p>{{ $product_sub_categor->sub_category_description }}</p></li>
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
                            <img class="product-img" src="{{ asset('public/backend/img/vendor/products').'/'.$today_feture->productImage1 }}" />
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
                    <a class="banner-category" href="#">
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


