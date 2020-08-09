<?
include_once("controlMenuDespachador.php");
include_once("formListaSolicitud.php");
include_once("formDetalleSolicitud.php");
include_once("../model/solicitud.php");
include_once("../model/detalleSuministro.php");
include_once("../model/detalleHerramienta.php");

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