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

    public function iniciarSolicitud($herramienta, $suministro){
        $objEmitirS = new formEmitirSolicitud;
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        $listHerramienta = array();
        $listSuministro = array();
        for ($i=0; $i < count($herramienta); $i++) { 
            //$listHerramienta = $objHerramienta -> getHerramientaById($herramienta[$i][0]); $herramienta[$i][1]);
        }
        for ($i=0; $i < count($suministro); $i++) { 

            //  $listSuministro = $objSuministro -> getSuministroById($suministro[$i][0]); $suministro[$i][1]);
        }
        print_r($objSuministro -> getSuministroById($suministro[0][0]));
        $objEmitirS -> formEmitirSolicitudShow($listHerramienta, $listSuministro);
    }
}

?>