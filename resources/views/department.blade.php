<!DOCTYPE html>
<html lang="en">

<head>
    <title>Treatment - St James Infirmary Busia Ltd</title>
    <meta charset="utf-8" />
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
                    <li class="nav-item">
                        <a href="{{ url('about') }}" class="nav-link">About</a>
                    </li>

                    <li class="nav-item active">
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
                    <h1 class="mb-2 bread">Our Treatments &amp; Services</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Treatments <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-1.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Out-Patient Department (OPD)</h3>
                            <p>
                                The OPD features a large waiting area, consultation rooms,
                                nursing station, observation room, and departments for health
                                records and accounts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-2.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">In-Patient Department</h3>
                            <p>
                                The IPD has a 30-bed capacity across various wards, including
                                general, pediatric, maternity, and private rooms, equipped
                                with adjustable beds.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-3.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Laboratory Department</h3>
                            <p>
                                The laboratory offers hematology, biochemistry, hormonal
                                profiles, and routine microscopy tests at affordable prices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-4.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Family Medicine Department</h3>
                            <p>
                                The specialist Family Physician offers general consultations,
                                preventive services, and NCD management, with plans for weekly
                                wellness clinics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-5.jpg)"></div>
                        <div class="media-body p-2 mt -3">
                            <h3 class="heading">Theatre Department</h3>
                            <p>
                                The theatre is well-equipped for major and minor surgeries,
                                including caesarian sections.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-6.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Physiotherapy Department</h3>
                            <p>
                                The physiotherapy department provides post-stroke,
                                post-surgery care, and musculoskeletal disorder management,
                                with plans for an equipped hospital gymnasium.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-7.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Pharmacy Department</h3>
                            <p>
                                The pharmacy department is well-stocked with Ministry of
                                Health-approved health commodities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/dept-8.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Radiology Department</h3>
                            <p>
                                The radiology department currently offers ultrasound services,
                                with plans for X-ray services in the future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block">
                        <div class="img w-100" style="background-image: url(images/otherfclts.jpg)"></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Other Facilities</h3>
                            <p>
                                The hospital has a kitchen and laundry services, stand-by
                                generator, CCTV and perimeter wall, water services (well), and
                                ongoing digitization of hospital systems.
                            </p>
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
