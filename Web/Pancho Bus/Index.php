<?php
/*
Fecha: 13-05-2022
Archivo: Index.php
Descripción: contiene la pagina principal 
*/
    session_start();
    include('funciones.php');
    $connection = conectar_bdd();
   

    if (array_key_exists('autenticacion', $_SESSION)) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pancho Bus &mdash; Colorlib Website Template</title>
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
              <h1 class="mb-0"><a href="Index.php" class="text-white h2 mb-0"><strong>Pancho Bus<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="Index.php">Inicio</a></li>
                  <li><a href="panchoBus.php">Pancho Bus</a></li>
                  <li>
                    <a href="servicios.php">Servicios</a>
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
      <div class="site-blocks-cover overlay" style="background-image: url(images/Principal2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div>  
      <div class="site-blocks-cover overlay" style="background-image: url(images/Principal3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div> 
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Bienvenidos</h2><br></br>
            </div>
            <h3><FONT SIZE=5>La Universidad San Francisco de Quito tiene una comunidad de más de 10,000 personas que se movilizan diariamente desde y hacia la USFQ. En esta página podrás encontrar recursos e información para facilitar tu movilidad.
            </FONT></h3>
          </div>
        </div>
        <div class="col">
          <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="200">
            <a><img src="images/escudo.png" alt="Image" class="img-fluid"></a>
            
             
        </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row pt-5 mt-5 text-center">
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
