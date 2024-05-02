@extends('layouts.frontend')

@section('content')

<!-- profile section -->

<section class="profile">
    <div class="container profile__container">
        
        <div class="profile">
            <h2 class="heading">
                Profile
            </h2>
            @include('frontend.profile.menu')
        </div>

    </div>
</section>

@endsection