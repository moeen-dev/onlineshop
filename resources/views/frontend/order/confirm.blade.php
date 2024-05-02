@extends('layouts.frontend')

@section('content')


<section class="order">
    <div class="container order__container">

        <div class="card">
            <div class="p-25">
                <div class="d-flex">
                    <h2>Thanks for your order!</h2>
                    <h4 class="mt-15">
                        <a style="color: green" href="{{ route('home') }}">Continure to shopping...</a>
                    </h4>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection