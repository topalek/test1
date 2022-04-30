<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>blueneek</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset("css/responsive.css")}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset("images/fevicon.png")}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset("css/jquery.mCustomScrollbar.min.css")}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show text-center">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="loader" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('images/logo.png')}}" alt="#" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about"> About Us  </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clients">Our Clients</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#ourwork">Our Work</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact Us</a>
                                    </li>
                                </ul>
{{--                                <div class="sign_btn"><a href="#">Get A Quote</a></div>--}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
@yield('content')
<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row border-top">
                <div class="col-md-6 padding_bottom1   ">
                    <h3>Subscribe Now</h3>
                    <form id="subs_form" class="footer_form @error('subs_email') error @enderror" action="{{route('subscribe')}}">
                        @csrf
                        <input class="enter @error('subs_email') error @enderror" placeholder="Enter your email" type="email" name="subs_email">
                        @error('subs_email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                        <button class="submit">submit</button>
                    </form>
                    @if( $errors->any() && !isset($errors->subs_email) )
                        <script>
                            document.querySelector('#subs_form').scrollIntoView(true)
                        </script>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                            <h3>Links</h3>
                            <ul class="cont">
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                            </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <h3>Contact us</h3>
                            <ul class="cont">
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. <a href="https://html.design/"> Free Html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("js/jquery-3.0.0.min.js")}}"></script>

<!-- sidebar -->
<script src="{{asset("js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>
