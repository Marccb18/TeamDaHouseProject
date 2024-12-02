<?php
$jsonData = file_get_contents('./assets/json/data.json');
$jsonDataClases = file_get_contents(filename: './assets/json/horarios.json');

$horarios = json_decode(json: $jsonDataClases, associative: true);

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
    <link rel="manifest" href="./site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/slicknav.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/gijgo.css">
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/animated-headline.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/coaches.css">
    <link rel="stylesheet" href="./https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/crossfit.css">
    <link rel="stylesheet" href="./assets/css/tables.css">
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
        <div class="header-area dance header-transparent">
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
                                <li><a href="#Clases">Cursos Disponibles</a></li>
                                <li><a href="#Profesores">Profesores</a></li>
                                <li><a href="#Horario">Horario</a></li>
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
                            <h2 class="">Sobre Nuestro Programa de CrossFit</h2>
                            <p>
                                Nuestro programa de CrossFit está diseñado para ayudarte a alcanzar tu máximo rendimiento físico a través de movimientos funcionales de alta intensidad. 
                                Dirigido por entrenadores certificados, nuestras clases combinan entrenamiento de fuerza, cardio y trabajo de habilidades para mejorar tu condición física general, 
                                fuerza y resistencia. Apto para todos los niveles de fitness, nuestro programa se enfoca en el entrenamiento personalizado y un ambiente de comunidad solidario.
                            </p>
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

            </div>
        </section>
        <div class="crossfit-page">
                        <div class="section-tittle text-center mb-100 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                            <h2 id="Profesores">Profesores</h2>
                        </div>
            <div class="cards-container">
                <?php foreach ($tarjetas as $tarjeta): ?>
                    <div class="card">
                        <div class="fondo-partido">
                            <div class="imagen" style="background-image: url('<?php echo $tarjeta['imagen']; ?>');"></div>
                        </div>
                        <h3><?php echo $tarjeta['nombre']; ?></h3>
                        <h3 class="titulo"><?php echo $tarjeta['profesion']; ?></h3>
                        <p><?php echo $tarjeta['descripcion']; ?></p>
                        <div class="iconos">
                            <a href="./<?php echo $tarjeta['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="./<?php echo $tarjeta['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="./<?php echo $tarjeta['pinterest']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="./<?php echo $tarjeta['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



          

            <!-- Pricing Section --> 
            <!-- Schedule Table -->
<section class="schedules custom-container">
    <h3 id="Horario" >Class Schedules</h3>
    <div class="table-container">
        <table id="Clases" class="tarifa-table">
            <thead>
                <tr>
                    <th>Hora</th>
                    <?php foreach ($horarios as $dia => $horariosDia): ?>
                        <th><?php echo $dia; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Primero, obtener todas las horas únicas
                $todasLasHoras = [];
                foreach ($horarios as $horariosDia) {
                    $todasLasHoras = array_merge($todasLasHoras, array_keys($horariosDia));
                }
                $todasLasHoras = array_unique($todasLasHoras);
                sort($todasLasHoras);

                // Ahora crear filas para cada hora
                foreach ($todasLasHoras as $hora):
                ?>
                    <tr>
                        <td><?php echo $hora; ?></td>
                        <?php foreach ($horarios as $dia => $horariosDia): ?>
                            <td>
                                <?php 
                                // Verificar si existe una clase para esta hora en este día
                                if (isset($horariosDia[$hora])) {
                                    // Si es un array de clases, unirlas
                                    if (is_array($horariosDia[$hora])) {
                                        echo implode(', ', $horariosDia[$hora]);
                                    } else {
                                        echo $horariosDia[$hora];
                                    }
                                } else {
                                    // Si no hay clase, mostrar espacio vacío
                                    echo '&nbsp;';
                                }
                                ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
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
                                    <a href="./index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
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
                                                        <li><a href="./index.html">Home</a></li>
                                                        <li><a href="./about.html">About</a></li>
                                                        <li><a href="./courses.html">Courses</a></li>
                                                        <li><a href="./pricing.html">Pricing</a></li>
                                                        <li><a href="./gallery.html">Gallery</a></li>
                                                        <li><a href="./contact.html">Contact</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header End -->
                                <!-- social -->
                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                                    <a href="./#"><i class="fab fa-twitter"></i></a>
                                    <a href="./https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="./#"><i class="fab fa-pinterest-p"></i></a>
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
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="./https://colorlib.com" target="_blank">Colorlib</a>
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
        <a title="Go to Top" href="./#"> <i class="fas fa-level-up-alt"></i></a>
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