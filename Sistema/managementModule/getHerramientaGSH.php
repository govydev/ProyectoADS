<?php
include_once("controlGestionSH.php");
include_once("../shared/formMensaje.php");

$herramienta = array(
    'id' => $_POST['txtId'],
    'nombre' => trim($_POST['txtNombre']),
    'cantidad' => $_POST['nbCantidad'],
    'detalle' => trim($_POST['txtDetalle'])
);

if(strlen($_POST['txtNombre']) < 4 || strlen($_POST['txtDetalle']) < 4 || $_POST['nbCantidad'] < 0){
    $objMensaje = new formMensaje;
    $objMensaje -> formMensajeShow("LA LONGITUD DE LOS DATOS DEBE SER POR LO MENOS 4","../managementModule/indexGestionSH.php");
}else{
    $objGestion = new controlGestionSH;
    switch ($_POST['btnAccion']) {
        case 'Editar':
            $objGestion -> enviarHerramientaEditada($herramienta);
            break;
        
        case 'Registrar':
            $objGestion -> enviarNuevaHerramienta($herramienta);
            break;
        
    }
}

?>