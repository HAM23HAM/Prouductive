<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="landing page/assets/just-logo.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="landing page/style.css">
    <!-- javascript -->
    <script type="text/javascript" src="landing page/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script type="text/javascript" src="landing page/assets/js/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="landing page/assets/css/animate.min.css">

    <script>
        $(window).scroll(function() {
            $('nav, a').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
    </script>

    <title>Prouductive</title>
</head>

<body>
    <div class="wrap-container">
        <div class="container-fluid">
            <!-- Menu -->
            <div class="row" id="menu">
                <nav class="navbar menu navbar-expand-lg navbar-light">
                    <div class="menu-wrap d-flex container-fluid justify-content-between ">

                        <button class="navbar-toggler order-" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand logo m-0 d-sm-none d-md-none d-none d-lg-block" href="#menu"><img src="landing page/assets/just-logo.png"> Prouductive</a>

                        <div class="d-flex">
                            <div class="menu-collapse collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav my-1 mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#menu">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#why">Why us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About us</a>
                                    </li>
                                    @if (Route::has('login'))
                                    @auth
                                    @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                                    </li>
                                    @endif
                                    @endif
                                </ul>
                                @if (Route::has('login'))
                                @auth
                                <a href="{{ url('/dashboard') }}">
                                    <button type="button" class="btn-nav">Dashboard</button>
                                </a>
                                @elseif (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button type="button" class="btn-nav">Get Started</button>
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <img src="landing page/assets/liquid.png" class="decor">

            <!-- HERO -->
            <div class="container-content py-5">
                <div class="row mx-5 my-5" id="hero">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-lg-start text-md-center text-sm-center text-center my-auto mx-auto wow fadeInLeft">
                        <p class="slogan">
                            Achieve your goals
                            <br>
                            Proud to be productive.
                        </p>
                        <p class="desc-text">
                            We are more than just a todo list. We help you reach resolutions
                            <br>
                            and increase productivity. Here you can organize your goals,
                            <br>
                            set your own rewards and track your progress in order to be
                            <br>
                            productive and happy at the same time.
                        </p>

                        <div class="text">
                            <a href="{{ route('register') }}">
                                <button type="button" class="btn-sign mt-3 mb-3">Get Started</button>
                            </a>
                        </div>
                    </div>
                    <div class=" col-5 d-md-none d-sm-none d-none d-lg-inline wow fadeInRight">
                        <img src="landing page/assets/proud 1.png" width="100%">
                    </div>
                </div>
            </div>
            <!-- HERO -->

            <!-- WHY US -->
            <div class="container py-5" id="why">
                <!-- row -->
                <div class="row justify-content-center mt-5">
                    <div class="col-12 text-center mt-5">
                        <p class="pwhy mb-1 wow zoomIn">
                            Why Us Suit For You
                        </p>
                    </div>
                </div>
                <!-- row -->
                <!-- row -->
                <div class="row mb-5">
                    <!-- col -->
                    <div class="col-12 col-md-6 mt-4 pt-2">
                        <div class="sticky-bar wow fadeInLeft">
                            <img src="landing page/assets/dashboard.png" width="100%">
                        </div>
                    </div>
                    <!-- col-->
                    <!-- col -->
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 my-auto wow fadeInRight">
                        <div class="d-flex">
                            <div class="number-box my-2 me-3 text-center"> 1 </div>
                            <div>
                                <h4 class="fw-bold">
                                    A new way to manage your goals
                                </h4>
                                <p class="text-muted">
                                    keep track with your progress <br>
                                    and help remind you with your goals
                                </p>
                            </div>

                        </div>

                        <div class="d-flex">
                            <div class="number-box my-2 me-3 text-center"> 2 </div>
                            <div>
                                <h4 class="h3why fw-bold">
                                    Give yourself special gift
                                </h4>
                                <p class="text-muted">
                                    a reward feauture for you after completing <br>
                                    some task to bring motivation to do more
                                </p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="number-box my-2 me-3 text-center"> 3 </div>
                            <div>
                                <h4 class="fw-bold">
                                    Create a new habit
                                </h4>
                                <p class="text-muted">
                                    21 days habits track for achieve new habits <br>
                                    <span id="ppp">ppp</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="number-box my-2 me-3 text-center"> 4 </div>
                            <div>
                                <h4 class="fw-bold">
                                    Customized task
                                </h4>
                                <p class="text-muted">
                                    Be yourself and express your style with <br>
                                    customized task
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>

            <!-- About us -->
            <div class="row" id="about" style="padding-bottom: 100px;">
                <div class=" mb-3">
                    <p style="font-size: 50px; font-weight: bold; color: var(--lavender);" class="ms-5 mb-5 mt-3 wow zoomIn">
                        About us
                    </p>
                </div>

                <div class="col-6 text-center wow zoomIn" data-wow-delay="0.5s">
                    <p style="color: var(--blue); font-weight: bold; font-size: 24px;">
                        Front<span style="color: var(--yellow)">end dev</span>
                    </p>
                </div>
                <div class="col-6 text-center wow zoomIn" data-wow-delay="0.5s">
                    <p style="color: var(--red); font-weight: bold; font-size: 24px;">
                        Back<span style="color: var(--yellow);">end dev</span>
                    </p>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="1s">
                    <img src="landing page/assets/dimas.png" alt="Dimas Rafi" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Dimas Rafi
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="1.5s">
                    <img src="landing page/assets/helmy.png" alt="Helmy Zakiudin" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Helmy Zakiudin
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="2s">
                    <img src="landing page/assets/ilhambaru.png" alt="Muhammad Ilham" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Muhammad Ilham
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="2.5s">
                    <img src="landing page/assets/gatra.png" alt="Galih Saputra" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Galih Saputra
                    </span>
                </div>
            </div>

            <footer class="footer">
                <div class="text-center p-3">
                    <div class="row position-relative">
                        <div class="col-4 text-center my-auto">
                            <p style="font-size: 12px; color: white; margin-bottom: 0px;">
                                © 2021 Prouductive. All rights reserved.
                            </p>
                        </div>
                        <div class="col-4 text-center">
                            <h5 class="logofooter text"><img src="landing page/assets/just-logo.png"> Prouductive</h5>
                        </div>
                        <div class="col-4 text-center my-auto">
                            <p style="font-size: 12px; color: white; margin-bottom: 0px;">
                                Made with ♥ remotely from Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>

        new WOW().init();

        $(document).ready(function() {
            $('.menu .menu-wrap .menu-collapse ul li a').click(function(e) {

                var targetHref = $(this).attr('href');

                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 50);

                e.preventDefault();
            });


            $('.nav-item .nav-link').click(function(event) {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });




        });

        
    </script>

</body>
