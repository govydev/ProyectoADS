<?php

include_once("controlSolicitudER.php");
include_once("formEmitirSolicitud.php");

/*$suministros = array();
$herramientas = array();
$i=1;
while($_POST["idSuministro".$i]){
    array_push($suministros,array($_POST["idSuministro".$i],$_POST["cantidadSum".$i]));
    $i++;
}
$j=1;
while($_POST["idHerramienta".$j]){
    array_push($herramientas,array($_POST["idHerramienta".$j],$_POST["cantidadHer".$j]));
    $j++;
}*/

switch ($_POST['btnAccion']) {
    case 'Buscar':
        if((trim($_POST['txtBusqueda']))){
            $objSolicitud = new controlSolicitudER;
            $objSolicitud  -> iniciarBusquedaSolicitud($_POST['txtBusqueda']); 
        }else{
            $objSolicitud = new controlMenuDespachador;
            $objSolicitud  -> iniciarSolicitudes(); 
        }
        break;

    case 'Ver':
        $solicitud = array(
            'nombre' => $_POST['nombre'],
            'DNI' => $_POST['DNI']
        );
        $objControl = new controlSolicitudER;
        $objControl -> iniciarDetalleSolicitud($_POST['idSolicitud'], $solicitud);
    
    case 'Aceptar Solicitud':
        print($_POST['prueba']);
        $objSolicitud = new controlSolicitudER;
        $objSolicitud -> atenderSolicitud($suministros, $herramientas, $_POST["idSolicitud"]);
            
}

?>