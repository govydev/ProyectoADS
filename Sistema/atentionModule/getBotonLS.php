<?php

include_once("controlSolicitudER.php");
include_once("formEmitirSolicitud.php");

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objSolicitud = new controlSolicitudER;
            $objSolicitud  -> iniciarBusquedaSolicitud($_POST['txtBusqueda']); 
        }else{
            $objSolicitud = new controlMenuDespachador;
            $objSolicitud  -> iniciarSolicitudes(); 
        }
        break;

    case 'Ver':
        $solicitud = array(
            'nombre' => $_POST['txtNombre'],
            'DNI' => $_POST['nbCantidad']
        );
        $objControl = new controlSolicitudER;
        $objControl -> iniciarDetalleSolicitud($_POST['idsolicitud'], $solicitud);
    
}

?>