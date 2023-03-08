<?php
/*
Fecha: 13-05-2022
Archivo: panchobus.php
Descripción: contiene la pagina de informacion del pancho bus
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
                  <li >
                    <a href="Index.php">Inicio</a></li>
                    <li class="active"><a href="panchoBus.php">Pancho Bus</a></li>
                   
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
      <div class="site-blocks-cover overlay" style="background-image: url(images/info.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div>   
      <div class="site-blocks-cover overlay" style="background-image: url(images/Iinicio1.png);" data-aos="fade" data-stellar-background-ratio="0.5"></div>
    </div>
    
          
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Con la finalidad de fomentar la disminución del uso de vehículos dentro de nuestra comunidad, la USFQ ofrece diversas rutas de transporte gratuitas y exclusivas.</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="images/LogoPB.png" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>Nosotros</h2>
            </div>
            <p class="lead">Servicio de transporte seguro, cómodo exclusivamente para estudiantes
            <p><a href="https://www.usfq.edu.ec/es/el-retorno-dragones" class="btn btn-outline-primary rounded-0 py-2 px-5">Más Información</a></p>
          </div>

        </div>

        <br></br>
        <div class="site-section-title">
          <h2>Normas Generales</h2><br></br>
        </div>
        <ul>
          <li><p class="lead">Sí estás vacunado debes llevar tu carnet de vacunación y carnet USFQ. Sí NO estás vacunado debes llevar tu TAG de
            ingreso y carnet USFQ.</li>
          
            <li><p class="lead">Recuerda usar la mascarilla en todo momento y
                llevar tu alcohol/gel a la mano</li>
          
                <li><p class="lead">Llega 10 minutos antes de la hora marcada. </li>
        
                  <li> <p class="lead">Respeta el aforo establecido del Pancho Bus.
                *El aforo cambia dependiendo de la unidad y la demanda de la parada.</li>
          
                <li><p class="lead">Cumple con el distanciamiento social dentro del Pancho Bus.</li>
              
                <li> <p class="lead">Descarga la aplicación OnTrack para tener alertas de la ruta que necesitas.</li>

                </ul>
            </div>
    </div>

    <div class="site-section">
    <div class="container">
      
      <div class="row">
          <div class="col-md-7 col-lg-6 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="100">
            
              <img src="images/vista.png" alt="Image" class="img-fluid rounded mb-4">
           
          </div>

          <div class="col-md-7 col-lg-6 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
         
              <img src="images/time.jpg" alt="Image" class="img-fluid rounded mb-4">
           
          </div>
        </div>
    </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Preguntas Frecuentes</h2>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-10">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">¿Las rutas de Panchobus son las mismas todos los semestres?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>No, es posible que las rutas cambien cada semestre para mejorar el servicio.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">¿Con quien puedo contactarme para obtener más información sobre Panchobus?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Contáctate vía email con Jairo Carvajal (jcarvajal@usfq.edu.ec)</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">¿Cómo obtengo la aplicación OnTrack?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>La aplicación está disponible para IPhone y Android en la App Store y Google Play.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">¿Cómo creo mi cuenta en la aplicación?<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Descarga la aplicación en tu dispositivo móvil.
                    Registra tus datos con Jairo Carvajal (Oficina PF104 junto a los cuadrángulos).
                    Recibirás un correo de OnTrack con un link para crear tu cuenta.
                    Utiliza tu cuenta institucional y clave de la misma (@estud.usfq.edu.ec).</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">¿Qué servicios ofrece la aplicación? <span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Puedes crear alertas para saber cuándo Pancho Bus está cerca, monitorear el recorrido en tiempo real y recibir notificaciones del administrador.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

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

  <script src="js/main.js"></script>
    
  </body>
</html>

        <?php
    } else { //si no esta autenticado, regresar al login
        header('Location: LoginSignUp.php');
        exit;
    }
?>
