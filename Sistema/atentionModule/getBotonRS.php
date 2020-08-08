<?php

include_once("controlRegistroDeSalida.php");
include_once("formEmitirSolicitud.php");

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objSolicitud = new controlRegistroDeSalida;
            $objSolicitud  -> iniciarBusquedaRegistro($_POST['txtBusqueda']); 
        }else{
            $objSolicitud = new controlMenuDespachador;
            $objSolicitud  -> iniciarRegistroSalida(); 
        }
        break;

    case 'Ver':
        $solicitud = array(
            'nombre' => $_POST['nombre'],
            'DNI' => $_POST['DNI']
        );
        $objControl = new controlRegistroDeSalida;
        $objControl -> iniciarDetalleSolicitud($_POST['idSolicitud'], $solicitud);
    
}

?>