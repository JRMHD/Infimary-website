<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact US - St James Infirmary Busia Ltd</title>
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

                    <li class="nav-item">
                        <a href="{{ url('department') }}" class="nav-link">Treatments</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('pricing') }}" class="nav-link">Pricing</a>
                    </li>

                    <li class="nav-item active">
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
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Contact <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 order-md-first">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510686.43056759704!2d33.842868940714595!3d0.36414937245830464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177f97eea90358d3%3A0x3d7445d292a2106a!2sBusia%20County!5e0!3m2!1sen!2ske!4v1713451717987!5m2!1sen!2ske"
                        width="100%" height="600" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <h2 class="mb-4">Contact Us</h2>
                    <p>
                        Get in touch with St James Infirmary Busia Ltd for any inquiries,
                        appointments, or feedback.
                    </p>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p>
                            <span>Address:</span><br />
                            St James Infirmary Busia Ltd<br />
                            Busia Town, Western Kenya
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p>
                            <span>Phone:</span><br />
                            <a href="tel://+254735615131">+254 735 615 131</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p>
                            <span>Email:</span><br />
                            <a href="mailto:stjamesinfirmarybusia@gmail.com">stjamesinfirmarybusia@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light d-flex align-self-stretch box p-4">
                        <p>
                            <span>Website:</span><br />
                            <a href="http://www.stjamesinfirmarybusia.com">www.stjamesinfirmarybusia.com</a>
                        </p>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
