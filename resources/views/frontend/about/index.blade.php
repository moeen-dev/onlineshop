@extends('layouts.frontend')

@section('content')

<!-- about section start -->
<section class="about">
    <div class="container about__container">
        <div class="left__box">
            <h2>About Us</h2>
            <p class="mt-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dignissimos possimus
                nihil ipsum inventore veniam id quia blanditiis odio ab ullam voluptas fuga, aliquid quibusdam dolor
                deleniti voluptatem nam earum cumque cum soluta. Possimus, veniam neque libero fuga architecto
            aliquam? Doloribus explicabo facilis impedit officia provident ipsum voluptatum vel maiores!</p>
            <p class="mt-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, fuga tempora
                soluta placeat dignissimos rem doloribus inventore repellendus fugit debitis error voluptas
                repudiandae sint recusandae a dolore quod qui minus, eos explicabo saepe? Quasi nihil voluptates
                minus nisi tempora. Commodi cum soluta perferendis repellendus vitae atque sint corporis facilis
            quaerat!</p>
        </div>

        <div class="right__box">

            <img src="{{ url('assets/frontend/images/about.jpg')}}" alt="">
        </div>
    </div>
</section>
<!-- about section end -->

@endsection