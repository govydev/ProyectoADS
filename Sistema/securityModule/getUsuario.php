<?php
include_once("controlAutenticacion.php");
include_once("../shared/formMensaje.php");
    
$objAutenticacion = new controlAutenticacion;
$objMensaje = new formMensaje;

if(isset($_POST['btnLogin'])){
    $usuario = trim($_POST['txtUsuario']);
    $password = trim($_POST['txtPassword']);
    if(strlen($usuario) >= 4 && strlen($password) >= 4){ 
        $objAutenticacion -> validarUsuario($usuario, $password);
    }
    else{
        $objMensaje -> formMensajeShow("ERROR AL INGRESAR EL USUARIO Y CONTRASEÑA","../index.php");
    }
}
else{
    $objMensaje -> formMensajeShow("ACCESO DENEGADO","../index.php");
}

?>