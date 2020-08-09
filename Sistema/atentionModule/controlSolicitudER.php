<?
include_once("controlMenuDespachador.php");
include_once("formListaSolicitud.php");
include_once("formDetalleSolicitud.php");
include_once("../model/solicitud.php");
include_once("../model/detalleSuministro.php");
include_once("../model/detalleHerramienta.php");
include_once("../shared/formMensaje.php");

class controlSolicitudER{
    public function iniciarBusquedaSolicitud($busqueda){
        $objSolicitud =  new solicitud;
        
        $solicitudes = $objSolicitud->getSolicitudByDNI($busqueda);
        
        if (count($solicitudes)>0) {
            $objForm = new formListaSolicitud;
            $objForm -> formListaSolicitudShow($solicitudes);
        }else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("NO EXISTE SOLICITUDES CON EL DNI INGRESADO","../atentionModule/indexEmitirRegistro.php");
        }
    }

    public function iniciarDetalleSolicitud($idSolicitud, $datos){
        $objDetalleSum = new detalleSuministro;
        $objDetalleHer = new detalleHerramienta;
        $objForm = new formDetalleSolicitud;
        $detalleSuministro = $objDetalleSum  -> getDetalleSumById($idSolicitud);
        $detalleHerramienta = $objDetalleHer  -> getDetalleHerById($idSolicitud);
        $objForm -> formDetalleSolicitudShow($detalleSuministro, $detalleHerramienta, $datos);
    }

}