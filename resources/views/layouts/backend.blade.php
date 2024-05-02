<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Admin dashboard - Online shop</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/fontawesome/css/all.min.css') }}">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/jqvmap/dist/jqvmap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/summernote/summernote-bs4.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/dropify/css/dropify.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
</head>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>

			@include('backend.partials.nav')
			@include('backend.partials.side')
			
			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Editor</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
							<div class="breadcrumb-item"><a href="#">Forms</a></div>
							<div class="breadcrumb-item">Editor</div>
						</div>
					</div>

					<div class="section-body">
						<h2 class="section-title">Editor</h2>
						<p class="section-lead">WYSIWYG editor and code editor.</p>

						<!-- main content -->
						@yield('content')
						<!-- main content end -->

					</section>
				</div>
			</div>
		</div>

		<!-- General JS Scripts -->
		<script src="{{ asset('assets/backend/modules/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/popper.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/tooltip.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/moment.min.js') }}"></script>
		<script src="{{ asset('assets/backend/js/stisla.js') }}"></script>

		<!-- JS Libraies -->
		<script src="{{ asset('assets/backend/modules/summernote/summernote-bs4.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/dropify/js/dropify.js') }}"></script>
		<script src="{{ asset('assets/backend/modules/sweetalert/sweetalert.min.js') }}"></script>

		<!-- Template JS File -->
		<script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
		<script src="{{ asset('assets/backend/js/custom.js') }}"></script>

		@yield('scripts')

		@if(Session::has('success'))
		<script>
			swal({
				title: "Good job!",
				text: "{{ Session::get('success')}}",
				icon: "success",
				button: "Okay!",
			});
		</script>
		@endif

		@if(Session::has('error'))
		<script>
			swal({
				title: "Something went wrong!",
				text: "{{ Session::get('error')}}",
				icon: "error",
				button: "Okay!",
			});
		</script>
		@endif
	</body>
	</html>
