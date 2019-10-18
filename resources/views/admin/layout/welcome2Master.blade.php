<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PROGRAMMING DETAILS</title>
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
    <link rel="stylesheet" href="{{asset('/blog/style.css')}}">
    <link rel="stylesheet" href="{{asset('/blog/css/responsive.css')}}">
    <!-- Modernizr Js -->
    <script src="/blog/vendors/modernizr-js/modernizr.js"></script>
</head>

<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{asset('/blog/http://browsehappy.com/')}}">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- ================ Start Header Section ================ -->
<header class="header">
    <div class="top-header bg-1 txt-clr-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 d-sm-block d-none">


                </div>
                <div class="col-lg-5 fw-3 fz-14 top-hdr-padding d-none d-lg-block">
                    <span class="top-bar-article-text"></span>
                </div>
                <div class="col-lg-5 col-md-9 col-sm-9 col-12 top-hdr-padding">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <span><i class="fa fa-envelope"></i></span> muradmd312@gmail.com
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-mobile"></i></span> 01701310878
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
                        <a href="{{asset('/blog/index.html')}}" class="logo">
                            <img src="/blog/images/logo_image/code3.png" class="img-fluid" alt="">
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
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="#">Algorithm</a></li>
                                <li><a href="#">Data Structure</a></li>
                                <li><a href="#">About me</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-3 col-6 trvel-user">
                    <ul class="d-flex justify-content-end">
                        <li class="blog-src-btn">
                            <a href="#"><i class="fa fa-search"></i></a>
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
                                <li><a href="{{url('login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="{{url('register')}}"><i class="fa fa-pencil-square-o"></i> Register</a></li>
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
                    <h5 class="fz-26 fw-5">Programming </h5>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center d-inline-flex">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Programming</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Start blog area -->
    <div class="blog-area bg-2">
        <div class="container">
            <div class="row wrap-reverse">
                <div class="col-lg-4">
                    <!-- Start categoris -->
                    <div class="blog-sidebar-section">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Category</h5>
                        </div>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingone">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseone">Asia</button>
                                </div>
                                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Europe</button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Africa
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfour">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        America
                                    </button>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingfive">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        North America
                                    </button>
                                </div>
                                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        West America
                                    </button>
                                </div>
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 2</a></li>
                                            <li><a href="#">ITEM 3</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                            <li><a href="#">ITEM 1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start sidebar banner -->
                    <div class="sidebar-banner mt-30">
                        <ul>
                            <li><a href="#"><img src="/blog/images/add/02.jpg" alt="" class="img-fluid"></a></li>
                            <li class="mt-30"><a href="#"><img src="/blog/images/add/03.jpg" alt="" class="img-fluid"></a></li>
                        </ul>
                    </div>

                    <!-- Start tags -->
                    <div class="blog-sidebar-section mt-30">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Tag</h5>
                        </div>
                        <div class="tags">
                            <a href="#">Travel</a>
                            <a href="#">Tour</a>
                            <a href="#">Country</a>
                            <a href="#">World</a>
                            <a href="#">Asia</a>
                            <a href="#">Hill</a>
                            <a href="#">Sea</a>
                            <a href="#">Forest</a>
                            <a href="#">River</a>
                            <a href="#">Tradition</a>
                            <a href="#">Enjoy</a>
                        </div>
                    </div>

                    <!-- Start instagram -->
                    <div class="blog-sidebar-section mt-30">
                        <div class="blog-sidebar-title">
                            <h5 class="fw-7 fz-18">Instragram</h5>
                        </div>
                        <div class="instagram">
                            <a href="#"><img src="/blog/images/instagram/01.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/02.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/03.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/04.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/05.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/06.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/07.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/08.jpg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/blog/images/instagram/09.jpg" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Start article section -->
                    @yield('content');
                    <!-- start comment area -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comment-area">
                                <h5>Leave A Comment</h5>
                                <form>
                                    <div class="form-group row mb-30">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control form-control-input" placeholder="Your Name" name="name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control form-control-input" placeholder="Your Mail" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" placeholder="Your Massage" name="massage" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-30">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary comment-submit-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start client section -->
    <div class="client-area client-area-style client-area-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="section-title text-center">
                        <h4 class="fw-7">I Am Featured In Different Place</h4>
                        <p class="fz-16 fw-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/01.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/02.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/03.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/04.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/05.png" alt="" class="img-fluid"></a></div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-sm-6 col-6 client-img"><a href="#"><img src="/blog/images/client/06.png" alt="" class="img-fluid"></a></div>
            </div>
        </div>
    </div>

</div>

<!-- ================ Start Footer Section ================ -->
<footer class="footer txt-clr-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="logo">
                    <img src="/blog/images/logo_image/code6.png" alt="">
                </a>
                <p class="mt-45">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                <form class="subscribe-form mt-25">
                    <div class="form-group mb-0">
                        <input type="email" class="form-control email-input" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-primary subscribe-btn bg-1">subscribe</button>
                </form>
                <p class="fz-14 mt-30">© 2018 All Right Reserved By Programming</p>
            </div>
            <div class="col-lg-3 ftr-link">
                <div class="ftr-title pt-15 mb-35">
                    <h3>Quick Link</h3>
                </div>
                <ul>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Dynamic Programming</a></li>
                    <li><a href="#">Beginner's Problem</a></li>
                    <li><a href="#">BFS</a></li>
                    <li><a href="#">DFS</a></li>
                    <li><a href="#">CPU Scheduling</a></li>
                    <li><a href="#">Online Judge</a></li>
                    <li><a href="#">Laravel</a></li>
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
<script src="/blog/js/jquery.min.js"></script>
<!-- Bootstrap Js -->
<script src="/blog/js/bootstrap.min.js"></script>welcome2
<!-- Owl Carousel Js -->
<script src="/blog/js/owl.carousel.min.js"></script>
<!-- Swiper Master Js -->
<script src="/blog/vendors/swiper-master/js/swiper.min.js"></script>
<!-- Slicknav Master -->
<script src="/blog/vendors/slicknav-master/jquery.slicknav.min.js"></script>
<!-- magnific popup -->
<script src="/blog/js/magnific-popup.min.js"></script>
<!-- counterup -->
<script src="/blog/vendors/counterup/waypoints.min.js"></script>
<script src="/blog/vendors/counterup/counterup.min.js"></script>
<!-- scroll up -->
<script src="/blog/js/scrollup.js"></script>
<!-- main js -->
<script src="/blog/js/main.js"></script>
</body>

</html>