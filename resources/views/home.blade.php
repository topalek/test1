@extends('layout.app')

@section('content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{asset("images/banner.jpg")}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#about">About Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{asset("images/banner.jpg")}}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#mobile">Mobile Dev</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset("images/banner.jpg")}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#clients">Testimonials</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset("images/banner.jpg")}}" alt="four slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{asset("images/banner.jpg")}}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#ourwork">Our Work</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end banner -->
    <!-- about -->
    <div id="about"  class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Web Development</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="{{asset("images/about_img.png")}}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- mobile -->
    <div id="mobile"  class="mobile">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="mobile_img">
                        <figure><img src="{{asset("images/mobile.png")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>Mobile App Development</h2>
                        <span></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile -->
    <!-- clients -->
    <div id="clients" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="titlepage">
                        <h2>What is Say clients</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients_box">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="jonu">
                        <img src="{{asset("images/cross_img.png")}}" alt="#"/>
                        <h3>Jone due</h3>
                        <strong>(sure there isn't)</strong>
{{--                        <a class="read_more" href="#">Get A Quote</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end clients -->
    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Request A call back</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form" action="{{route('callback')}}">
                        @csrf
                        <input type="hidden" name="_name" value="request">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus @error('name') error @enderror" placeholder="Full Name" type="text" name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus @error('phone') error @enderror" placeholder="Phone Number" type="tel" name="phone" value="{{old('phone')}}">
                                @error('phone')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="contactus @error('email') error @enderror" placeholder="Email" type="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="contactus" name="message">Message </textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                    @if( ($errors->any() && isset($errors->subs_email)))
                        <script>
                            document.querySelector('#request').scrollIntoView()
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <div id="ourwork" class="ourwork">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our1.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our1.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_box">
                        <figure><img src="{{asset("images/our1.jpg")}}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
