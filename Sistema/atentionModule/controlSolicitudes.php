<?php

include_once("../model/herramienta.php");
include_once("../model/suministro.php");
include_once("formGenerarSolicitud.php");
include_once("../shared/formMensaje.php");

class controlSolicitudes{

    public function cargarSH(){
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        $objGestion = new formGenerarSolicitud;
        $objGestion -> formGenerarSolicitudShow($objHerramienta->getAllHerramienta(), $objSuministro->getAllSuministro());
    }

    public function iniciarBusqueda($busqueda, $tipo){
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        switch ($tipo) {
            case 'herramienta':
                $herramienta = $objHerramienta->getHerramienta($busqueda);
                $suministro = $objSuministro->getAllSuministro();
                break;
            
            case 'suministro':
                $herramienta = $objHerramienta->getAllHerramienta();
                $suministro = $objSuministro->getSuministro($busqueda);
                break;
        }
        if(count($herramienta)<1 || count($suministro)<1){
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("LOS DATOS NO REGISTRADOS","../atentionModule/indexEmitirSolicitud.php");
        }else{
            $objGestion = new formGenerarSolicitud;
            $objGestion -> formGenerarSolicitudShow($herramienta, $suministro);
        }
    }

    public function iniciarSolicitud(){
        $objEmitirS = new forEmitirSolicitud;
        $objEmitirS -> forEmitirSolicitudShow();
    }
}

?>