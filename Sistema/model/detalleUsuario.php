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

	public function getAllRolesDetails($user){
        conexion::getConexion();
		$consulta = "SELECT R.rol, DU.estado 
					 FROM roles R, detalleusuarios DU 
					 WHERE DU.login = '$user' 
					 AND R.idrol = DU.id";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	
	//login aumentar en el diagrama
	public function crearDetalleUsuario($roles, $login){
		conexion::getConexion();
		$i = 1;
		foreach ($roles as $key) {
			if(isset($key))	$estado = 1;
			else 			$estado = 0; 
			$consulta = "INSERT INTO `detalleusuarios`(`idDetalle`, `login`, `id`, `estado`) 
						 VALUES (NULL, '$login', $i, $estado)";
			mysql_query($consulta);
			$i++;
		}
	}

	public function actualizarDetalleUsuario($roles,$login){
		conexion::getConexion();
		$i = 1;
		foreach ($roles as $key) {
			if(isset($key))	$estado = 1;
			else 			$estado = 0; 
			$consulta = "UPDATE `detalleusuarios` 
						 SET `estado`= ".$estado."
						 WHERE `login`= '".$login."' AND `id`=".$i;
			mysql_query($consulta);
			$i++;
		}
	}

}

?>