<?php

$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];

if(isset($_POST["btnLogin"])){
    if(strlen($usuario) >= 4 && strlen($password) >= 4){
        include_once("controlAutenticacion.php");
        $objAutenticacion = new controlAutenticacion;
        $objAutenticacion -> validarUsuario($usuario, $password);
    }
    else{
        include_once("../shared/formMensaje.php");
        $objMensaje = new formMensaje;
        $objMensaje -> formMensajeShow("ERROR AL INGRESAR EL USUARIO Y CONTRASEÑA","../index.php");
    }
}
else{
    include_once("../shared/formMensaje.php");
    $objMensaje = new formMensaje;
    $objMensaje -> formMensajeShow("ACCESO DENEGADO","../index.php");
}

?>