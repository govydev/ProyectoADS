<?php

include_once("../shared/formMensaje.php");
include_once("controlGestionSH.php");
include_once("formRegistrarHerramienta.php");

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objGestion = new controlGestionSH;
            $objGestion -> iniciarBusqueda($_POST['txtBusqueda'], $_POST['ddTipo']); 
        }else{
            $objGestion = new controlGestionSH;
            $objGestion ->cargarTablasSH();
        }
        break;
    
    case 'Modificar':
        $idSeleccion = $_POST['txtId'];
        switch ($_POST['txtTipo']) {
            case 'suministro':
                $objGestion = new controlGestionSH;
                $objGestion -> iniciarModificarSuministro($idSeleccion);
                break;
            
            case 'herramienta':
                $objGestion = new controlGestionSH;
                $objGestion -> iniciarModificarHerramienta($idSeleccion);
                break;
        }
        break;

    case 'Nuevo':
        switch ($_POST['txtTipo']) {
            case 'suministro':
                $objGestion = new controlGestionSH;
                $objGestion -> iniciarNuevoSuministro();
                break;
                
            case 'herramienta':
                $objRegistrar = new formRegistrarHerramienta;
                $objRegistrar -> formRegistrarHerramientaShow();
                break;
        }
        break;

    case 'Elementos Agotado':
        $objGestion = new controlGestionSH;
        $objGestion -> iniciarSHAgotado();
        break;
    
    case 'Eliminar':
        $idSeleccion = $_POST['txtId'];
        switch ($_POST['txtTipo']) {
            case 'suministro':
                $objGestion = new controlGestionSH;
                $objGestion -> iniciarEliminarSuministro($idSeleccion);
                break;
            
            case 'herramienta':
                $objGestion = new controlGestionSH;
                $objGestion -> iniciarEliminarHerramienta($idSeleccion);
                break;
        }
        break;

}

?>