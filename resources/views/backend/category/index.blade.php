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
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if($categories->count() > 0)
							@foreach($categories as $category)
							<tr>
								<td>{{ $loop->index + 1}}</td>
								<td>
									<img style="width: 70px" src="{{ url('upload/images', $category->image)}}">
								</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->slug }}</td>
								<td>
									<form action="{{ route('category.destroy', $category->id) }}" method="post">
										@csrf
										@method('DELETE')
										<a href="{{ route('category.edit', $category->id)}}" class="btn btn-info"><i class="fas fa-edit"></i>Edit</a>
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