<?php

include_once("controlMenuDespachador.php");

$objMenu = new controlMenuDespachador;

switch ($_POST["btnOpcion"]) {
    case 'Visualizar solicitud':
        $objMenu -> iniciarSolicitudes();
        break;
    
    case 'Registros de salida':
        $objMenu -> iniciarRegistroSalida();
        break;
}

?>