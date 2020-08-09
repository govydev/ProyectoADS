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
		$consulta = "SELECT * FROM solicitudes WHERE estado = 2";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

}
?>