<?php
include_once("../model/usuario.php");
include_once("../model/detalleUsuario.php");
include_once("../model/roles.php");
include_once("../shared/formMensaje.php");
include_once("formGestionUsuario.php");
include_once("formNuevoUsuario.php");
include_once("formModificarUsuario.php");

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

    public function iniciarBusquedaUsuario($usuario, $campo){
        $objUsuario = new Usuario;
        $listUser = $objUsuario -> getUser($usuario, $campo);
        if (count($listUser)>0) {
            $objGestionUsuario = new formGestionUsuario;
            $objGestionUsuario -> formGestionUsuarioShow($listUser);
        }else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("LOS DATOS SOLICITADOS NO EXISTEN","../managementModule/indexGestionUsuario.php");
        }
    }

    public function iniciarModificarUsuario($usuario){
        $objRoles = new detalleUsuario;
        $objUsuario = new Usuario;
        $objModificarUsuario =  new  formModificarUsuario;
        $listaRol = $objRoles -> getAllRolesDetails($usuario);
        $user = $objUsuario -> getUser($usuario,"login");
        $objModificarUsuario ->  formModificarUsuarioShow($user,$listaRol);
    }

    public function enviarUsuarioRoles($user, $roles){
        $objUsuario = new usuario;
        $respuesta = $objUsuario -> crearUsuario($user);
        if($respuesta == 1){
            $objRoles = new detalleUsuario;
            $objRoles -> crearDetalleUsuario($roles, $user["login"]);
        }else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("EL USUARIO YA EXISTE","../managementModule/indexGestionUsuario.php");
        }
        if(!isset($objMensaje)){
            header('Location: indexGestionUsuario.php');
        }
    }

    public function actualizarUsuarioRoles($user, $roles){
        $objUsuario = new usuario;
        $respuesta = $objUsuario -> actualizarUsuario($user);
        if($respuesta == 1){
            $objRoles = new detalleUsuario;
            $objRoles -> actualizarDetalleUsuario($roles, $user["login"]);
        }else {
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("EL USUARIO YA EXISTE","../managementModule/indexGestionUsuario.php");
        }
        if(!isset($objMensaje)){
            header('Location: indexGestionUsuario.php');
        }
    }

}

?>