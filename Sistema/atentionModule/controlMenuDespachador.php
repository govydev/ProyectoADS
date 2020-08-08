<?php

include_once("formRegistro.php");
include_once("formListaSolicitud.php");

class controlMenuDespachador{

    public function iniciarSolicitudes(){
        $objForm = new formListaSolicitud;
        $objForm -> formListaSolicitudShow();
    }

    public function iniciarRegistroSalida(){
        $objForm = new formRegistro;
        $objForm -> formRegistroShow();
    }

}

?>