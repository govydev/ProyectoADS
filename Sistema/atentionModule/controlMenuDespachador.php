<?php

include_once("formRegistro.php");
include_once("formListaSolicitud.php");
include_once("../model/solicitud.php");

class controlMenuDespachador{

    public function iniciarSolicitudes(){
        $objForm = new formListaSolicitud;
        $objGestion = new solicitud;
        $objForm -> formListaSolicitudShow($objGestion -> obtenerSolicitudTodo());
    }

    public function iniciarRegistroSalida(){
        $objForm = new formRegistro;
        $objGestion = new solicitud;
        $objForm -> formRegistroShow($objGestion -> obtenerRegistroSalidaTodo());
    }

}

?>