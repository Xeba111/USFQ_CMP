<?php
/* 
Fecha: 13-05-2022
Archivo: contact.php
Descripción: Contiene la pagina de contactos
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
                  <li><a href="Index.php">Inicio</a></li>
                  <li><a href="panchoBus.php">Pancho Bus</a></li>
                 
                  <li>
                    <a href="servicios.php">Servicios</a>
                  </li>
                  <li class="active" ></li><a href="contact.php">Contactos</a></li>  
                  <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url(images/contactos.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Contactos</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            <form action="#" class="p-5 bg-white border">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                <label for="text">*Este mensaje será dirigido a panchobus@usfq.edu.ec</label><br><br>
                  <label class="font-weight-bold" for="fullname">Nombre Completo</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Nombre Completo">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email Remitente</label>
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Asunto</label>
                  <input type="text" id="subject" class="form-control" placeholder="Asunto">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h6 text-black mb-3 text-uppercase">Información de Contacto Campus Cumbayá</h3>

              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">Av. Diego de Robles & Vía Interoceánica, Quito, Ecuador</p>

              <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">+593 2 297 1700</a></p>

              <p class="mb-0 font-weight-bold">Fax</p>
              <p class="mb-4"><a href="#">+593 2 289 0070</a></p>

              <p class="mb-0 font-weight-bold">P.O.BOX</p>
              <p class="mb-4"><a href="#">170901</a></p>

              <h3 class="h6 text-black mb-3 text-uppercase">Información de Contacto Guayaquil</h3>

              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">The Point Building, floor 33 office 33-10, Puerto Santa Ana, Guayaquil, Ecuador</p>

              <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">+593 4 388 3217</a></p>


            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Información de movilidad a tu alcance</h2>
           
          </div>
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
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
        <?php
    } else { //si no esta autenticado, regresar al login
        header('Location: LoginSignUp.php');
        exit;
    }
?>