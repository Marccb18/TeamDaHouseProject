<?php
$jsonData = file_get_contents('./assets/json/data.json');
$jsonDataClases = file_get_contents('./assets/json/clases.json');
$tarjetas = json_decode($jsonData, true);
$tarjetasClases = json_decode($jsonDataClases, true);
$jsonDataHorarios = file_get_contents('./assets/json/horarios.json');
$horarios = json_decode($jsonDataHorarios, true);
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link href="https://unpkg.com/@phosphor-icons/web@2.0.3/dist/phosphor.css" rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/coaches.css">
    <link rel="stylesheet" href="assets/css/clases.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/tables.css">
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
                                    <li><a href="#Tarifas">Tarifas</a></li>
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
    <div class="slider-area2 dance">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>DaHouse of Dance</h2>
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
            <div class="right-content2 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                <!-- img -->
                <div class="right-img">
                    <img src="assets/img/gallery/about.png" alt="">
                </div>
            </div>
            <div class="left-content2">
                <!-- section tittle -->
                <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="front-text">
                        <h2 class="">
                        Sobre Nuestro Programa de Danza</h2>
                        <p>
                            Nuestro programa de danza está diseñado para ayudarte a desarrollar tu expresión artística 
                            y bienestar físico a través de movimientos dinámicos y rítmicos. Guiadas por instructores 
                            certificados, nuestras clases combinan técnica, ritmo y fluidez para mejorar tu coordinación, 
                            flexibilidad y resistencia. Adaptado a todos los niveles, el programa se enfoca en una enseñanza 
                            personalizada y en crear un ambiente inclusivo y motivador donde puedas disfrutar del arte de la danza.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--? Team -->      
    <section class="traning-categories black-bg" id="Clases">
        <div class="container-fluid">
        <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <h2>Cursos Disponibles</h2>
                    </div>
                </div>
            </div>
            <div class="cards-container-1">
                <?php foreach ($tarjetasClases as $tarjeta): if ($tarjeta['area'] === 'DANCE' || $tarjeta['area'] === 'GYMDANCE') {?>
                    <div class="card-1">
                        <!-- <div class="fondo-partido">
                             <div class="imagen" style="background-image: url('');"></div>
                        </div> -->
                        <h3 class="card-title-1"><?php echo $tarjeta['nombre']; ?></h3>
                        <p class="card-text-1"><?php echo $tarjeta['descripcion']; ?></p>
                    </div>
                <?php } endforeach; ?>
            </div>
        </div>
    </section>
    
    <section class="traning-categories black-bg" id="Profesores">
            <div class="container-fluid">
                <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-40">
                        <br>
                        <h2>Nuestros Profesores</h2>
                    </div>
                </div>
            </div>
                <div class="cards-container">
                    <?php foreach ($tarjetas as $tarjeta): if ($tarjeta['area'] === 'GYM' || $tarjeta['area'] === 'GYMDANCE') {?>
                        <div class="card">
                            <div class="fondo-partido">
                                <div class="imagen" style="background-image: url('<?php echo $tarjeta['imagen']; ?>');"></div>
                            </div>
                            <h3><?php echo $tarjeta['nombre']; ?></h3>
                            <h3 class="titulo"><?php echo $tarjeta['profesion']; ?></h3>
                            <p><?php echo $tarjeta['descripcion']; ?></p>
                            <div class="iconos">
                                <a href="<?php echo $tarjeta['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $tarjeta['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="<?php echo $tarjeta['pinterest']; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="<?php echo $tarjeta['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    <?php } endforeach; ?>
                </div>
            </div>
        </section>
    
    <!-- Services End -->
    
    <!-- Horario -->
    <section class="schedules custom-container">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12">
            <div class="section-tittle text-center mb-40">
                <br>
                <h2>Nuestro Horario</h2>
            </div>
        </div>
    </div>
    <div class="table-container">
        <table class="tarifa-table">
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
    <!-- Fin Horario -->


    <!-- Table Fees -->
    <section class="custom-container" id="Tarifas">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle text-center mb-55">
                    <h2>Tarifas Disponibles</h2>
                </div>
            </div>
        </div>
        <!-- Tabla Estilo -->
        <div class="table-container">
            <h3>Estilo</h3>
            <table class="tarifa-table">
                <tbody>
                    <tr>
                        <td>1h semana</td>
                        <td>40€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>1'5h semana</td>
                        <td>50€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>2h semana</td>
                        <td>60€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>Danza Africana</td>
                        <td>55€ al mes (sin matrícula)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tabla Fusiones -->
        <div class="table-container">
            <h3>Fusiones</h3>
            <table class="tarifa-table">
                <tbody>
                    <tr>
                        <td>1 Estilo 1h + 1 Estilo 1h</td>
                        <td>65€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>1 Estilo 1h + 1 Estilo 1'5h</td>
                        <td>70€ al mes (sin matrícula)</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tabla Bonos -->
        <div class="table-container">
            <h3>Bonos</h3>
            <table class="tarifa-table">
                <tbody>
                    <tr>
                        <td>Bono 5 horas (2 meses)</td>
                        <td>50€</td>
                    </tr>
                    <tr>
                        <td>Bono 10 horas (2 meses)</td>
                        <td>100€</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tabla Sueltas -->
        <div class="table-container">
            <h3>Sueltas</h3>
            <table class="tarifa-table">
                <tbody>
                    <tr>
                        <td>Suelta 1h</td>
                        <td>12€</td>
                    </tr>
                    <tr>
                        <td>Suelta 1'5h</td>
                        <td>17€</td>
                    </tr>
                    <tr>
                        <td>Suelta Videoclass</td>
                        <td>20€</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Tabla Yoga, Pilates, Animal Flow y Zumba -->
        <div class="table-container">
            <h3>Yoga, Pilates, Animal Flow, Zumba</h3>
            <table class="tarifa-table">
                <tbody>
                    <tr>
                        <td>1 vez x semana</td>
                        <td>40€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>2 veces x semana</td>
                        <td>65€ al mes (sin matrícula)</td>
                    </tr>
                    <tr>
                        <td>1 Clase Suelta</td>
                        <td>15€</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Información adicional (Descuentos) -->
        <div class="info-box">
            <h4>20% DESC. HERMANOS / PADRES</h4>
            <p>*DESCUENTO NO APLICABLE A LA TARIFA ILIMITADA*</p>
            <p>*DESCUENTO SE APLICA A LA TARIFA MAS BAJA*</p>
            <br>
            <p>3 MIEMBROS DE LA MISMA FAMILIA, DESCUENTO 10% TOTAL</p>
            <p>4 MIEMBROS DE LA MISMA FAMILIA 1 GRATIS</p>
        </div>
    </section>
    <!-- Table Fees End-->

    
    <!-- ? services-area -->
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="assets/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Location</h3>
                            <p>You’ll look at graphs and charts in Task One, how to approach </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="assets/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Phone</h3>
                            <p>(90) 277 278 2566</p>
                            <p>  (78) 267 256 2578</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="assets/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Email</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                <a href="./index.html"><img src="assets/img/logo/logo.png" alt=""></a>
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
                                                    <li><a href="./#">About</a></li>
                                                    <li><a href="./#">Courses</a></li>
                                                    <li><a href="./#">Pricing</a></li>
                                                    <li><a href="./#">Gallery</a></li>
                                                    <li><a href="./#">Contact</a></li>
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
                                <a href="./#"><i class="fab fa-facebook-f"></i></a>
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
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
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

==<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>
