<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onlineshop</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
</head>

<body>

    <div class="menu">
        <div class="container menu__container">
            <div class="brand">
                <a href="#"> Brand Logo </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{ route('web.category.index') }}" class="{{ Route::is('web.category.index') ? 'active' : ''}}">Category</a></li>
                    <li><a href="{{ route('web.product.index') }}" class="{{ Route::is('web.product.index') ? 'active' : ''}}">Product</a></li>
                    <li><a href="{{ route('service') }}" class="{{ Route::is('service') ? 'active' : ''}}">Service</a></li>
                    <li><a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : ''}}">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : ''}}">Contact Us</a></li>
                </ul>
            </nav>
            <div class="button">

                @if(Auth::user())
                <a href="{{ route('user.profile')}}" class="login-btn">Profile</a>
                <a href="{{ route('user.logout')}}" class="login-btn">Logout</a>

                @else
                <a href="{{ route('user.login')}}" class="login-btn">Sign In</a>

                @endif
                <a href="#" class="login-btn" id="menu_btn"><i class="fa-solid fa-bars"></i></a>

            </div>
        </div>
    </div>


    @yield('content')


    <!-- footer section start -->
    <div class="footer">
        <div class="container footer__container">
            <div class="footer-area">
                <h2>Foolish Developer</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus in modi eos, nisi eligendi quos
                voluptatum? Sed nobis vitae totam.</p>
                <div class="social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- bottom footer section start -->
    <div class="bottom-footer">
        <div class="container bottom_footer__container">
            <p>Copyright ©2023 <a href="#">Develop By Moeen</a></p>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : ''}}">Home</a></li>
                <li><a href="{{ route('about')}}" class="{{ Route::is('about') ? 'active' : ''}}">About Us</a></li>
                <li><a href="{{ route('contact')}}" class="{{ Route::is('contact') ? 'active' : ''}}">Contact Us</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>
    </div>
    <!-- bottom footer section end -->


    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js')}}"></script>
    <script>
        $('#menu_btn').click(function (e) { 
            e.preventDefault();
            $('.navbar').toggleClass('show');
        });
    </script>

    @yield('script')

</body>

</html>