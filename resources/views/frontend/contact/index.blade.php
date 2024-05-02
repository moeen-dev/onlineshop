@extends('layouts.frontend')

@section('content')

<!-- contact us section start -->
<section class="contact">
    <div class="container contact__container">
        <div class="left__box">
            <h2>Contact Us</h2>
            <p class="mt-15">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis dolore explicabo
            quas harum. Incidunt, repudiandae delectus.</p>

            <div class="address">
                <div class="item">
                    <i class="fa-solid fa-phone"></i>
                    <p>+8801911223344</p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-envelope"></i>
                    <p>name@domain.com</p>
                </div>

                <div class="item">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>The Daily Prabaha Bhaban, Sib bari mor, Khulna - 9100</p>
                </div>

            </div>
        </div>
        <div class="right__box">
            <form action="">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-input" name="name">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-input" name="email">
                </div>

                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-input"></textarea>
                </div>

                <button class="btn-lg">Send</button>
            </form>
        </div>
    </div>
</section>
<!-- contact us section end-->

@endsection