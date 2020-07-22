<?php
include_once("../model/usuario.php");
include_once("../model/roles.php");
include_once("formGestionUsuario.php");
include_once("formNuevoUsuario.php");

class controlGestionUsuario{

    public function cargarTablas(){
        $objUsuario = new Usuario;
        $listUser = $objUsuario -> getAllUser();
        $objGestionUsuario = new formGestionUsuario;
        $objGestionUsuario -> formGestionUsuarioShow($listUser);

    } 

    public function iniciarNuevosUsuario(){
        $objRoles = new roles;
        $listaRol = $objRoles -> getAllRoles();
        $objNuevoUsuario =  new  formNuevoUsuario;
        $objNuevoUsuario ->  formNuevoUsuarioShow($listaRol);
        
    }

}

?>