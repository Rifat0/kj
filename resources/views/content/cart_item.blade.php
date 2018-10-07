@extends('content.layout.layout')

@section('css')

@endsection

@section('container')

    @if(session()->has('cart_data'))
	
	<div class="container">
        <header class="page-header">
            <h1 class="page-title">My Shopping Bag</h1>
        </header>
        <form method="post" action="{{ url('/update_cart') }}">
            @csrf
        <div class="row">
            @include('Admin.Layouts.message')
            <div class="col-md-10">
                <table class="table table table-shopping-cart">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Color/Size</th>
                            <th>Price</th>
                            <th>Quality</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nop=0; $sub_total=0; ?>
                        @foreach((array) $cart_product_data as $key => $item)
                        <?php 
                        $st = isset($item[0]) ? $item[0] : false;
                        $nop++;
                        ?>
                        @if($st)
                        <tr>
                            @foreach($product_image as $image)
                            @if($item[0]->product_number == $image->product_number)
                            <td class="table-shopping-cart-img">
                                <a href="{{ url('/product/'.$item[0]->productCategory.'/'.$item[0]->productSubCategory.'/'.$item[0]->product_number) }}">
                                    <img src="{{ asset('public/backend/img/vendor/products').'/'.$image->productImage1 }}" alt="Image Alternative text" title="Image Title" />
                                </a>
                            </td>
                            @endif
                            @endforeach
                            <td class="table-shopping-cart-title"><a href="{{ url('/product/'.$item[0]->productCategory.'/'.$item[0]->productSubCategory.'/'.$item[0]->product_number) }}">{{ $item[0]->productName }}</a>
                            </td>
                            <td>Green</td>
                            <td>${{ $item[0]->pd_price }}</td>
                            <td>
                                <?php $count=0;?>
                                @foreach(Session::get('cart_data') as $values)
                                <?php $count++ ?>
                                    @if($item[0]->product_number == $values['product_id'])
                                    <input class="form-control table-shopping-qty" name="quantity[{{$count}}]" type="number" min="1" step="1" value="{{ $values['quantity'] }}"  />
                                    <input type="hidden" name="nop[]" value="{{ $nop }}">
                                    <input type="hidden" name="product_id[{{$count}}]" value="{{ $item[0]->product_number }}">
                                    <?php 
                                        $item_total_price = $item[0]->pd_price*$values['quantity'];
                                        $sub_total=$sub_total+$item_total_price;
                                    ?>
                                    @endif
                                @endforeach
                            </td>
                            <td>${{ $item_total_price }}</td>
                            <td>
                                <a class="fa fa-close table-shopping-remove" href="{{ url('/remove_cart_product'.'/'.$key) }}"></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="gap gap-small"></div>
            </div>
            <div class="col-md-2">
                <ul class="shopping-cart-total-list">
                    <li><span>Subtotal</span><span>${{ $sub_total }}</span>
                    </li>
                    <li><span>Shopping</span><span>${{ $shopping_cost = 0 }}</span>
                    </li>
                    <li><span>Taxes</span><span>${{ $taxes = 0 }}</span>
                    </li>
                    <li><span>Total</span><span>${{ $sub_total+$shopping_cost+$taxes }}</span>
                    </li>
                </ul><a class="btn btn-primary" href="{{ url('/checkout') }}">Checkout</a>
            </div>
        </div>
        <ul class="list-inline">
            <li><a class="btn btn-default" href="{{ url('/') }}">Continue Shopping</a>
            </li>
            <li>
                <button type="submit" class="btn btn-default">Update Bag</button>
            </form>
            </li>
        </ul>
    </div>
    @else
    <div class="container">
        <div class="text-center">
            <i class="fa fa-cart-arrow-down empty-cart-icon"></i>
            <p class="lead">You haven't Fill Your Shopping Cart Yet</p>
            <a class="btn btn-primary btn-lg" href="{{ url('/') }}">Start Shopping <i class="fa fa-long-arrow-right"></i></a>
        </div>
        <div class="gap"></div>
    </div>
    @endif
        
@endsection

@section('js')

@endsection