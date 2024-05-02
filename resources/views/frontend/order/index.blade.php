@extends('layouts.frontend')

@section('content')

<!-- product section start -->
<section class="order">
    <div class="container order__container">

        <div class="add_card">
            <div class="p-25">
                <h2 class="text-center">Order Now</h2>

                <div class="address" style="margin: 40px 0;">
                    <p>Shipping Address:</p>
                    <p>{{ Auth::user()->shipping_address }}</p>
                    <hr>
                    <p>Billing Address:</p>
                    <p>{{ Auth::user()->billing_address }}</p>
                    <hr>
                    <a href="{{ route('address') }}" style="margin-top: 10px">Change Address...</a>
                </div>

                <a href="{{ route('web.product.show', $product->slug)}}" class="title">{{ $product->name }}</a>
                <p class="price">Price: {{ $product->price }} $ <span>{{ $product->actual_price }} $</span></p>
                <form action="{{ route('order.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button class="btn-lg btn-block mt-15">Place Your Order</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

@endsection