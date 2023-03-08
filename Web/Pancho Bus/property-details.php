<?php
/* 
Fecha: 13-05-2022
Archivo: property-details.php
Descripción: contiene la pagina de ruta y paradas especificas
*/

session_start();
include('funciones.php');
$connection = conectar_bdd();
$id_ruta = $_GET['id_ruta'];
$query = "SELECT * FROM rutas WHERE id_ruta = $id_ruta";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_object($result);

$lista_rutas_paradas = consultar_rutas_paradas($connection, $id_ruta);
$array_maestro = array();
$lista_paradas = consultar_paradas($connection);
if (array_key_exists('autenticacion', $_SESSION)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title> Detalles de <?php echo $row->numero_ruta ?></title>
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
                                    <li class="active">
                                        <a href="Index.php">Inicio</a>
                                    </li>
                                    <li>
                                        <a href="panchoBus.php">Pancho Bus</a>
                                    </li>
                                    <li>
                                        <a href="servicios.php">Servicios</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contactos</a>
                                    </li>
                                    <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo $row->url_imagen; ?>);" data-aos="fade" data-stellar-background-ratio="0.25">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-10">
                        <h1 class="mb-2"> <?php echo $row->numero_ruta; ?> </h1>
                        <p class="mb-5"><strong class="h2 text-success font-weight-bold"> <?php echo $row->sector; ?> </strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section site-section-sm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-white property-body border-bottom border-left border-right">
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <strong class="text-success h1 mb-3"> <?php echo $row->descripcion; ?> </strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Número paradas</span>
                                    <strong class="d-block"> <?php echo $row->numero_paradas; ?> </strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text"></span>
                                    <strong class="d-block"></strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                    <span class="d-inline-block text-black mb-0 caption-text">Número horarios </span>
                                    <strong class="d-block"> <?php echo $row->numero_horarios; ?> </strong>
                                </div>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <b> Paradas <b>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $contador = 0;
                                                    $numero_maximo = $row->numero_paradas;

                                                    $query = "SELECT * FROM rutas_paradas WHERE id_ruta = '$id_ruta'";
                                                    $result = mysqli_query($connection, $query);

                                                    while ($row2 = mysqli_fetch_assoc($result)) { ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $id_parada = $row2['id_paradas'];
                                                                $nombre_parada = obtener_nombre_parada($connection, $id_parada);
                                                                $parada = $nombre_parada[1];
                                                                $longitud[$contador] = $nombre_parada[3];
                                                                $latitud[$contador] = $nombre_parada[2];
                                                                $nombres[$contador] = $nombre_parada[1];
                                                                $array_maestro[$contador] = array("nombres" => $nombre_parada[1], "longitudes" => $nombre_parada[3], "latitudes" => $nombre_parada[2]);
                                                                echo $parada;
                                                                $contador++;
                                                                if ($contador >= $numero_maximo) {
                                                                    break 1;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </td>
                                        <?php

                                        $numero_columnas = $row->numero_horarios;

                                        for ($i = 0; $i < $numero_columnas; $i++) { ?>
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <td>
                                                                <?php echo "Horario #" . $i + 1; ?>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $contador = 0;
                                                        $numero_maximo = $row->numero_paradas;
                                                        $columna_actual = $i + 1;

                                                        $query = "SELECT * FROM rutas_paradas WHERE id_ruta = '$id_ruta' AND horario_numero = '$columna_actual'";
                                                        $result = mysqli_query($connection, $query);

                                                        while ($row3 = mysqli_fetch_assoc($result)) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php
                                                                    $id_parada = $row3['hora'];
                                                                    echo $id_parada;
                                                                    $contador++;
                                                                    if ($contador >= $numero_maximo) {
                                                                        break 1;
                                                                    }
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        <?php
                                        } ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="site-section" style="height:100%; width: 100%;">
            <div class="container" style="height:100%; width: 100%;" >
                <div class="row" style="height:100%; width: 100%;" >
                    <div class="col-lg-12" style="height:100%; width: 100%;">
                        <div id="dvMap">Hola</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section site-section-sm bg-light">
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-12">
                                <h3 class="footer-heading mb-4">Sobre PanchoBus</h3>
                                <p>Es un servicio de transporte gratuito ofrecido por la USFQ. Lo único que se pide de los usuarios es puntualidad, cumplimiento de las normas de bioseguridad y respeto dentro de los buses. Gracias a todos los dragones!</p>
                            </div>
                        </div>

                    </div>

                </div>
            </footer>

        </div>

        <script type="text/javascript">
            var markers = <?php echo json_encode($array_maestro)  ?>

            console.log(markers);

            window.onload = function() {
                var mapOptions = {
                    center: new google.maps.LatLng(markers[0].latitudes, markers[0].longitudes),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };


                var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                var infoWindow = new google.maps.InfoWindow();
                var lat_lng = new Array();
                var latlngbounds = new google.maps.LatLngBounds();

                for (i = 0; i < markers.length; i++) {
                    var data = markers[i];
                    var mylatlng = new google.maps.LatLng(data.latitudes, data.longitudes);
                    lat_lng.push(mylatlng);
                    var marker = new google.maps.Marker({
                        position: mylatlng,
                        map: map,
                        title: data.nombres,
                        label: (i + 1).toString()
                    });

                    //console.log(i);

                    latlngbounds.extend(marker.position);
                    (function(marker, date) {
                        google.maps.event.addListener(marker, "click", function(e) {
                            infoWindow.setContent(data.nombres);
                            infoWindow.open(map, marker);
                        });
                    })(marker, data);
                }
                map.setCenter(latlngbounds.getCenter());
                map.fitBounds(latlngbounds);

                var path = new google.maps.MVCArray();

                var service = new google.maps.DirectionsService();
                var directionsDisplay = new google.maps.DirectionsRenderer;

                var poly = new google.maps.Polyline({
                    map: map,
                    strokeColor: '#4986E7'
                });

                var waypts = [];

                for (var i = 0; i < markers.length; i++) {
                    var datos = markers[i]
                    var punto = {
                        location: {
                            lat: parseFloat(datos.latitudes),
                            lng: parseFloat(datos.longitudes)
                        },
                        stopover: true
                    };
                    waypts.push(punto);
                }

                poly.setPath(path);
                service.route({
                    origin: {
                        lat: waypts[0].location.lat,
                        lng: waypts[0].location.lng
                    }, //db waypoint start
                    destination: {
                        lat: waypts[0].location.lat,
                        lng: waypts[0].location.lng
                    }, //db waypoint end
                    waypoints: waypts,
                    travelMode: google.maps.TravelMode.DRIVING
                }, function(response, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        for (var i = 0, len = response.routes[0].overview_path.length; i < len; i++) {
                            path.push(response.routes[0].overview_path[i]);
                        }
                    } else {
                        window.alert('Ha fallat la comunicació amb el mapa a causa de: ' + status);
                    }
                });
            }
        </script>

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

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVGLeFfSHHNLFvZHahBQ7T954CzQuKwHI"></script>


    </body>

    </html>
<?php
} else { //si no esta autenticado, regresar al login
    header('Location: LoginSignUp.php');
    exit;
}
?>