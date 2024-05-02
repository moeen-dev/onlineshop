@extends('layouts.frontend')

@section('content')

<!-- product section start -->
<section class="product">
    <div class="container product__container">
        <div class="heading">
            <h2>Products</h2>
            <p>Products are very qualityful and it's better than other's.</p>
        </div>

        <div class="products">

            @foreach($products as $product)
            <div class="single-product">
                <div class="image">
                    <a href="{{ route('web.product.show', $product->slug)}}">

                        <img src="{{ url('upload/images', $product->image)}}" alt="">
                    </a>
                </div>
                <div class="details">
                    <a href="{{ route('web.product.show', $product->slug)}}" class="title">{{ $product->name }}</a>
                    <p class="price">{{ $product->price }} $ <span>{{ $product->actual_price }} $</span></p>
                </div>
                <a href="{{ route('web.product.show', $product->slug)}}" class="btn-lg btn-buy">Buy Now</a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- product section end -->

@endsection