<?php
/* 
Fecha: 13-05-2022
Archivo: servicios.php
Descripción: contiene la pagina menu de rutas y paradas
*/

session_start();
include('funciones.php');
$connection = conectar_bdd();
if (array_key_exists('autenticacion', $_SESSION)) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Servicios - Pancho Bus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-loader"></div>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="site-navbar mt-4">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-8 col-md-8 col-lg-4">
                        <h1 class="mb-0"><a href="inicio.html" class="text-white h2 mb-0"><strong>Pancho Bus<span class="text-danger">.</span></strong></a></h1>
                    </div>
                    <div class="col-4 col-md-4 col-lg-8">
                        <nav class="site-navigation text-right text-md-right" role="navigation">

                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="Index.php">Inicio</a></li>
                                <li><a href="panchoBus.php">Pancho Bus</a></li>
                                <li class="active">
                                <li>
                                    <a href="servicios.php">Servicios</a>
                                </li>
                                </li>
                                <li><a href="contact.php">Contactos</a></li>
                                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url(images/rutas.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2">Rutas</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row mb-5">

                <?php

                $query = "SELECT * from rutas";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="property-details.php?id_ruta=<?php echo $row['id_ruta'] ?>" class="property-thumbnail">
                            </a>
                            <div class="p-4 property-body">
                                <h2 class="property-title"><a href="property-details.php?id_ruta=<?php echo $row['id_ruta'] ?>"><?php echo $row['numero_ruta'] ?></a></h2>
                                <p class="property-price text-primary mb-1 d-block text-success"><?php echo $row['descripcion'] ?> </p>
                                <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> <?php echo $row['sector'] ?> </span>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Horarios</span>
                                        <span class="property-specs-number"> <?php echo $row['numero_horarios'] ?> </span>
                                    </li>
                                    <li>
                                        <span class="property-specs">Paradas</span>
                                        <span class="property-specs-number"> <?php echo $row['numero_paradas'] ?> </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <!-- <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 1</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> Valle de Cumbayá </span>
                            <p class="property-price text-primary mb-1 d-block text-success">Lumbisí - La Primavera - HDLV</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs"></span>
                                    <span class="property-specs-number">10:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">13:00</span>

                                </li>
                                <li>
                                    <span class="property-specs"></span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 2A</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> Quito Norte </span>
                            <p class="property-price text-primary mb-1 d-block text-success">Urb. El Condado - USFQ</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 2B</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> Quito Noreste </span>
                            <p class="property-price text-primary mb-1 d-block text-success">Urb. 23 de julio - USFQ</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 3B</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> El Valle de los Chillos </span>
                            <p class="property-price text-primary mb-1 d-block text-success">Conocoto - USFQ</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 4</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> Quito Norte </span>
                            <p class="property-price text-primary mb-1 d-block text-success">Carcelén - USFQ</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="property-entry h-100">
                        <a href="property-details.html" class="property-thumbnail">
                        </a>
                        <div class="p-4 property-body">
                            <h2 class="property-title"><a href="property-details.html">Ruta 5</a></h2>
                            <span class="font-weight-bold property-location d-block mb-1"><span class="property-icon icon-room"></span> Quito sUR </span>
                            <p class="property-price text-primary mb-1 d-block text-success">La Atahualpa - USFQ</p>
                            <p class="font-weight-bold mb-0">Horarios</p>
                            <ul class="property-specs-wrap mb-3 mb-lg-0">
                                <li>
                                    <span class="property-specs">Entrada</span>
                                    <span class="property-specs-number">07:00</span>
                                </li>
                                <li>
                                    <span class="property-specs">Salida</span>
                                    <span class="property-specs-number">17:30</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row pt-2 mt-2 text-center">
                <div class="col-md-12">
                    <p>USFQ | Pancho Bus </p>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>

<?php
    } else { //si no esta autenticado, regresar al login
        header('Location: LoginSignUp.php');
        exit;
    }
?>