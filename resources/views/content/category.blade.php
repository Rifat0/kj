@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

<div class="container">
    <header class="page-header">
        <h1 class="page-title">Cell Phones</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="#">Home</a>
            </li>
            <li><a href="#">Electronics</a>
            </li>
            <li class="active">Cell Phones</li>
        </ol>
        <ul class="category-selections clearfix">
            <li>
                <a class="fa fa-th-large category-selections-icon active" href="#"></a>
            </li>
            <li>
                <a class="fa fa-th-list category-selections-icon" href="#"></a>
            </li>
            <li><span class="category-selections-sign">Sort by :</span>
                <select class="category-selections-select">
                    <option selected>Newest First</option>
                    <option>Best Sellers</option>
                    <option>Trending Now</option>
                    <option>Best Raited</option>
                    <option>Price : Lowest First</option>
                    <option>Price : Highest First</option>
                    <option>Title : A - Z</option>
                    <option>Title : Z - A</option>
                </select>
            </li>
            <li><span class="category-selections-sign">Items :</span>
                <select class="category-selections-select">
                    <option>9 / page</option>
                    <option selected>12 / page</option>
                    <option>18 / page</option>
                    <option>All</option>
                </select>
            </li>
        </ul>
    </header>
    <div class="row">
        <div class="col-md-3">
            <aside class="category-filters">
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Category</h3>
                    <ul class="cateogry-filters-list">
                        <li><a href="#">Tv, Audio &amp; Home Theater</a>
                        </li>
                        <li><a href="#">Camera, Photo &amp; Video</a>
                        </li>
                        <li><a href="#">Computers &amp; Accessories</a>
                        </li>
                        <li><a href="#">Cell Phones &amp; Accessories</a>
                        </li>
                        <li><a href="#">Business &amp; Office</a>
                        </li>
                        <li><a href="#">Car &amp; GPS</a>
                        </li>
                        <li><a href="#">Audio & Accessories</a>
                        </li>
                        <li><a href="#">Software</a>
                        </li>
                        <li><a href="#">Video Games</a>
                        </li>
                    </ul>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Price</h3>
                    <input type="text" id="price-slider" />
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Relese Date</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Last 30 days<span class="category-filters-amount">(100)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Last 90 days<span class="category-filters-amount">(59)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Comming Soon<span class="category-filters-amount">(94)</span>
                        </label>
                    </div>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Brand</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Apple<span class="category-filters-amount">(10)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Samsung<span class="category-filters-amount">(15)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />LG<span class="category-filters-amount">(86)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Sony<span class="category-filters-amount">(62)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Micosoft<span class="category-filters-amount">(49)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Dell<span class="category-filters-amount">(75)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />HP<span class="category-filters-amount">(22)</span>
                        </label>
                    </div>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Carrier</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />AT&amp;T<span class="category-filters-amount">(32)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Verizon<span class="category-filters-amount">(37)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Sprint<span class="category-filters-amount">(86)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />T-Mobile<span class="category-filters-amount">(80)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Virgin Mobile<span class="category-filters-amount">(66)</span>
                        </label>
                    </div>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Operating System</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Android<span class="category-filters-amount">(41)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />iOS<span class="category-filters-amount">(18)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Windows 8<span class="category-filters-amount">(98)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />BlackberryOS<span class="category-filters-amount">(40)</span>
                        </label>
                    </div>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Discount</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />10% Off or More<span class="category-filters-amount">(99)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />25% Off or More<span class="category-filters-amount">(59)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />50% Off or More<span class="category-filters-amount">(62)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />75% Off or More<span class="category-filters-amount">(10)</span>
                        </label>
                    </div>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Features</h3>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />New<span class="category-filters-amount">(29)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Featured<span class="category-filters-amount">(97)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />On Sale<span class="category-filters-amount">(99)</span>
                        </label>
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row" data-gutter="15">
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Apple iPhone 5c - 16GB - GSM Factory Unlocked White Blue Green Pink Yellow</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$127</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$138</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Samsung Galaxy Note 4 IV 4G FACTORY UNLOCKED Black or White</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$87</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>3 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$125</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                            <div class="product-caption-price"><span class="product-caption-price-new">$71</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                            <div class="product-caption-price"><span class="product-caption-price-new">$94</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>3 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-4">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
                            <li>hot</li>
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">LG G3 VS985 - 32GB - Verizon Smartphone - Metallic Black or Silk White - Great</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$59</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>-20%</li>
                            <li>hot</li>
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
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-caption-title">LG G Flex D959 - 32GB - Titan Silver GSM Unlocked Android Smartphone (B)</h5>
                            <div class="product-caption-price"><span class="product-caption-price-old">$62</span><span class="product-caption-price-new">$50</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>4 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Motorola XT1096 Moto X 2nd Generation 16GB Verizon Wireless gsm unlocked</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$113</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-gutter="15">
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Apple iPhone 5s 16GB Factory Unlocked Smartphone Space Gray / Silver / Gold</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$95</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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
                            <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$65</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product ">
                        <ul class="product-labels">
                            <li>stuff pick</li>
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
                            <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>
                            <div class="product-caption-price"><span class="product-caption-price-new">$86</span>
                            </div>
                            <ul class="product-caption-feature-list">
                                <li>5 left</li>
                                <li>Free Shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="category-pagination-sign">58 items found in Cell Phones. Showing 1 - 12</p>
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
    </div>
</div>

@endsection

@section('js')

@endsection