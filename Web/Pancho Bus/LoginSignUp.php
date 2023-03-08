<?php
/*
Fecha: 17-04-2022
Archivo: LoginSignUp.php
Descripción: contiene la pagina para ingresar usuario y contrasena, autenticacion
*/
    session_start();
    //incluir funciones
    include('funciones.php');
    //variable de autenticación
    $autenticacion = FALSE;
	$connection = conectar_bdd();
// $lista = c_provincia($connection);
$nombre = "";
$email = "";
$clave = "";
$successMessage ="";

if(isset($_POST['registro'])){
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	$connection = conectar_bdd();
	crear_usuario($connection,$nombre,$email,$clave);
	
  }

    //verificar si existe variable de sesion para autenticacion
    if (array_key_exists('autenticacion', $_SESSION)) {
        $autenticacion = TRUE;
    } else {	

        if (isset($_POST['inicio'])) {
            //verificar inicio de sesion
            if (array_key_exists('email', $_POST)) {
                $email = $_POST['email'];
            }
            if (array_key_exists('clave', $_POST)) {
                $clave = $_POST['clave'];
            } 
            $connection = conectar_bdd();
            $reg = consultar_usuario($connection, $email, $clave);

            //autenticacion
            if (count($reg) > 0) {
                $autenticacion = TRUE;
                //guardar variable de sesion
                $_SESSION['autenticacion'] = TRUE;
                //guardar cookie con el nombre del usuario
                setcookie('nombre_usuario', $reg[0]['nombre'], time() + 600);
            }
        }
    }

    //redireccion al area privada
    if ($autenticacion) {
        if(isset($_SESSION['autenticacion'])) {
            header('Location: Index.php');
            exit;
        }
    } else {
    ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Log In / Sign Up - pure css - #12</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<a class="logo" target="_blank">
		<img src="https://i.postimg.cc/6qZwc3KQ/LogoPB.png" alt="">
	</a>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar Sesión </span><span>Registrate</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
								  <form class="form-vertical" action="LoginSignUp.php" method="POST">
									<div class="center-wrap">
										<div class="section text-center">
											<br></br>
											<h3 class="mb-0 pb-3">Iniciar Sesión</h3>
											<div class="form-group">
											
												<input type="email" name="email" class="form-style" placeholder="Ingrese email" id="logemail">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="clave" class="form-style" placeholder="Ingrese contraseña" id="logpass">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>

                                                <button name="inicio" type="submit" class="btn mt-4">Iniciar Sesión</button>
                                           
				      					</div>
			      					</div>
								  </form> 
			      				</div>
								<div class="card-back">
								  <form class="form-vertical" action="LoginSignUp.php" method="POST">
									<div class="center-wrap">
										<div class="section text-center">
											<br></br>
											
											<h3 class="mb-0 pb-3">Registrate</h3>
											
											<div class="form-group">
												<input type="text" name="nombre" class="form-style" placeholder="Ingrese nombre" id="logname">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Ingrese email" id="logemail">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="clave" class="form-style" placeholder="Ingrese contraseña" id="logpass">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
										
                                                <button name="registro" type="submit" class="btn mt-4">Registrarse</button>
                                            
				      					</div>
			      					</div>
								  </form>  
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
    <?php
    }
?>