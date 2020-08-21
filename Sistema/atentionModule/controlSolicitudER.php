<?
include_once("controlMenuDespachador.php");
include_once("formListaSolicitud.php");
include_once("formDetalleSolicitud.php");
include_once("formMenuDespachador.php");
include_once("../model/solicitud.php");
include_once("../model/suministro.php");
include_once("../model/herramienta.php");
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
        session_start();
		$_SESSION['arrayS'] = $detalleSuministro;
        $_SESSION['arrayH'] = $detalleHerramienta;
        $_SESSION['idSolicitud'] = $idSolicitud;
        $objForm -> formDetalleSolicitudShow($detalleSuministro, $detalleHerramienta, $datos);
    }

    public function atenderSolicitud($suministros, $herramientas, $idsolicitud){
        $objSuministro = new suministro;
        $objherramienta = new herramienta;
        $objsolicitud = new solicitud;
        $objForm = new formMenuDespachador;
        if($suministros){
            foreach($suministros as $fila){
                $idSuministro = $fila['idSuministro'];
                $cantidad = $fila['cantidad'];
                $objSuministro -> actualizarStockSuministros($idSuministro, $cantidad);
            }
        }
        if($herramientas){
            foreach($herramientas as $fil){
                $idHerramienta = $fil['idHerramienta'];
                $cantidadH = $fil['cantidad'];
                $objherramienta -> actualizarStockHerramienta($idHerramienta, $cantidadH);
            }
        }
        $objsolicitud -> actualizarEstadoSolicitud($idsolicitud);
        $objForm -> formMenuDespachadorShow();
    }

    public function rechazarSolicitud($motivo, $idSolicitud){
        $objSolicitud = new solicitud;
        $objForm = new formMenuDespachador;
        $objSolicitud -> actualizarMotivoSolicitud($motivo, $idSolicitud);
        $objForm -> formMenuDespachadorShow();
    }

}