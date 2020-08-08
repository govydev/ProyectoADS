<?
include_once("controlMenuDespachador.php");
include_once("formRegistro.php");
include_once("formDetalleRegistro.php");
include_once("../model/solicitud.php");
include_once("../model/detalleSuministro.php");
include_once("../model/detalleHerramienta.php");

class controlRegistroDeSalida{
    public function iniciarBusquedaRegistro($busqueda){
        $objRegistro =  new solicitud;
        $objForm = new formRegistro;
        $registros = $objRegistro->getRegistroByDNI($busqueda);
        $objForm -> formRegistroShow($registros);
    }

    public function iniciarDetalleSolicitud($idSolicitud, $datos){
        $objDetalleSum = new detalleSuministro;
        $objDetalleHer = new detalleHerramienta;
        $objForm = new formDetalleRegistro;
        $detalleSuministro = $objDetalleSum  -> getDetalleSumById($idSolicitud);
        $detalleHerramienta = $objDetalleHer  -> getDetalleHerById($idSolicitud);
        $objForm -> formDetalleRegistroShow($detalleSuministro, $detalleHerramienta, $datos);
    }

}