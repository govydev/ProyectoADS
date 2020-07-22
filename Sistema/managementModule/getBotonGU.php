<?php
include_once("controlGestionUsuario.php");
include_once("../shared/formMensaje.php");
$objControl = new controlGestionUsuario;
$objMensaje = new formMensaje;

switch($_POST['btnAccion']){

    case "Nuevo":
        $objControl -> iniciarNuevosUsuario();
        break;

    case "Modificar":
        //$objControl -> 
        break;

    case "Buscar":
        if(trim($_POST['txtBusqueda'])){
            $usuario = $_POST['txtBusqueda'];
            $objControl -> iniciarBusquedaUsuario($usuario);
        }else{
            $objMensaje -> formMensajeShow("LOS DATOS ENVIADOS NO SON CORRECTOS, VUELVA A INTENTAR","../managementModule/indexGestionUsuario.php");
        }
        //$objControl -> 
        break;

}

?>