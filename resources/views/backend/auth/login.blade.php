<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Login &mdash; Onlineshop</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/fontawesome/css/all.min.css') }}">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap-social/bootstrap-social.css') }}">

	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
	<!-- Start GA -->
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
					<img src="{{ url('assets/backend/img/stisla-fill.svg')}}" alt="logo" width="100" class="shadow-light rounded-circle">
						</div>

						<div class="card card-primary">
							<div class="card-header"><h4>Login</h4></div>
							@if(Session::has('error'))
							<p style="color: red" class="text-center">{{ Session::get('error')}}</p>
							@endif
							<div class="card-body">
								<form method="POST" action="{{ route('login.submit')}}">
									@csrf
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email">
										@if($errors->has('email'))
										<small style="color: red">{{ $errors->first('email')}}</small>
										@endif
									</div>

									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
											<div class="float-right">
												<a href="auth-forgot-password.html" class="text-small">
													Forgot Password?
												</a>
											</div>
										</div>
										<input id="password" type="password" class="form-control" name="password">
										@if($errors->has('password'))
										<small style="color: red">{{ $errors->first('password')}}</small>
										@endif
									</div>

									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
											<label class="custom-control-label" for="remember-me">Remember Me</label>
										</div>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="mt-5 text-muted text-center">
							Don't have an account? <a href="auth-register.html">Create One</a>
						</div>
						<div class="simple-footer">
							Copyright &copy; Onlineshop 2023
						</div>
					</div>
				</div>
			</div>
		</section>
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

	<!-- Page Specific JS File -->

	<!-- Template JS File -->
	<script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
	<script src="{{ asset('assets/backend/js/custom.js') }}"></script>
</body>
</html>