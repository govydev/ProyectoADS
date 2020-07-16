<?php
include_once("../model/usuario.php");
include_once("formGestionUsuario.php");

class controlGestionUsuario{

    public function cargarTablas(){
        $objUsuario = new Usuario;
        $listUser = $objUsuario -> getAllUser();
        $objGestionUsuario = new formGestionUsuario;
        $objGestionUsuario -> formGestionUsuarioShow($listUser);

    } 

}

?>