@extends('layouts.backend')
@section('content')

<!-- main content -->
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h4>Budget vs Sales</h4>
			</div>
			<div class="card-body">
				<form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
						@if($errors->has('name'))
						<small style="color: red">{{ $errors->first('name')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Slug</label>
						<input type="text" name="slug" id="slug" class="form-control" value="{{ $product->slug }}">
						@if($errors->has('slug'))
						<small style="color: red">{{ $errors->first('slug')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" id="image" data-default-file="{{ url('upload/images', $product->image)}}">
						@if($errors->has('image'))
						<small style="color: red">{{ $errors->first('image')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea name="description" id="description" class="summernote">{{ $product->description }}</textarea>
						@if($errors->has('description'))
						<small style="color: red">{{ $errors->first('description')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Category</label>
						<select class="form-control" name="category_id" id="category_id">
							<option value="" selected disabled>-- Select Category --</option>
							@foreach($categories as $category)
							<option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
							@endforeach
						</select>
						@if($errors->has('category_id'))
						<small style="color: red">{{ $errors->first('category_id')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Price</label>
						<input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
						@if($errors->has('price'))
						<small style="color: red">{{ $errors->first('price')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Actual Price</label>
						<input type="number" name="actual_price" id="actual_price" class="form-control" value="{{ $product->actual_price }}">
						@if($errors->has('actual_price'))
						<small style="color: red">{{ $errors->first('actual_price')}}</small>
						@endif
					</div>

					<button class="btn btn-primary" type="Submit">Save</button>
				</form>
			</div>
		</div>
	</div>
	
</div>
<!-- main content end -->

@endsection

@section('scripts')
<script>
	$("#name").keyup(function() {
		var Text = $(this).val();
		Text = Text.toLowerCase();
		Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
		$("#slug").val(Text);
	});

	$('#image').dropify();
</script>
@endsection