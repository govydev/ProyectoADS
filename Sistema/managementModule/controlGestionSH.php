<?php

include_once("../model/herramienta.php");
include_once("../model/suministro.php");
include_once("../model/unidades.php");
include_once("../shared/formMensaje.php");
include_once("formGestionSH.php");
include_once("formModificarHerramienta.php");
include_once("formModificarSuministro.php");
include_once("formRegistrarSuministro.php");
include_once("formAgotado.php");

class controlGestionSH{

    public function cargarTablasSH(){
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        $objGestion = new formGestionSH;
        $objGestion -> formGestionSHShow($objHerramienta->getAllHerramienta(), $objSuministro->getAllSuministro());
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
            $objMensaje -> formMensajeShow("LOS DATOS NO REGISTRADOS","../managementModule/indexGestionSH.php");
        }else{
            $objGestion = new formGestionSH;
            $objGestion -> formGestionSHShow($herramienta, $suministro);
        }
    }

    public function iniciarModificarSuministro($id){
        $objSuministro =  new suministro;
        $objUnidad = new unidades;
        $objModificar = new formModificarSuministro;
        $suministro = $objSuministro -> getSuministroById($id);
        $unidad = $objUnidad -> getAllUnidades();
        $objModificar -> formModificarSuministroShow($suministro, $unidad);
    }

    public function iniciarModificarHerramienta($id){
        $objHerramienta =  new herramienta;
        $objModificar = new formModificarHerramienta;
        $herramienta = $objHerramienta->getHerramientaById($id);
        $objModificar -> formModificarHerramientaShow($herramienta);

    }

    public function enviarHerramientaEditada($herramienta){
        $objHerramienta =  new herramienta;
        $objHerramienta -> actualizarHerramienta($herramienta);
        header('Location: indexGestionSH.php');
    }

    public function enviarSuministroEditada($suministro){
        $objSuministro =  new suministro;
        $objSuministro -> actualizarSuministro($suministro);
        header('Location: indexGestionSH.php');
    }

    public function iniciarNuevoSuministro(){
        $objUnidad = new unidades;
        $unidades = $objUnidad -> getAllUnidades();
        $objRegistrar = new formRegistrarSuministro;
        $objRegistrar -> formRegistrarSuministroShow($unidades);
    }

    public function enviarNuevoSuministro($suministro){
        $objSuministro =  new suministro;
        $objSuministro -> crearSuministro($suministro);
        header('Location: indexGestionSH.php');
    }

    public function enviarNuevaHerramienta($herramienta){
        $objHerramienta =  new herramienta;
        $objHerramienta -> crearHerramienta($herramienta);
        header('Location: indexGestionSH.php');
    }

    public function iniciarSHAgotado(){
        $objHerramienta =  new herramienta;
        $objSuministro =  new suministro;
        $objAgotado = new formAgotado;
        $herramientas = $objHerramienta -> getHerramientaAgotada();
        $suministros = $objSuministro -> getSuministroAgotado();
        $objAgotado -> formAgotadoShow($herramientas, $suministros);
        
    }

    public function iniciarEliminarSuministro($idSuministro){
        $objSuministro =  new suministro;
        $objSuministro -> eliminarSuministro($idSuministro);
        header('Location: indexGestionSH.php');
    }

    public function iniciarEliminarHerramienta($idHerramienta){
        $objHerramienta =  new herramienta;
        $objHerramienta -> eliminarHerramienta($idHerramienta);
        header('Location: indexGestionSH.php');
    }

}

?>