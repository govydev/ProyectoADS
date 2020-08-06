<?php
include_once("controlAutenticacion.php");
include_once("../shared/formMensaje.php");
    
$objAutenticacion = new controlAutenticacion;
$objMensaje = new formMensaje;

if(isset($_POST['btnLogin'])){
    session_start();
    $usuario = trim($_POST['txtUsuario']);
    $password = trim($_POST['txtPassword']);
    $_SESSION['usuario']=$usuario;
    $_SESSION['clave']=$password;
    if(strlen($usuario) >= 4 && strlen($password) >= 4){ 
        $objAutenticacion -> validarUsuario($usuario, $password);
    }
    else{
        $objMensaje -> formMensajeShow("LOS DATOS ENVIADOS NO SON CORRECTOS","../index.php");
    }
}
else{
    $objMensaje -> formMensajeShow("ACCESO DENEGADO","../index.php");
}

?>