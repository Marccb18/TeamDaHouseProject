<?php
$jsonData = file_get_contents('./assets/json/data.json');

$tarjetas = json_decode($jsonData, true);
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Crossfit </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/coaches.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Section Styles */
        .crossfit-page h1 {
            text-align: center;
            color: #e74c3c;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 10px;
        }

        /* Description Section */
        .description {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Image Carousel */
        .image-carousel {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .carousel {
            display: flex;
            justify-content: center;
            gap: 20px;
            overflow-x: auto;
        }

        .carousel img {
            max-width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Pricing Section */
        .pricing {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .price-options {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .price-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            width: 250px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .price-card:hover {
            transform: scale(1.05);
        }

        .price-card h3 {
            color: #e74c3c;
            margin-bottom: 10px;
        }

        .price-card p {
            font-size: 1.5em;
            font-weight: bold;
            color: #2ecc71;
        }

        .price-card ul {
            list-style-type: none;
            padding: 0;
        }

        /* Schedule Table */
        .schedules {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        table thead {
            background-color: #e74c3c;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .price-options {
                flex-direction: column;
            }

            .carousel {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog_details.html">Blog Details</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="contact.html" class="btn">Contact me</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Da house of Crossfit</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team -->
        <section class="team-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Body Building</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Muscle Gain</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team3.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Weight Loss</a></h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding pt-50 pb-80">
            <div class="support-wrapper align-items-center">
                <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="front-text">
                            <h2 class="">About Our CrossFit Program</h2>
                            <p>
                                Our CrossFit program is designed to help you achieve peak fitness through high-intensity,
                                functional movements. Led by certified coaches, our classes combine strength training,
                                cardio, and skill work to improve your overall fitness, strength, and endurance.
                                Suitable for all fitness levels, our program focuses on personalized coaching
                                and a supportive community environment.
                            </p>
                            <a href="courses.html" class="border-btn">My Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area pt-10 pb-50">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2>From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                </div>
                                <div class="blog-cap">
                                    <span>Gym & Fitness</span>
                                    <h3><a href="blog_details.html">Your Antibiotic One Day To 10 Day Options</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="crossfit-page">
            <h1>Profesores</h1>

            <div class="cards-container">
                <?php foreach ($tarjetas as $tarjeta): ?>
                    <div class="container">
                        <div class="shape">
                            <div class="image" style="background-image: url('<?php echo $tarjeta['imagen']; ?>');"></div>
                        </div>
                        <h3><?php echo $tarjeta['nombre']; ?></h3>
                        <h3 class="title"><?php echo $tarjeta['profesion']; ?></h3>
                        <p><?php echo $tarjeta['descripcion']; ?></p>
                        <div class="icons">
                            <a href="<?php echo $tarjeta['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo $tarjeta['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="<?php echo $tarjeta['pinterest']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="<?php echo $tarjeta['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Image Carousel -->
            <section class="image-carousel">
                <h2>CrossFit in Action</h2>
                <div class="owl-carousel">
                    <div class="item"><img src="crossfit1.jpg" alt="CrossFit Training"></div>
                    <div class="item"><img src="crossfit2.jpg" alt="Group Workout"></div>
                    <div class="item"><img src="crossfit3.jpg" alt="Strength Training"></div>
                </div>
            </section>

            <script>
                $(document).ready(function() {
                    $(".owl-carousel").owlCarousel({
                        items: 1,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true
                    });
                });
            </script>

            <!-- Pricing Section -->
            <section class="pricing">
                <h2>Membership Prices</h2>
                <div class="price-options">
                    <div class="price-card">
                        <h3>Starter Pack</h3>
                        <p>$99/month</p>
                        <ul>
                            <li>2 Classes per Week</li>
                            <li>Basic Equipment Access</li>
                        </ul>
                    </div>
                    <div class="price-card">
                        <h3>Unlimited</h3>
                        <p>$159/month</p>
                        <ul>
                            <li>Unlimited Classes</li>
                            <li>Full Gym Access</li>
                            <li>Personal Coaching</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Schedule Table -->
            <section class="schedules">
                <h2>Class Schedules</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Morning Class</th>
                            <th>Evening Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td>6:00 AM - Strength</td>
                            <td>6:30 PM - WOD</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>7:00 AM - Cardio</td>
                            <td>7:00 PM - Skill Work</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>6:00 AM - Mixed</td>
                            <td>6:30 PM - Endurance</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>7:00 AM - Strength</td>
                            <td>7:00 PM - WOD</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>6:00 AM - Cardio</td>
                            <td>6:30 PM - Team Workout</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>9:00 AM - Community WOD</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>Closed</td>
                            <td>Closed</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area black-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                                    <div class="main-header main-header2">
                                        <div class="menu-wrapper menu-wrapper2">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2 text-center">
                                                <nav>
                                                    <ul>
                                                        <li><a href="index.html">Home</a></li>
                                                        <li><a href="about.html">About</a></li>
                                                        <li><a href="courses.html">Courses</a></li>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>