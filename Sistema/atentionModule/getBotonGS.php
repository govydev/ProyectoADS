<?php
include_once("controlSolicitudES.php");

$i=1;
$suministros = array();
$herramientas = array();
while($_POST["cantS".$i]){
    array_push($suministros,array($_POST["idS".$i],$_POST["cantS".$i]));
    $i++;
}
$j=1;
while($_POST["cantH".$j]){
    array_push($herramientas,array($_POST["idH".$j],$_POST["cantH".$j]));
    $j++;
 }

session_start();
$objSolicitud = new controlSolicitudES;
switch ($_POST['btnAccion']) {
    case 'Agregar':
        $_SESSION['suministros'] = json_encode($suministros);
        $_SESSION['herramientas'] = json_encode($herramientas);
        $objSolicitud -> cargarSH();
        break;
    
    case 'Generar Solicitud':
        $nombre = $_POST['txtNombre'];
        $dni = $_POST['txtDNI'];
        $objSolicitud->emitirSolicitud($nombre, $dni, $suministros, $herramientas);
        break;

    case 'Eliminar Solicitud':
        $_SESSION['suministros'] = null;
        $_SESSION['herramientas'] = null;
        $objSolicitud -> cargarSH();
        break;

    case 'Eliminar':
        $arrayS = array();
        $arrayH = array();
        if(count($suministros)>0){
            $i=1;            
            foreach ($suministros as $value) {
                if($_POST['textEliminarS'.$i] == 1){
                    array_push($arrayS,array($value[0],$value[1]));
                }
                $i++;
            }
        }
        print_r($arrayS);
        /*if(count($herramientas)>0){
            $i=1;
            foreach ($herramientas as $value) {
                if($_POST['textEliminarH'.$i] == 1){
                    array_push($arrayH,array($value[0],$value[1]));
                }
                $i++;
            }
        }*/
        print_r($arrayH);
        $objSolicitud -> iniciarSolicitud($arrayH, $arrayS);
        break;
}

?>
