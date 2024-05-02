<nav class="navbar navbar-expand-lg main-navbar">
	<div class="form-inline mr-auto">
		<ul class="navbar-nav mr-3">
			<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
			<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
		</ul>
	</div>
	<ul class="navbar-nav navbar-right">
		<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg {{Auth::user()->unreadNotifications->count() > 0 ? 'beep' : ''}}"><i class="far fa-bell"></i></a>
			<div class="dropdown-menu dropdown-list dropdown-menu-right">
				<div class="dropdown-header">Notifications
					<div class="float-right">
						<a href="#">Mark All As Read</a>
					</div>
				</div>
				<div class="dropdown-list-content dropdown-list-icons">
					@foreach(Auth::user()->unreadNotifications as $notification)
					<a href="{{ route('notification.show', $notification->id) }}" class="dropdown-item dropdown-item-unread">
						<div class="dropdown-item-icon bg-primary text-white"><i class="fas fa-user"></i></div>
						<div class="dropdown-item-desc">
							A user {{ $notification->data['info']}}
							<div class="time text-primary">{{ $notification->created_at->diffForHumans() }}</div>
						</div>
					</a>
					@endforeach
				</div>
				<div class="dropdown-footer text-center">
					<a href="#">View All <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</li>
		<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
			<img alt="image" src="{{ url('assets/backend/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
			<div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
			<div class="dropdown-menu dropdown-menu-right">
				<div class="dropdown-title">Logged in 5 min ago</div>
				<a href="features-profile.html" class="dropdown-item has-icon">
					<i class="far fa-user"></i> Profile
				</a>
				<a href="features-settings.html" class="dropdown-item has-icon">
					<i class="fas fa-cog"></i> Settings
				</a>
				<div class="dropdown-divider"></div>
				<div class="dropdown-divider"></div>
				<a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
					<i class="fas fa-sign-out-alt"></i>Logout
				</a>

				<form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-done">
					@csrf
				</form>
			</div>
		</li>
	</ul>
</nav>