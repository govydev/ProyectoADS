<?php
include_once("conexion.php");

class solicitud{

    public function obtenerSolicitudTodo(){
        conexion::getConexion();
		$consulta = "SELECT * FROM solicitudes WHERE estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

    public function obtenerRegistroSalidaTodo(){
        conexion::getConexion();
		$consulta = "SELECT * FROM solicitudes WHERE estado != 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	public function getSolicitudByDNI($busqueda){
        conexion::getConexion();
		$consulta = "SELECT * FROM solicitudes WHERE DNI LIKE '$busqueda%' AND estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	
	public function getRegistroByDNI($busqueda){
        conexion::getConexion();
		$consulta = "SELECT * FROM solicitudes WHERE DNI LIKE '$busqueda%' AND estado != 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}

	public function actualizarEstadoSolicitud($idSolicitud){
		conexion::getConexion();
		$consulta = "UPDATE `solicitudes`
					 SET estado = 2
					 WHERE 
						 idsolicitud = ".$idSolicitud;
		mysql_query($consulta);
	}

	public function crearSolicitud($nombre, $dni){
		date_default_timezone_set('America/Lima');
		$hoy = getdate();
		$fecha = $hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
		conexion::getConexion();
		$consulta = "INSERT INTO `solicitudes`(`nombre`, `dni`, `fecha`, `estado`) VALUES ('$nombre','$dni','$fecha',1)";
		mysql_query($consulta) or mysql_error();
		$respuesta =  mysql_insert_id();
		return $respuesta;
	}

	public function actualizarMotivoSolicitud($motivo, $idSolicitud){
		conexion::getConexion();
		$consulta = "UPDATE `solicitudes`
					 SET motivo = '$motivo',
					 	 estado = 0	
					 WHERE 
						 idsolicitud = ".$idSolicitud;
		mysql_query($consulta);
	}
}
?>