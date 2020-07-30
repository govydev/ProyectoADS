<?php
include_once("controlGestionUsuario.php");
include_once("../shared/formMensaje.php");

if (isset($_POST['rdEstado']) && $_POST['rdEstado'] == '1') {
    $estado = 1;
}else{
    $estado = 0;
}

$user = array(
"nombre"=> trim($_POST['txtNombre']),
"appaterno"  => trim($_POST['txtApPaterno']),
"apmaterno"  => trim($_POST['txtApMaterno']),
"login"  => trim($_POST['txtUsuario']),
"password"  => trim($_POST['txtPassword']),
"estado" => $estado
);

$roles = array(
    $_POST['rol0'],
    $_POST['rol1'],
    $_POST['rol2'],
    $_POST['rol3']
);

if (strlen($_POST['txtNombre']) < 4 || strlen($_POST['txtApPaterno']) < 4 ||  strlen($_POST['txtApMaterno']) < 4 ||  strlen($_POST['txtUsuario']) < 4 || strlen($_POST['txtPassword']) < 4 ) {
    $objMensaje = new formMensaje;
    $objMensaje -> formMensajeShow("LA LONGITUD DE LOS DATOS DEBE SER POR LO MENOS 4","../managementModule/indexGestionUsuario.php");
}else {
    $objGestion =  new controlGestionUsuario;
    switch ($_POST["btnAccion"]) {
        case 'Registrar':
            $objGestion -> enviarUsuarioRoles($user, $roles);
            break;
        
        case 'Modificar':
            $objGestion -> actualizarUsuarioRoles($user, $roles);
            break;
    }
    
}



?>