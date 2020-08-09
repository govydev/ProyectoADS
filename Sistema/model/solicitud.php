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

}
?>