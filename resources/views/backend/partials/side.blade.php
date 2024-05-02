<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="#">Onlineshop</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="#">Logo</a>
		</div>
		<ul class="sidebar-menu">
			<li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('admin.dashboard')}}"><i class="fas fa-home"></i><span>Home</span></a>
			</li>

			<li class="dropdown {{ Route::is('category.*') ? 'active' : '' }}">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Category</span></a>
				<ul class="dropdown-menu">

					<li class="{{ Route::is('category.create') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('category.create')}}">Add Category</a>
					</li>
					<li class="{{ Route::is('category.index') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('category.index')}}">Category list</a>
					</li>
					
				</ul>
			</li>

			<li class="dropdown {{ Route::is('product.*') ? 'active' : '' }}">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
				<ul class="dropdown-menu">

					<li class="{{ Route::is('product.create') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('product.create')}}">Add Product</a>
					</li>
					<li class="{{ Route::is('product.index') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('product.index')}}">Product list</a>
					</li>

				</ul>
			</li>

			<li class="{{ Route::is('admin.order') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('admin.order')}}"><i class="fas fa-th-list"></i><span>Orders</span></a>
			</li>

		</ul>

	</aside>
</div>