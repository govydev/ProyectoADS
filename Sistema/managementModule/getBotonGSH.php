<?php

include_once("../shared/formMensaje.php");
include_once("controlGestionSH.php");

$objMensaje = new formMensaje;
$objGestion = new controlGestionSH;

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objGestion -> iniciarBusqueda($_POST['txtBusqueda'], $_POST['ddTipo']); 
        }else{
            $objMensaje -> formMensajeShow("LOS DATOS NO DEBEN SER NULOS","../managementModule/indexGestionSH.php");
        }
        break;
    
    case 'Modificar':
        $idSeleccion = $_POST['txtId'];
        switch ($_POST['txtTipo']) {
            case 'suministro':
                $objGestion -> iniciarModificarSuministro($idSeleccion);
                break;
            
            case 'herramienta':
                $objGestion -> iniciarModificarHerramienta($idSeleccion);
                break;
        }
        break;
    
    default:
        # code...
        break;
}

?>