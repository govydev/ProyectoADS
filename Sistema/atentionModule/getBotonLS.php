<?php

include_once("controlSolicitudER.php");
include_once("formEmitirSolicitud.php");

$suministros = array();
$herramientas = array();
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
            'nombre' => $_POST['nombre'],
            'DNI' => $_POST['DNI']
        );
        $objControl = new controlSolicitudER;
        $objControl -> iniciarDetalleSolicitud($_POST['idSolicitud'], $solicitud);
        break;
    
    case 'Aceptar Solicitud':
        session_start();
        $suministros = $_SESSION['arrayS'];
        $herramientas = $_SESSION['arrayH'];
        if($suministros != null){
            $idSolicitud = $suministros['idSolicitud'];
        }else if($herramientas != null){
            $idSolicitud = $herramientas['idSolicitud'];
        }
        $objSolicitud = new controlSolicitudER;
        $objSolicitud -> atenderSolicitud($suministros, $herramientas, $idSolicitud);
        break;
            
}

?>