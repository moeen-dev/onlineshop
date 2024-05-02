@extends('layouts.frontend')

@section('content')

<section class="login">
    <div class="container login__container">

        <div class="login-card">
            <h2>Sign In</h2>
            @if(Session::has('error'))
            <p style="color: red" class="text-center">{{ Session::get('error')}}</p>
            @endif

            <form action="{{ route('user.login.submit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-input">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-input">
                </div>

                <button class="btn-lg btn-block" type="submit">Sign In</button>
                <p class="mt-15">Don't have an account? <a href="{{ route('user.register')}}">Sign Up</a></p>
            </form>

        </div>

    </div>
</section>

@endsection