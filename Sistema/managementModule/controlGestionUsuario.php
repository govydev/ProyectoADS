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

    public function iniciarBusquedaUsuario($usuario){
        $objUsuario = new Usuario;
        $listUser = $objUsuario -> getUser($usuario);
        $objGestionUsuario = new formGestionUsuario;
        $objGestionUsuario -> formGestionUsuarioShow($listUser);
    }

    public function iniciarModificarUsuario($usuario){
        $objRoles = new roles;
        $objUsuario = new Usuario;
        $objModificarUsuario =  new  formModificarUsuario;
        $listaRol = $objRoles -> getAllRoles();
        $user = $objUsuario -> getUser($usuario);
        $objModificarUsuario ->  formModificarUsuarioShow($user,$roles);
    }

}

?>