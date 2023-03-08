<?php
/*
Fecha: 13-05-2022
Archivo: funciones.php
Descripción: contiene las funciones que manipulan las tablas de la BD y la conexion con la BD
*/
//funciones de base de datos

function conectar_bdd()
{
    $host = 'localhost';
    $dbname = 'proyectov3';
    $username = 'root';
    $password = '';
    $connection = mysqli_connect($host, $username, $password, $dbname);
    return $connection;
}


function crear_usuario($connection, $nombre, $email, $clave) {
	$hash = hash('sha1',$clave);
    $query = "INSERT INTO usuario (nombre, email , clave) VALUES (?, ?, ?)";
    $insert = mysqli_prepare($connection, $query);
	if ($insert) {
		//vincular insert con las variables
		mysqli_stmt_bind_param($insert, 'sss', $nombre, $email, $hash); 
		mysqli_stmt_execute($insert);
	}
	mysqli_stmt_close($insert);
}


function consultar_usuario($connection, $email, $clave) {
    $query = "SELECT * FROM usuario WHERE email = '$email' && clave = SHA1('$clave')";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


function consultar_rutas_paradas($connection, $id_ruta)
{
    $query = "SELECT * from rutas_paradas WHERE id_ruta = '$id_ruta'";
    $result = mysqli_query($connection, $query);
    return $result;
}

function consultar_paradas($connection)
{
    $query = "SELECT * FROM paradas";
    $result = mysqli_query($connection, $query);
    return $result;
}

function obtener_nombre_parada($connection, $id_parada)
{
    $query = "SELECT * from paradas WHERE id_paradas = '$id_parada'";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_row($result);
}

function tabla_conductores($connection, $id_ruta)
{
    $query = "SELECT * from conductores WHERE id_conductor = '$id_ruta'";
    $result = mysqli_query($connection, $query);
    return $result;
}

?>