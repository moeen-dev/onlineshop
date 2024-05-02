@extends('layouts.frontend')

@section('content')

<!-- category section start -->
<section class="category">
    <div class="container category__container">
        <div class="heading">
            <h2>Categories</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, impedit.</p>
        </div>

        <div class="categories">

            @foreach($categories as $category)
            <div class="single-category">
                <img src="{{ url('upload/images', $category->image)}}" alt="">
                <a href="{{ route('web.category.show', $category->slug )}}">{{ $category->name }}</a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- category section end -->


@endsection