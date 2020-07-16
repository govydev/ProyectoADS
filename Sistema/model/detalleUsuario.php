<?php
include_once("conexion.php");

class detalleUsuario{

    public function obtenerRoles($user){
        conexion::getConexion();
		$consulta = "SELECT R.rol, R.path, R.icono 
		             FROM usuarios U, roles R, detalleusuarios DU
					 WHERE U.login = '$user' AND 
					       U.login = DU.login AND
						   R.idrol = DU.id AND
						   DU.estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

}

?>