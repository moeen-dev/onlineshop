@extends('layouts.frontend')

@section('content')

<!-- profile section -->

<section class="profile">
    <div class="container profile__container">
        
        <div class="profile">
            <h2 class="heading">
                Orders
            </h2>
            @include('frontend.profile.menu')
        </div>

        <div class="orders">
        	@foreach($orders as $order)
        	<p>{{ $order->product['name'] }} - {{$order->price }}</p>
        	@endforeach

        </div>

    </div>
</section>

@endsection