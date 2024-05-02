@extends('layouts.backend')
@section('content')

<!-- main content -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4>Budget vs Sales</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-md">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>
								<th>Product</th>
								<th>Price</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($orders as $order)
							<tr>
								<td>{{ $loop->index + 1}}</td>
								<td>
									<img style="width: 80px" src="{{ url('upload/images', $order->product['image'])}}">
								</td>
								<td>{{ $order->product['name'] }}</td>
								<td>{{ $order->price }}</td>
								<td>{{ $order->status['name']}}</td>
								<td>
									<a href="{{ route('admin.order.show', $order->id)}}" class="btn btn-info">Show</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!-- main content end -->

@endsection