<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>St. James Infirmary Busia - Quality Healthcare Services</title>
    <meta name="description"
        content="St. James Infirmary Busia offers quality, acceptable, and affordable healthcare services in Busia, Western Kenya." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #007bff;
        }

        .service {
            margin-bottom: 30px;
        }

        .service h3 {
            color: #007bff;
        }

        .service p {
            font-size: 16px;
        }

        .icon {
            width: 80px;
            height: 80px;
            background-color: #007bff;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }
    </style>
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
                    <li class="nav-item active">
                        <a href="{{ url('welcome') }}" class="nav-link pl-0">Home</a>
                    </li>
                    <li class="nav-item">
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
    <section class="home-slider owl-carousel" style="position: relative; overflow: hidden;">
        <!-- First Slider Item -->
        <div class="slider-item"
            style="background-image: url(images/bg_1.jpg); height: 100vh; background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; text-align: center; overflow-y: auto;">
            <!-- Overlay for background -->
            <div class="overlay"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
            </div>
            <!-- Content Container -->
            <div class="container" style="z-index: 1; color: #fff;">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Providing Quality Healthcare</h1>
                        <h3 class="subheading">Every Day We Bring Hope and Healing to the Community</h3>
                        <p>
                            <a href="{{ url('about') }}" class="btn btn-danger px-4 py-3 mt-3">Learn More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Slider Item -->
        <div class="slider-item"
            style="background-image: url(images/bg_2.jpg); height: 100vh; background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center; text-align: center; overflow-y: auto;">
            <!-- Overlay for background -->
            <div class="overlay"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
            </div>
            <!-- Content Container -->
            <div class="container" style="z-index: 1; color: #fff;">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Your Health is Our Priority</h1>
                        <h3 class="subheading">Providing Comprehensive and Affordable Medical Services</h3>
                        <p>
                            <a href="{{ url('department') }}" class="btn btn-danger px-4 py-3 mt-3">Explore Services</a>
                        </p>
                    </div>
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
                            <span class="subheading mb-2">Welcome to St. James Infirmary Busia</span>
                            <h2 class="mb-2" style="font-size: 32px">
                                Providing Quality Healthcare Services
                            </h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>
                            St. James Infirmary Busia is dedicated to delivering
                            compassionate and effective healthcare services to our
                            community. Located in Busia town, Western Kenya, our hospital
                            strives to improve the well-being of our patients through
                            comprehensive medical care.
                        </p>
                        <p>
                            We believe in patient-centered care, focusing on both prevention
                            and treatment of illnesses. Our team of dedicated healthcare
                            professionals is committed to ensuring the highest standards of
                            medical excellence.
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

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">Our Clinic Services</h2>
                    <p>
                        Explore our comprehensive range of medical services offered at St.
                        James Infirmary Busia Ltd.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Out-Patient Department</h3>
                            <p>
                                The out-patient department offers general consultations and
                                outpatient medical services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon">
                            <span class="flaticon-hospital-bed"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">In-Patient Department</h3>
                            <p>
                                Our in-patient department provides comprehensive care with
                                various specialized wards.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon">
                            <span class="flaticon-laboratory"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Laboratory Services</h3>
                            <p>
                                We offer a wide range of diagnostic tests and analyses in our
                                well-equipped laboratory.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block text-center">
                        <div class="icon">
                            <span class="flaticon-heartbeat"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Family Medicine</h3>
                            <p>
                                Our specialist family physician offers general consultations
                                and preventive care services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Add more service items based on your provided information -->
            </div>
        </div>
    </section>

    <section class="ftco-section intro" style="background-image: url(images/bg_3.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-4">Providing Exceptional Care for Our Patients</h3>
                    <p>
                        St. James Infirmary Busia is dedicated to providing exceptional
                        medical care and services to our patients. We are committed to
                        delivering quality healthcare solutions and ensuring the
                        well-being of every individual we serve.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonials</span>
                    <h2 class="mb-4">What Our Patients Say About Us</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                <div class="text pl-4 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>
                                        St. James Infirmary Busia provided excellent care and
                                        attention during my visit. I am grateful for their
                                        dedicated team and comprehensive services.
                                    </p>
                                    <p class="name">Mukhwana Wanjala</p>
                                    <span class="position">Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                <div class="text pl-4 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>
                                        The medical care and attention I received at St. James
                                        Infirmary Busia exceeded my expectations. I highly
                                        recommend their services.
                                    </p>
                                    <p class="name">Achieng Omondi</p>
                                    <span class="position">Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                <div class="text pl-4 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>
                                        I am very satisfied with the professionalism and care
                                        provided by St. James Infirmary Busia. They made me feel
                                        comfortable and well taken care of.
                                    </p>
                                    <p class="name">Ouma Otieno</p>
                                    <span class="position">Patient</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url(images/person_4.jpg)"></div>
                                <div class="text pl-4 bg-light">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>
                                        St. James Infirmary Busia has a caring and knowledgeable
                                        staff. I received excellent treatment and would recommend
                                        their services to anyone in need.
                                    </p>
                                    <p class="name">Khasimba Adhiambo</p>
                                    <span class="position">Patient</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
