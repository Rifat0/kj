<!DOCTYPE HTML>
<html>

<head>
    <title>Kajandi</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
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
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input class="form-check-input i-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
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
                    <!-- <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> -->
                    <a class="navbar-brand" href="index.html">
                        Kajandi
                    </a>
                </div>
                <div class="rel">
                    <form class="navbar-form navbar-left navbar-main-search navbar-main-search-category" role="search">
                        <select class="navbar-main-search-category-select">
                            <option>All Departmens</option>
                            <option>Appilances</option>
                            <option>Apps & Games</option>
                            <option>Arts, Crafts & Sewing</option>
                            <option>Automotive</option>
                            <option>Baby</option>
                            <option>Books</option>
                            <option>CDs & Vinyl</option>
                            <option>Cell Phones & Accessories</option>
                            <option>Clothing, Shoes & Jewelry</option>
                            <option>&nbsp;&nbsp;&nbsp;Woman</option>
                            <option>&nbsp;&nbsp;&nbsp;Men</option>
                            <option>&nbsp;&nbsp;&nbsp;Girls</option>
                            <option>&nbsp;&nbsp;&nbsp;Baby</option>
                            <option>Collectibles & Fine Art</option>
                            <option>Computers</option>
                            <option>Credit and Payment Cards</option>
                            <option>Digital Music</option>
                            <option>Electronics</option>
                            <option>Gift Cards</option>
                            <option>Grocery & Gourmet</option>
                            <option>Health & Personal Care</option>
                            <option>Home & Kitchen</option>
                            <option>Industrial & Scientific</option>
                            <option>Luggage & Travel</option>
                            <option>Luxury Beauty</option>
                            <option>Magazine Subscribtions</option>
                            <option>Movies & TV</option>
                            <option>Musical Instuments</option>
                            <option>Office Products</option>
                            <option>Patio, Lawn & Garden</option>
                            <option>Pet Supplies</option>
                            <option>Software</option>
                            <option>Sports & Outdoors</option>
                            <option>Tools & Home Improvement</option>
                            <option>Toys & Games</option>
                            <option>Video Games</option>
                            <option>Wine</option>
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
                        
                        @if (Route::has('login'))
                            @auth
                                <li class="dropdown"><a href="#" class="popup-text"><span>User</span>Your Account</a>

                                <ul class="dropdown-menu dropdown-menu-shipping-cart">
                                    <li>
                                        <a>Wellcome, <strong>{{ Auth::user()->name }}</strong></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                                <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"><span>Existing</span>Sign In</a></li>
                                <li><a href="{{ url('/sing_up') }}"><span>New User</span>Create Account</a></li>
                            @endauth
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
                <div class="col-md-3">
                    <div class="clearfix">
                        <ul class="dropdown-menu dropdown-menu-category dropdown-menu-category-hold dropdown-menu-category-sm">
                            <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Anchoring, Windlass, Rope, Chain and Accessories</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="dropdown-menu-category-title">Anchoring, Windlass, Rope, Chain and Accessories</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Mooring Ropes, Nylon Ropes, Ropes and Fittings</a>
                                                        </li>
                                                        <li><a href="#">Anchor Chains, Kits and Accessories</a>
                                                        </li>
                                                        <li><a href="#">Anchors</a>
                                                        </li>
                                                        <li><a href="#">Mooring Ropes, Nylon Ropes, Ropes and Fittings</a>
                                                        </li>
                                                        <li><a href="#">Windlass</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-diamond dropdown-menu-category-icon"></i>Bilge Pumps and Accessories</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Jewelry</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Necklances & Pendants</a>
                                                            <p>Dictum dapibus orci tincidunt neque</p>
                                                        </li>
                                                        <li><a href="#">Bracelets</a>
                                                            <p>Quam erat eu cum suspendisse</p>
                                                        </li>
                                                        <li><a href="#">Rings</a>
                                                            <p>Potenti lectus congue fringilla vitae</p>
                                                        </li>
                                                        <li><a href="#">Errings</a>
                                                            <p>Varius diam mattis metus tincidunt</p>
                                                        </li>
                                                        <li><a href="#">Wedding & Engagement</a>
                                                            <p>Nascetur elit felis tellus a</p>
                                                        </li>
                                                        <li><a href="#">Charms</a>
                                                            <p>Tempor senectus viverra porttitor elit</p>
                                                        </li>
                                                        <li><a href="#">Booches</a>
                                                            <p>Ad senectus id porttitor himenaeos</p>
                                                        </li>
                                                        <li><a href="#">Men's Jewelry</a>
                                                            <p>Luctus est bibendum sociosqu montes</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Jewelry Shops</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Contemporary & Designer</a>
                                                            <p>Auctor pulvinar tristique consequat accumsan</p>
                                                        </li>
                                                        <li><a href="#">Juniors</a>
                                                            <p>Massa mi sapien sem proin</p>
                                                        </li>
                                                        <li><a href="#">Meternity</a>
                                                            <p>Dictumst penatibus placerat est sociosqu</p>
                                                        </li>
                                                        <li><a href="#">Pettite</a>
                                                            <p>Felis hac lectus velit suscipit</p>
                                                        </li>
                                                        <li><a href="#">Uniforms, Works & Safety</a>
                                                            <p>Amet congue mattis taciti ligula</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-child dropdown-menu-category-icon"></i>Electrical and Electronics</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Kids Clothing</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Accessories</a>
                                                            <p>Non vestibulum lectus sit sagittis</p>
                                                        </li>
                                                        <li><a href="#">Active Wear</a>
                                                            <p>Facilisis dictum taciti volutpat vitae</p>
                                                        </li>
                                                        <li><a href="#">Coats & Jackets</a>
                                                            <p>Dictum sapien aptent velit adipiscing</p>
                                                        </li>
                                                        <li><a href="#">Jeans</a>
                                                            <p>Feugiat fringilla pretium semper placerat</p>
                                                        </li>
                                                        <li><a href="#">Sets</a>
                                                            <p>Pellentesque eleifend cubilia nibh id</p>
                                                        </li>
                                                        <li><a href="#">Indoors</a>
                                                            <p>Venenatis commodo eros habitant tempor</p>
                                                        </li>
                                                        <li><a href="#">Swimwear</a>
                                                            <p>Etiam ipsum tortor leo risus</p>
                                                        </li>
                                                        <li><a href="#">Special Occasion</a>
                                                            <p>Est tellus odio dignissim mollis</p>
                                                        </li>
                                                        <li><a href="#">Shoes</a>
                                                            <p>Nulla ultrices non leo vivamus</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">More For Kids</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Kids Furniture</a>
                                                            <p>Eros nunc praesent fames cras</p>
                                                        </li>
                                                        <li><a href="#">Kids Jewelry & Watches</a>
                                                            <p>Gravida nam lacinia massa fusce</p>
                                                        </li>
                                                        <li><a href="#">Toys & Games</a>
                                                            <p>Porttitor porta sodales praesent habitasse</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-plug dropdown-menu-category-icon"></i>Engines and Spare Parts</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Electronics</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">TV & Video</a>
                                                            <p>Velit consectetur auctor elementum mus</p>
                                                        </li>
                                                        <li><a href="#">Home Audio & Theater</a>
                                                            <p>Sapien magnis nec feugiat sodales</p>
                                                        </li>
                                                        <li><a href="#">Camera, Photo & Video</a>
                                                            <p>Nec bibendum nulla pulvinar justo</p>
                                                        </li>
                                                        <li><a href="#">Cell Phones & Accessories</a>
                                                            <p>Vivamus eu lectus non vivamus</p>
                                                        </li>
                                                        <li><a href="#">Headphones</a>
                                                            <p>Ornare lacinia elementum faucibus natoque</p>
                                                        </li>
                                                        <li><a href="#">Video Games</a>
                                                            <p>Parturient ullamcorper placerat imperdiet nisi</p>
                                                        </li>
                                                        <li><a href="#">Gar Electronics</a>
                                                            <p>Potenti fermentum vehicula eleifend elementum</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Computers</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Laptops & Tablets</a>
                                                            <p>Varius netus adipiscing neque quisque</p>
                                                        </li>
                                                        <li><a href="#">Desktops & Monitors</a>
                                                            <p>Curae urna fusce massa a</p>
                                                        </li>
                                                        <li><a href="#">Computer Accessories</a>
                                                            <p>Lacus nisl id velit magnis</p>
                                                        </li>
                                                        <li><a href="#">Software</a>
                                                            <p>Venenatis consequat himenaeos netus mauris</p>
                                                        </li>
                                                        <li><a href="#">Printers & Ink</a>
                                                            <p>Ut blandit pharetra suspendisse montes</p>
                                                        </li>
                                                        <li><a href="#">Networking</a>
                                                            <p>Libero eleifend bibendum cursus faucibus</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-tags dropdown-menu-category-icon"></i>Filters</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">TheBox Fashion</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Woman</a>
                                                            <p>Egestas rutrum mauris vulputate consequat</p>
                                                        </li>
                                                        <li><a href="#">Men</a>
                                                            <p>Ante senectus hendrerit torquent lorem</p>
                                                        </li>
                                                        <li><a href="#">Girls</a>
                                                            <p>Scelerisque quam a curae penatibus</p>
                                                        </li>
                                                        <li><a href="#">Boys</a>
                                                            <p>Ac lacinia platea cras lobortis</p>
                                                        </li>
                                                        <li><a href="#">Baby</a>
                                                            <p>Nullam dapibus laoreet viverra natoque</p>
                                                        </li>
                                                        <li><a href="#">Luggage</a>
                                                            <p>Dictumst etiam torquent pulvinar sit</p>
                                                        </li>
                                                        <li><a href="#">Accessories</a>
                                                            <p>Tempus amet class porta vestibulum</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-futbol-o dropdown-menu-category-icon"></i>General Repair and Maintanance Tools and Accessories</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Sports</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Athletic Clothing</a>
                                                            <p>Rutrum commodo tincidunt quisque vehicula</p>
                                                        </li>
                                                        <li><a href="#">Exorcise & Fitness</a>
                                                            <p>Pretium viverra vestibulum tempus leo</p>
                                                        </li>
                                                        <li><a href="#">Hunting & Fishing</a>
                                                            <p>Class senectus lacus eget scelerisque</p>
                                                        </li>
                                                        <li><a href="#">Team Sports</a>
                                                            <p>Adipiscing varius mollis dis sed</p>
                                                        </li>
                                                        <li><a href="#">Fan Sports</a>
                                                            <p>Enim gravida tempus tincidunt posuere</p>
                                                        </li>
                                                        <li><a href="#">Golf</a>
                                                            <p>Consequat vehicula lorem curae sociis</p>
                                                        </li>
                                                        <li><a href="#">Sports Collections</a>
                                                            <p>Volutpat facilisis varius vehicula commodo</p>
                                                        </li>
                                                        <li><a href="#">Camping & Hiking</a>
                                                            <p>Natoque tristique laoreet tellus ad</p>
                                                        </li>
                                                        <li><a href="#">Cycling</a>
                                                            <p>Id rhoncus inceptos sollicitudin eget</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-music dropdown-menu-category-icon"></i>GENERATORS</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Entertaiment</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Video Games & Consoles</a>
                                                            <p>Tristique etiam sagittis rutrum feugiat</p>
                                                        </li>
                                                        <li><a href="#">Music</a>
                                                            <p>Nisi aptent torquent vulputate velit</p>
                                                        </li>
                                                        <li><a href="#">DVD & Movies</a>
                                                            <p>Hendrerit tortor iaculis leo varius</p>
                                                        </li>
                                                        <li><a href="#">Tickets</a>
                                                            <p>Ornare leo pellentesque malesuada lorem</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Memorabilia</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Autographs</a>
                                                        </li>
                                                        <li><a href="#">Movie</a>
                                                        </li>
                                                        <li><a href="#">Music</a>
                                                        </li>
                                                        <li><a href="#">Television</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-location-arrow dropdown-menu-category-icon"></i>Heating, Ventilation and Air Conditioning (HVAC)</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Travel Equepment</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Luggage</a>
                                                            <p>Pharetra platea erat eleifend adipiscing</p>
                                                        </li>
                                                        <li><a href="#">Travel Accessories</a>
                                                            <p>Convallis ut eros velit bibendum</p>
                                                        </li>
                                                        <li><a href="#">Luggage Accessories</a>
                                                            <p>Quis integer ligula convallis lacus</p>
                                                        </li>
                                                        <li><a href="#">Lodging</a>
                                                            <p>Ac volutpat iaculis dictum ullamcorper</p>
                                                        </li>
                                                        <li><a href="#">Maps</a>
                                                            <p>Mauris integer pretium lobortis mattis</p>
                                                        </li>
                                                        <li><a href="#">Other Travel</a>
                                                            <p>Felis eu massa varius porttitor</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Booking</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Vacation Packages</a>
                                                            <p>Nec imperdiet et parturient senectus</p>
                                                        </li>
                                                        <li><a href="#">Campground & RV</a>
                                                            <p>Ut luctus rhoncus proin mattis</p>
                                                        </li>
                                                        <li><a href="#">Rail</a>
                                                            <p>Aenean cubilia molestie velit tincidunt</p>
                                                        </li>
                                                        <li><a href="#">Car Rental</a>
                                                            <p>Hac vehicula nisl mi metus</p>
                                                        </li>
                                                        <li><a href="#">Cruises</a>
                                                            <p>Dictum fames ullamcorper eget velit</p>
                                                        </li>
                                                        <li><a href="#">Airline</a>
                                                            <p>Interdum mauris nam malesuada purus</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-picture-o dropdown-menu-category-icon"></i>Lifting Equipments, Slings, Nets and Accessories</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Art</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Paintings from Dealers & Resellers</a>
                                                            <p>Fames consectetur mi per quam</p>
                                                        </li>
                                                        <li><a href="#">Paintings Direct from Artist</a>
                                                            <p>Volutpat erat ad semper risus</p>
                                                        </li>
                                                        <li><a href="#">Art Prints</a>
                                                            <p>Integer cubilia vitae natoque dignissim</p>
                                                        </li>
                                                        <li><a href="#">Art Photographs from Resellers</a>
                                                            <p>Tempus dignissim venenatis fringilla nec</p>
                                                        </li>
                                                        <li><a href="#">Art Photographs from the Artist</a>
                                                            <p>Varius ante aptent augue dictumst</p>
                                                        </li>
                                                        <li><a href="#">Art Posters</a>
                                                            <p>Lacinia at pretium inceptos dictum</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Design</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Home Decor Decals</a>
                                                            <p>Nibh hac montes turpis habitasse</p>
                                                        </li>
                                                        <li><a href="#">Furniture</a>
                                                            <p>Feugiat commodo posuere nascetur lorem</p>
                                                        </li>
                                                        <li><a href="#">Wallpapers</a>
                                                            <p>Adipiscing cursus vel cubilia sapien</p>
                                                        </li>
                                                        <li><a href="#">Bar Flasks</a>
                                                            <p>Id praesent dictum himenaeos vehicula</p>
                                                        </li>
                                                        <li><a href="#">Posters & Prints</a>
                                                            <p>Nisi ultricies eget vel scelerisque</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-motorcycle dropdown-menu-category-icon"></i>Marine Coatings | Protective Coatings</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Motors</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Parts & Accessories</a>
                                                            <p>Duis fringilla a ante ipsum</p>
                                                        </li>
                                                        <li><a href="#">Cars & Trucks</a>
                                                            <p>Curabitur diam nascetur gravida penatibus</p>
                                                        </li>
                                                        <li><a href="#">Motorcycles</a>
                                                            <p>Augue arcu hac feugiat sapien</p>
                                                        </li>
                                                        <li><a href="#">Passenger Vehicles</a>
                                                            <p>Quis fames congue ultricies himenaeos</p>
                                                        </li>
                                                        <li><a href="#">Industry Vehicles</a>
                                                            <p>Metus maecenas nam conubia suscipit</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Brands</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">BMW</a>
                                                        </li>
                                                        <li><a href="#">Land Rover</a>
                                                        </li>
                                                        <li><a href="#">Nissan</a>
                                                        </li>
                                                        <li><a href="#">Honda</a>
                                                        </li>
                                                        <li><a href="#">Ford</a>
                                                        </li>
                                                        <li><a href="#">Porsche</a>
                                                        </li>
                                                        <li><a href="#">Audi</a>
                                                        </li>
                                                        <li><a href="#">Mercedes-Benz</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-paw dropdown-menu-category-icon"></i>MARINE SAFETY</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <h5 class="dropdown-menu-category-title">Pet Supplies</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Backyard Poultry Supplies</a>
                                                            <p>Nulla molestie semper ultricies vitae</p>
                                                        </li>
                                                        <li><a href="#">Bird Supplies</a>
                                                            <p>Sit felis hendrerit amet enim</p>
                                                        </li>
                                                        <li><a href="#">Cat Supplies</a>
                                                            <p>Augue morbi sed integer sit</p>
                                                        </li>
                                                        <li><a href="#">Dog Supplies</a>
                                                            <p>Semper praesent himenaeos ridiculus accumsan</p>
                                                        </li>
                                                        <li><a href="#">Pet Memorials & Urns</a>
                                                            <p>Quam quis odio lorem iaculis</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Fish & Aquariums</a>
                                                            <p>Orci orci aptent nascetur nullam</p>
                                                        </li>
                                                        <li><a href="#">Horse Supplies</a>
                                                            <p>Malesuada commodo rutrum sed lectus</p>
                                                        </li>
                                                        <li><a href="#">Reptile Supplies</a>
                                                            <p>Lectus vulputate ridiculus diam lacus</p>
                                                        </li>
                                                        <li><a href="#">Small Animal Supplies</a>
                                                            <p>Phasellus nulla ultricies turpis sapien</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Wholesale Lots</a>
                                                            <p>Vehicula integer egestas semper sociosqu</p>
                                                        </li>
                                                        <li><a href="#">Other Pet Supplies</a>
                                                            <p>Sociis duis potenti tincidunt urna</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Navigation and Communication</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Personal Protective Equipment (PPE)</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>PLUMBING, PIPING AND FITTINGS AND ACCESSORIES</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>POWER TOOLS</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>POWER TOOLS ACCESSORIES</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Repair and Maintanance Products - Lubricants, Engine Oils, Grease, Sealants etc</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Lacinia facilisis pulvinar orci in</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Eget lacinia pulvinar habitasse vehicula</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Turpis luctus sagittis montes interdum</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Posuere parturient nostra odio ridiculus</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Lacinia erat semper mattis auctor</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Arcu per etiam aptent consequat</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Interdum tristique habitasse aenean quam</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Pulvinar lacus tempus ultricies nunc</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="owl-carousel owl-loaded owl-nav-dots-inner owl-carousel-curved" data-options='{"items":1,"loop":true}'>
                        <!-- @foreach($banar_data as $banar_data) -->
                        <div class="owl-item">
                            <div class="slider-item" style="background-color:#3D3D3D; height:490px;">
                                <div class="slider-item-inner slider-item-inner-container">
                                    <div class="slider-item-caption-left slider-item-caption-white slider-item-caption-sm">
                                        <h4 class="slider-item-caption-title">Save up to $150 on Your Next Laptop</h4>
                                        <a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                    </div>
                                    <img class="slider-item-img-right" src="{{ asset('public/content/img/test_slider/1.png') }}" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 66%; right: -14%;" />
                                </div>
                            </div>
                        </div>
                        <!-- @endforeach -->
                        <div class="owl-item">
                            <div class="slider-item" style="background-color:#93282B; height:490px;">
                                <div class="slider-item-inner slider-item-inner-container">
                                    <div class="slider-item-caption-left slider-item-caption-white slider-item-caption-sm">
                                        <h4 class="slider-item-caption-title">Run! Run! Run!</h4>
                                        <a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/img/380x200.png') }});">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Back to School</h5>
                            <p class="banner-desc">Class is Almost in Session!</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{ asset('public/content/img/test_banner/20-i.png') }}" alt="Image Alternative text" title="Image Title" style="bottom: -20px; right: -60px; width: 240px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/img/380x200.png') }});">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Back to School</h5>
                            <p class="banner-desc">Class is Almost in Session!</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{ asset('public/content/img/test_banner/20-i.png') }}" alt="Image Alternative text" title="Image Title" style="bottom: -20px; right: -60px; width: 240px;" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/img/380x200.png') }});">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Back to School</h5>
                            <p class="banner-desc">Class is Almost in Session!</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{ asset('public/content/img/test_banner/20-i.png') }}" alt="Image Alternative text" title="Image Title" style="bottom: -20px; right: -60px; width: 240px;" />
                    </div>
                </div>
            </div>
            
            <div class="gap"></div>
            <h3 class="widget-title">Today Featured</h3>
            <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Hamilton Beach 49996 FlexBrew Single-Serve Coffeemaker with Removable Reservoir</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$147</span><span class="product-caption-price-new">$133</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$147</span><span class="product-caption-price-new">$45</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">New Authentic Gucci Patent Leather Open Toe Platform Pump,Gren, 309984 3125</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$66</span><span class="product-caption-price-new">$33</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">New Asus X551MAV 15.6" HD N2830 2.16GHz 4GB 500GB Windows 8 Laptop Notebook</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$149</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">FootJoy Contour Casual Spikeless Golf Shoes Black Mens Closeout 54284 New</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$129</span><span class="product-caption-price-new">$117</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">RK7241S Table Saw with Laser by Rockwell</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$150</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Sterling Tools 31 Piece Ratchet Screwdriver Wrench Set</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$81</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$88</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Black 1000-Watt 6-Quart Electric Pressure Cooker Brushed Stainless and Matte 603</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$98</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="product  owl-item-slide">
                        <div class="product-img-wrap">
                            <img class="product-img" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
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
                            <h5 class="product-caption-title">Dyson DC50 Animal Compact Upright Vacuum</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$95</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row" data-gutter="15">
                <div class="col-md-6">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/img/560x200.png') }});">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left">
                            <h5 class="banner-title">Discover The Mountains</h5>
                            <p class="banner-desc">Pro Backpacks 70% Off.</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{ asset('public/content/img/test_banner/16-i.png') }}" alt="Image Alternative text" title="Image Title" style="bottom: -68px; right: -32px; width: 200px;" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner banner-o-hid" style="background-image:url({{ asset('public/content/img/560x200.png') }});">
                        <a class="banner-link" href="#"></a>
                        <div class="banner-caption-left banner-caption-dark">
                            <h5 class="banner-title">Winter is Comming</h5>
                            <p class="banner-desc">Outwear Collection</p>
                            <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                            </p>
                        </div>
                        <img class="banner-img" src="{{ asset('public/content/img/test_banner/16-i.png') }}" alt="Image Alternative text" title="Image Title" style="bottom: -68px; right: -32px; width: 200px;" />
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <h3 class="widget-title">Popular Categories</h3>
            <div class="row" data-gutter="15">
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Camping & Travel Bags</h5>
                        <p class="banner-category-desc">483 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Man's Luxury Watches</h5>
                        <p class="banner-category-desc">553 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Military Man's Boots</h5>
                        <p class="banner-category-desc">417 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">External Hard Drives</h5>
                        <p class="banner-category-desc">700 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Smart LED Full HDTV</h5>
                        <p class="banner-category-desc">535 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Unlocked Smartphones</h5>
                        <p class="banner-category-desc">120 products</p>
                    </a>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Waterproof Jackets</h5>
                        <p class="banner-category-desc">683 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Military Man's Boots</h5>
                        <p class="banner-category-desc">679 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Waterproof Jackets</h5>
                        <p class="banner-category-desc">387 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Man's Luxury Watches</h5>
                        <p class="banner-category-desc">323 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">Smart LED Full HDTV</h5>
                        <p class="banner-category-desc">338 products</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        <img class="banner-category-img-full" src="{{ asset('public/content/img/500x500.png') }}" alt="Image Alternative text" title="Image Title" />
                        <h5 class="banner-category-title">External Hard Drives</h5>
                        <p class="banner-category-desc">160 products</p>
                    </a>
                </div>
            </div>
            <div class="gap"></div>
        </div>

@include('content.layout.footer')


