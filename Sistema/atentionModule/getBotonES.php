<?php

include_once("../shared/formMensaje.php");
include_once("controlSolicitudes.php");
include_once("formEmitirSolicitud.php");

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objGestion = new controlSolicitudes;
            $objGestion -> iniciarBusqueda($_POST['txtBusqueda'], $_POST['ddTipo']); 
        }else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("LOS DATOS NO DEBEN SER NULOS","../atentionModule/indexEmitirSolicitud.php");
        }
        break;

    case 'Crear Solicitud':
        $objGestion = new controlSolicitudes;
        $objGestion -> iniciarSolicitud();
        break;
    
}

?>