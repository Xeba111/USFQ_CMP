<?php
/*
Fecha: 17-04-2022
Archivo: cerrar_sesion.php
Descripción:  volver al LoginSignUp
*/
//iniciar sesion
    session_start();
    if (array_key_exists('autenticacion', $_SESSION)) {//vaciar variables de sesion
        $_SESSION = array(); //destruir sesion
        session_destroy(); //eliminar cookie
        setcookie('nombre_usuario', '', time() - 1);
        header('Location: LoginSignUp.php');
    } 
?>