<?
include_once("controlMenuDespachador.php");
include_once("../model/solicitud.php");

class controlSolicitudER{
    public function iniciarBusquedaSolicitud($busqueda){
        $objSolicitud =  new solicitud;
        $objForm = new formListaSolicitud;
        $solicitudes = $objSolicitud->getSolicitudByDNI($busqueda);
        $objForm -> formListaSolicitudShow($solicitudes);
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