<?php
include_once("../model/usuario.php");
include_once("../model/detalleUsuario.php");
include_once("../shared/formMensaje.php");
include_once("formMenuPrincipal.php");

class controlAutenticacion{

    public function validarUsuario($usuario, $password){
        $objUsuario = new usuario;
        $respuesta = $objUsuario -> verificarUsuario($usuario, $password);
        if($respuesta){
            $objRoles = new detalleUsuario;
            $listRoles = $objRoles -> obtenerRoles($usuario);
            $objPrincipal = new formMenuPrincipal;
            $objPrincipal -> formMenuPrincipalShow($listRoles);
        }
        else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("EL USUARIO INGRESADO NO SE ENCUENTRA REGISTRADO O ESTA DESHABILITADO","../index.php");
        }
    }

}

?>