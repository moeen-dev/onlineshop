@extends('layouts.frontend')

@section('content')

<!-- product section start -->
<section class="product">
    <div class="container pro__container">
        <div class="card left__box">
            <div class="single-product">
                <div class="image">
                    <a href="{{ route('web.product.show', $product->slug)}}">

                        <img src="{{ url('upload/images', $product->image)}}" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="card right__box">
            <div class="single-product p-25">
                <div class="details">
                    <a href="{{ route('web.product.show', $product->slug)}}" class="title">{{ $product->name }}</a>
                    <p class="price">Price: {{ $product->price }} $ <span>{{ $product->actual_price }} $</span></p>
                </div>

                <a href="{{ route('order.index', $product->slug) }}" class="btn-lg">Buy Now</a>
                <button class="btn-lg btn-block mt-15" id="show_desc">Show Description</button>
                <div class="desc_hide" id="description">{!! $product->description !!}</div>
            </div>
        </div>

    </div>
</div>
</section>
<!-- product section end -->

@endsection

@section('script')
<script>
    $('#show_desc').click(function(event) {
        $("#description").toggleClass('desc_hide');
    });
</script>
@endsection