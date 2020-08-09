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
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("LOS DATOS NO DEBEN SER NULOS","../atentionModule/indexEmitirSolicitud.php");
        }
        break;

    case 'Crear Solicitud':
        $objSolicitud = new controlSolicitudES;
        $i = 0;
        foreach (json_decode($_POST["listSuministro"]) as $value) {
            $arrayS[$i] = $value;
            $i++;
        }
        $i = 0;
        foreach (json_decode($_POST["listHerramienta"]) as $value) {
            $arrayH[$i] = $value;
            $i ++;
        }
        $objSolicitud  -> iniciarSolicitud($arrayH, $arrayS);
        break;
    
}

?>