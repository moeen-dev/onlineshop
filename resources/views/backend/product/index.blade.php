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
								<th>Name</th>
								<th>Slug</th>
								<th>Price</th>
								<th>Actual Price</th>
								<th>Category</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if($products->count() > 0)
							@foreach($products as $product)
							<tr>
								<td>{{ $loop->index + 1}}</td>
								<td>
									<img style="width: 80px" src="{{ url('upload/images', $product->image)}}">
								</td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->slug }}</td>
								<td>{{ $product->price }}</td>
								<td>{{ $product->actual_price }}</td>
								<td>{{ $product->category['name']}}</td>
								<td style="display: flex; gap: 5px;">
									<a href="{{ route('product.edit', $product->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
									<form action="{{ route('product.destroy', $product->id) }}" method="post">
										@csrf
										@method('DELETE')
										
										<button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete it?')"><i class="fas fa-trash"></i>Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="5" class="text-center" style="color: red">No Data Found!</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!-- main content end -->

@endsection