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
				<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" class="form-control">
						@if($errors->has('name'))
						<small style="color: red">{{ $errors->first('name')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Slug</label>
						<input type="text" name="slug" id="slug" class="form-control">
						@if($errors->has('slug'))
						<small style="color: red">{{ $errors->first('slug')}}</small>
						@endif
					</div>

					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" id="image">
						@if($errors->has('image'))
						<small style="color: red">{{ $errors->first('image')}}</small>
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