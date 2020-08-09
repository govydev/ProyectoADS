<?php

include_once("controlMenuDespachador.php");

$objMenu = new controlMenuDespachador;

switch ($_POST["btnOpcion"]) {
    case 'Visualizar solicitudes':
        $objMenu -> iniciarSolicitudes();
        break;
    
    case 'Solicitudes Procesadas':
        $objMenu -> iniciarRegistroSalida();
        break;
}

?>