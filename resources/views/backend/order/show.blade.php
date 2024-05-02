@extends('layouts.backend')
@section('content')

<!-- main content -->
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h4>Order Details</h4>
			</div>
			<div class="card-body">

				<p>Product : {{ $order->product['name']}}</p>
				<p>Order Price: {{ $order->price }}</p>
				<p>Product Order: {{ $order->product['price'] }}</p>

				<!-- status  -->

				<form action="" method="post"> 
					<input type="hidden" name="order_id" value="{{ $order->id }}">
					@csrf
					<div class="form-group">
						<label>Status</label>
						<select type="text" name="status_id" id="status_id" class="form-control">
							@foreach($statuses as $status)
							<option value="{{ $status->id }}" {{ $status->id == $order->status_id ? 'selcted' : '' }}>{{ $status->name }}</option>
							@endforeach
						</select>
						<button class="btn btn-primary mt-3">Change Status</button>
					</div>
				</form>

			</div>
		</div>
	</div>
	
</div>
<!-- main content end -->

@endsection

@section('scripts')

@endsection