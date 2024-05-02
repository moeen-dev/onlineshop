@extends('layouts.frontend')

@section('content')

<!-- profile section -->

<section class="profile">
	<div class="container profile__container">

		@include('frontend.profile.menu')

		<div class="profile login-card">
			<h2 class="heading">
				Address
			</h2>

			<div class="address">
				<form action="{{ route('add.address')}}" method="POST">
					@csrf
					<div class="form-group">
						<label>Shipping Address</label>
						<input type="text" name="shipping_address" id="shipping_address" class="form-input" value="{{ Auth::user()->shipping_address }}">
					</div>

					<div class="form-group">
						<label>Billing Address</label>
						<input type="text" name="billing_address" id="billing_address" class="form-input" value="{{ Auth::user()->billing_address }}">
					</div>

					<button class="btn-lg btn-block" type="submit">Save</button>
				</form>
			</div>
		</div>

	</div>
</section>

@endsection