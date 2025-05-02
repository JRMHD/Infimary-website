<!DOCTYPE html>
<html lang="en">

<head>
    <title>About St James Infirmary Busia Ltd</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Learn about St James Infirmary Busia Ltd, a level 3B private medical facility in Busia town, Western Kenya, providing quality and affordable healthcare services." />
    <meta name="keywords"
        content="hospital, medical facility, healthcare, Busia hospital, St James Infirmary, private hospital, level 3B hospital" />
    <meta name="author" content="St James Infirmary Busia Ltd" />
    <link rel="shortcut icon" type="image/x-icon" href="images\St.-James-Logo-white.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    @include('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="{{ url('welcome') }}" class="nav-link pl-0">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('department') }}" class="nav-link">Treatments</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pricing') }}" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">About Us</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>About us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/about.jpg)">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5 pt-md-5">
                            <span class="subheading mb-2">Welcome to St James Infirmary Busia Ltd</span>
                            <h2 class="mb-2" style="font-size: 32px">
                                Providing Quality Healthcare Services in Busia, Kenya
                            </h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>
                            St James Infirmary Busia Ltd is a level 3B private medical
                            facility located in Busia town, Western Kenya. We are committed
                            to providing excellent and affordable healthcare services to our
                            community and beyond.
                        </p>
                        <p>
                            Our hospital offers comprehensive services including outpatient
                            care, inpatient services, laboratory testing, surgical
                            procedures, and specialized clinics. We prioritize patient
                            comfort, safety, and well-being in all aspects of our care.
                        </p>
                        <div class="founder d-flex align-items-center mt-5">
                            <div class="img" style="background-image: url(images/doc-1.jpg)"></div>
                            <div class="text pl-3">
                                <h3 class="mb-0">Dr. Nabwire Khakasa</h3>
                                <span class="position">Medical Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url(images/bg_3.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Welcome to St James Infirmary Busia Ltd</h2>
                    <p class="mb-0">
                        Your Health is Our Top Priority with Comprehensive, Affordable
                        Healthcare.
                    </p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0">
                        <a href="{{ url('consultation') }}" class="btn btn-danger px-4 py-3">Schedule a Free
                            Consultation</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
