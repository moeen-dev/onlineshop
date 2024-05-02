@extends('layouts.frontend')

@section('content')

<!-- banner section start -->
    <div class="banner">
        <div class="container banner__container">
            <h1>This is banner heading</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo culpa aspernatur magnam ad dolore dolorum
            porro vel quam consectetur expedita?</p>
            <a href="#" class="btn-lg mt-15">Learn More</a>
        </div>
    </div>
    <!-- banner section end -->


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

    <!-- service section start -->
    <section class="service">
        <div class="container service__contaciner">
            <div class="heading">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, impedit.</p>
            </div>

            <div class="services">
                <div class="single-service">
                    <i class="fa-solid fa-bowl-food fresh-food"></i>
                    <h3>Fresh Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam vel, ipsam incidunt
                    pariatur esse!</p>
                </div>

                <div class="single-service">
                    <i class="fa-solid fa-utensils fresh-food"></i>
                    <h3>Fresh Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam vel, ipsam incidunt
                    pariatur esse!</p>
                </div>

                <div class="single-service">
                    <i class="fa-solid fa-burger fresh-food"></i>
                    <h3>Fast Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam vel, ipsam incidunt
                    pariatur esse!</p>
                </div>

                <div class="single-service">
                    <i class="fa-solid fa-fish fresh-food"></i>
                    <h3>Sea Food</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit magnam vel, ipsam incidunt
                    pariatur esse!</p>
                </div>


            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- category section start -->
    <section class="category">
        <div class="container category__container">
            <div class="heading">
                <h2>Categories</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, impedit.</p>
            </div>

            <div class="categories">

                @foreach($categories as $category)
                <div class="single-category">
                    <img src="{{ url('upload/images', $category->image)}}" alt="">
                    <a href="{{ route('web.category.show', $category->slug )}}">{{ $category->name }}</a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- category section end -->


    <!-- product section start -->
    <section class="product">
        <div class="container product__container">
            <div class="heading">
                <h2>Products</h2>
                <p>Products are very qualityful and it's better than other's.</p>
            </div>

            <div class="products">

                @foreach($products as $product)
                <div class="single-product">
                    <div class="image">
                        <a href="">
                            
                            <img src="{{ url('upload/images', $product->image)}}" alt="">
                        </a>
                    </div>
                    <div class="details">
                        <a href="{{ route('web.product.index', $product->slug)}}" class="title">{{ $product->name }}</a>
                        <p class="price">{{ $product->price }} $ <span>{{ $product->actual_price }} $</span></p>
                    </div>
                    <a href="{{ route('web.product.show', $product->slug)}}" class="btn-lg btn-buy">Buy Now</a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- product section end -->


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


