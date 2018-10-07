@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

<div class="container">
    <header class="page-header">
        <h1 class="page-title">{{ $category->category_name }}</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a>
            </li>
            <li class="active">{{ $category->category_name }}</li>
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
                        @foreach($category_sub_category as $product_category)
                        @if($product_category->sub_category_id==0 )
                        <li><a href="{{ url('/category/'.$product_category->category_id) }}">{{ $product_category->category_name }}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Price</h3>
                    <input type="text" id="price-slider" />
                </div>
                
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row" data-gutter="15">
                @foreach($products as $product_data)
                <div class="col-md-4">
                    <div class="product ">
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="{{ asset('public/backend/img/vendor/products').'/'.$product_data->productImage1 }}" height="200px" width="200px" />
                            <img class="product-img-alt" src="{{ asset('public/backend/img/vendor/products').'/'.$product_data->productImage2 }}" height="200px" width="200px" />
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
                                <li class="rated"><i class="fa fa-star"></i>
                                </li>
                                <li class="rated"><i class="fa fa-star"></i>
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

            <!-- <div class="row">
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
            </div> -->
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection