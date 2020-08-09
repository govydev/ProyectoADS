<?
include_once("controlMenuDespachador.php");
include_once("formRegistro.php");
include_once("formDetalleRegistro.php");
include_once("../model/solicitud.php");
include_once("../model/detalleSuministro.php");
include_once("../model/detalleHerramienta.php");
include_once("../shared/formMensaje.php");

class controlRegistroDeSalida{
    public function iniciarBusquedaRegistro($busqueda){
        $objRegistro =  new solicitud;
        $registros = $objRegistro->getRegistroByDNI($busqueda);
        if (count($registros)>0) {
            $objForm = new formRegistro;
            $objForm -> formRegistroShow($registros);
        }else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("NO EXISTE REGISTROS CON EL DNI INGRESADO","../atentionModule/indexEmitirRegistro.php");
        }
    }

    public function iniciarDetalleRegistro($idSolicitud, $datos){
        $objDetalleSum = new detalleSuministro;
        $objDetalleHer = new detalleHerramienta;
        $objForm = new formDetalleRegistro;
        $detalleSuministro = $objDetalleSum  -> getDetalleSumById($idSolicitud);
        $detalleHerramienta = $objDetalleHer  -> getDetalleHerById($idSolicitud);
        $objForm -> formDetalleRegistroShow($detalleSuministro, $detalleHerramienta, $datos);
    }

}