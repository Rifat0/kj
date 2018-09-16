@extends('content.layout.layout')

@section('css')

@endsection

@section('container')
	
	<div class="container">
        <header class="page-header">
            <h1 class="page-title">Favorite</h1>
        </header>
        <div class="row">
            <div class="col-md-12">
                <table class="table table table-shopping-cart">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Color/Size</th>
                            <th>Price</th>
                            <th>Action</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                            </td>
                            <td>Green</td>
                            <td>$499</td>
                            <td><a href="#">Add to cart</a></td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                            </td>
                            <td>Green</td>
                            <td>$499</td>
                            <td><a href="#">Add to cart</a></td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                            </td>
                            <td>Green</td>
                            <td>$499</td>
                            <td><a href="#">Add to cart</a></td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-shopping-cart-img">
                                <a href="#">
                                    <img src="{{ asset('public/img/100x100.png') }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            <td class="table-shopping-cart-title"><a href="#">Gucci Patent Leather Open Toe Platform</a>
                            </td>
                            <td>Green</td>
                            <td>$499</td>
                            <td><a href="#">Add to cart</a></td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="#"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="gap gap-small"></div>
            </div>
        </div>
    </div>
        
@endsection

@section('js')

@endsection