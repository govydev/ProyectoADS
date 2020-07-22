<?php
include_once("controlGestionUsuario.php");
$objControl = new controlGestionUsuario;

switch($_POST['btnAccion']){

    case "Nuevo":
        $objControl -> iniciarNuevosUsuario();
        break;

    case "Modificar":
        //$objControl -> 
        break;

}

?>