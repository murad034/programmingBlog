<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLOG</title>
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/bootstrap.min.css')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/font-awesome.min.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{asset('/blog/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/owl.theme.default.min.css')}}">

    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('/blog/css/animate.css')}}">
    <!-- Swiper Master Css -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/swiper-master/css/swiper.min.css')}}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{asset('/blog/css/magnific-popup.css')}}">
    <!-- Slicknav Master -->
    <link rel="stylesheet" href="{{asset('/blog/vendors/slicknav-master/slicknav.min.css')}}">
    <!-- Site Style Css -->
    <link rel="stylesheet" href="{{asset('blog/style.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/responsive.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('/blog/vendors/modernizr-js/modernizr.js')}}"></script>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- ================ Start Header Section ================ -->
<header class="header">
    <div class="top-header bg-1 txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 d-sm-block d-none">
                    <div class="top-bar-article fz-16">
                        Latest Article
                        <span><i class="fa fa-angle-right"></i></span>
                    </div>
                </div>
                <div class="col-lg-5 fw-3 fz-14 top-hdr-padding d-none d-lg-block">
                    <span class="top-bar-article-text"> It is a long established fact that a reader will be distracted by...</span>
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9 col-12 top-hdr-padding">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span><i class="fa fa-envelope"></i></span> ghoraghuri@gmail.com
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-mobile"></i></span> 013 768 9475 574
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="barnd-logo text-center ptb-40">
                        <a href="index.html" class="logo">
                            <img src="images/logo.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start sitemenu -->
    <div class="sitemenu" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 col-6 offset-lg-2">
                    <nav class="navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul id="menubar" class="navbar-nav">
                                <li>
                                    <a href="index.html">home</a>
                                    <ul>
                                        <li><a href="index-2.html">home 2</a></li>
                                        <li><a href="index-3.html">home 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">pages</a>
                                    <ul>
                                        <li><a href="about.html">about me</a></li>
                                        <li>
                                            <a href="#">details</a>
                                            <ul>
                                                <li><a href="blog-details.html">detail 1</a></li>
                                                <li><a href="blog-details-2.html">detail 2</a></li>
                                                <li><a href="blog-detail-slider.html">detail 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">blogs</a>
                                            <ul>
                                                <li><a href="blog-grid.html">blog 1</a></li>
                                                <li><a href="blog-sidebar-left.html">blog 2</a></li>
                                                <li><a href="blog-sidebar-left-2.html">blog 3</a></li>
                                                <li><a href="blog-sidebar-right.html">blog 4</a></li>
                                                <li><a href="blog-sidebar-right-2.html">blog 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">gellary</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Travel Story</a></li>
                                <li><a href="gallery.html">gellary</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-end">
                        <li class="lang">Eng <i class="fa fa-angle-down"></i>
                            <ul>
                                <li>Ban</li>
                            </ul>
                        </li>
                        <li class="blog-src-btn">
                            <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                            <ul  class="blog-secrch">
                                <li>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search your article...">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit">SEARCH</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="user-option">
                            <i class="fa fa-user"></i>
                            <ul>
                                <li><a href="login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="register.html"><i class="fa fa-pencil-square-o"></i> Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ================ Start Main Section ================ -->
<div class="main" role="main">

    <!-- Start page title section -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="fz-26 fw-5">Register</h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center d-inline-flex">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- start register form -->
    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12">
                    <div class="register">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 col-12">
                                <div class="section-title text-center">
                                    <h4 class="fw-7">Create Your Accounts</h4>
                                    <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                                <form>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Your Name..">
                                    </div>
                                    <div class="form-group mt-30">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Your Email..">
                                    </div>
                                    <div class="form-group mt-30">
                                        <label>Password</label>
                                        <input type="email" class="form-control" placeholder="Your Password..">
                                    </div>
                                    <div class="form-group mt-30">
                                        <label>Confirm Password</label>
                                        <input type="email" class="form-control" placeholder="Password Again..">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block reg-btn">Submit Now</button>
                                </form>
                                <p class="mt-20 text-center already-account">Already Have an Account ? <a href="#">Log In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- ================ Start Footer Section ================ -->
<footer class="footer txt-clr-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="index.html" class="logo">
                    <img src="images/ftr_logo.png" alt="">
                </a>
                <p class="mt-45">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                <form class="subscribe-form mt-25">
                    <div class="form-group mb-0">
                        <input type="email" class="form-control email-input" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary subscribe-btn bg-1">subscribe</button>
                </form>
                <p class="fz-14 mt-30">© 2018 All Right Reserved By GhoraGhuri</p>
            </div>
            <div class="col-lg-3 ftr-link">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Quick Link</h3>
                </div>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Destination</a></li>
                    <li><a href="#">Tour Story</a></li>
                    <li><a href="#">Hotel & Resort</a></li>
                    <li><a href="#">Transport</a></li>
                    <li><a href="#">Restaurants</a></li>
                    <li><a href="#">Local Food</a></li>
                    <li><a href="#">Famous Food</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Twitter Feed</h3>
                </div>
                <ul class="twitter-link">
                    <li class="mb-15"><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                    <li><span class="mr-10"><i class="fa fa-twitter"></i></span><a href="#">https://twitter.com /envato/status/ 944202192013144064 https://twitter.com/envato/status/944202192013144064</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Contact Information</h3>
                </div>
                <ul class="ftr-contact">
                    <li><span>Location:</span> W Jackson Blvd, Chicago United States</li>
                    <li><span>Email:</span> exampleemail.com</li>
                    <li><span>Phone:</span> (123) 45678910</li>
                </ul>
                <div class="ftr-social">
                    <div class="ftr-title pt-15 mb-15">
                        <h3 class="fz-18">Social Prifile</h3>
                    </div>
                    <ul class="d-flex">
                        <li><a href="#" class="icon-fb"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icon-twit"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icon-glg"><i class="fa fa-google"></i></a></li>
                        <li><a href="#" class="icon-ldn"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="icon-utb"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
</footer>

<!-- ================ Start Jquery Plugins ================ -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap Js -->
<script src="js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="js/owl.carousel.min.js"></script>
<!-- Swiper Master Js -->
<script src="vendors/swiper-master/js/swiper.min.js"></script>
<!-- Slicknav Master -->
<script src="vendors/slicknav-master/jquery.slicknav.min.js"></script>
<!-- magnific popup -->
<script src="js/magnific-popup.min.js"></script>
<!-- counterup -->
<script src="vendors/counterup/waypoints.min.js"></script>
<script src="vendors/counterup/counterup.min.js"></script>
<!-- scroll up -->
<script src="js/scrollup.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>