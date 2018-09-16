@extends('content.layout.layout')

@section('css')

@endsection

@section('container')
<div class="gap"></div>

<div class="container">

<h3 class="widget-title-lg">Compare list</h3>
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
                    <h5 class="product-caption-title">HP EliteBook 8460p 2.7GHz i7 8GB 160GB DVD Win 7 Pro 64 Laptop Computer CAM B</h5>
                    <div class="product-caption-price"><span class="product-caption-price-new">$81</span>
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
                    <li>-50%</li>
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
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-caption-title">Ridgid Fuego 9 Amp Compact Orbital Reciprocating Saw R3002 RECON</h5>
                    <div class="product-caption-price"><span class="product-caption-price-old">$85</span><span class="product-caption-price-new">$43</span>
                    </div>
                    <ul class="product-caption-feature-list">
                        <li>3 left</li>
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
                    <h5 class="product-caption-title">Cobra Fly-Z Mens Golf Driver - 6 Colors - 4 Flex Options - Right Hand - 2015</h5>
                    <div class="product-caption-price"><span class="product-caption-price-new">$145</span>
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