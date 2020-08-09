<?php

include_once("../shared/formMensaje.php");
include_once("controlSolicitudES.php");
include_once("formEmitirSolicitud.php");

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objSolicitud = new controlSolicitudES;
            $objSolicitud  -> iniciarBusqueda($_POST['txtBusqueda'], $_POST['ddTipo']); 
        }else{
            $objSolicitud = new controlSolicitudes;
            $objSolicitud -> cargarSH();
        }
        break;

    case 'Crear Solicitud':
        $objSolicitud = new controlSolicitudes;
        $arrayS = json_decode($_POST["listSuministro"]);
        $arrayH = json_decode($_POST["listHerramienta"]);
        $objSolicitud  -> iniciarSolicitud($arrayH, $arrayS);
        break;
    
}

?>