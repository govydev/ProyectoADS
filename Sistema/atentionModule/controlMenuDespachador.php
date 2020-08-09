<?php

include_once("formRegistro.php");
include_once("formListaSolicitud.php");
include_once("../model/solicitud.php");

class controlMenuDespachador{

    public function iniciarSolicitudes(){
        $objForm = new formListaSolicitud;
        $objGestion = new solicitud;
        $solicitudes = $objGestion -> obtenerSolicitudTodo();
        $objForm -> formListaSolicitudShow($solicitudes);
    }

    public function iniciarRegistroSalida(){
        $objForm = new formRegistro;
        $objGestion = new solicitud;
        $registros = $objGestion -> obtenerRegistroSalidaTodo();
        $objForm -> formRegistroShow($registros);
    }

}

?>