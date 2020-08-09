<?php

include_once("../model/herramienta.php");
include_once("../model/suministro.php");
include_once("../model/detalleHerramienta.php");
include_once("../model/detalleSuministro.php");
include_once("../model/solicitud.php");
include_once("formGenerarSolicitud.php");
include_once("formEmitirSolicitud.php");
include_once("../shared/formMensaje.php");

class controlSolicitudES{

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
            $objMensaje -> formMensajeShow("LOS DATOS NO ESTAN REGISTRADOS","../atentionModule/indexEmitirSolicitud.php");
        }else{
            $objGestion = new formGenerarSolicitud;
            $objGestion -> formGenerarSolicitudShow($herramienta, $suministro);
        }
    }

    public function iniciarSolicitud($herramienta, $suministro){
        $objEmitirS = new formEmitirSolicitud;
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        $i=0;
        if(count($herramienta)>0){
            foreach ($herramienta as $key => $value) {
                $list = $objHerramienta -> getHerramientaById($value[0])[0];
                array_unshift($list,$value[1]);
                $listHerramienta[$i] = $list;
                $i++;
            }
            $i = 0;
        }
        if(count($suministro)>0){
            foreach ($suministro as $key => $value) {
                $list = $objSuministro -> getSuministroById($value[0])[0];
                array_unshift($list,$value[1]);
                $listSuministro[$i] = $list;
                $i++;
            }
        }
        $objEmitirS -> formEmitirSolicitudShow($listHerramienta, $listSuministro);
    }

    public function emitirSolicitud($nombre, $dni, $suministros, $herramientas){
        $objSolicitud = new solicitud;
        $objSuministro = new detalleSuministro;
        $objHerramienta = new detalleHerramienta;
        $id = $objSolicitud -> crearSolicitud($nombre, $dni);
        if(count($suministros)>0){
            $objSuministro -> crearDetalleSolicitud($id, $suministros);
        }
        if(count($herramientas)>0){
            $objHerramienta -> crearDetalleHerramienta($id, $herramientas);
        }
        session_start();
        $_SESSION['suministros'] = null;
        $_SESSION['herramientas'] = null;
        self::cargarSH();
    }

}

?>