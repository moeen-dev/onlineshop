@extends('layouts.frontend')

@section('content')

<section class="login">
    <div class="container login__container">

        <div class="login-card">
            <h2>Sign Up</h2>
            <form action="{{ route('user.register.submit')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input placeholder="Enter Your Name" type="text" name="name" id="name" class="form-input">
                    @if($errors->has('name'))
                    <small style="color: red">{{ $errors->first('name')}}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input placeholder="Enter Your E-mail" type="email" name="email" id="email" class="form-input">
                    @if($errors->has('email'))
                    <small style="color: red">{{ $errors->first('email')}}</small>
                    @endif
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input placeholder="Enter Your Password" type="password" name="password" id="password" class="form-input">
                    @if($errors->has('password'))
                    <small style="color: red">{{ $errors->first('password')}}</small>
                    @endif
                </div>

                <button class="btn-lg btn-block">Sign Up</button>
                <p class="mt-15">Already Have An Account? <a href="{{ route('user.login')}}">Sign In</a></p>
            </form>
        </div>

    </div>
</section>

@endsection