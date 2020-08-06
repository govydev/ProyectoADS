<?php
include_once("conexion.php");

class suministro{
	
	public function getAllSuministro(){
        conexion::getConexion();
		$consulta = "SELECT s.idsuministro, s.nombre, s.cantidad, u.diminutivo, s.detalle FROM suministro s, unidad u WHERE s.unidad = u.idunidad AND s.estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	
	public function getSuministro($busqueda){
        conexion::getConexion();
		$consulta = "SELECT s.idsuministro, s.nombre, s.cantidad, u.diminutivo, s.detalle FROM suministro s, unidad u WHERE s.unidad = u.idunidad AND s.nombre like '$busqueda%'";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	
	public function getSuministroById($id){
        conexion::getConexion();
		$consulta = "SELECT s.idsuministro, s.nombre, s.cantidad, u.diminutivo, s.detalle FROM suministro s, unidad u WHERE s.unidad = u.idunidad AND s.idsuministro = $id";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}

	public function actualizarSuministro($suministro){
		conexion::getConexion();
		$consulta = "UPDATE `suministro`
					 SET nombre = \"".$suministro['nombre']."\", cantidad = '".$suministro['cantidad']."', unidad = '".$suministro['unidad']."', detalle = '".$suministro['detalle']."'
					 WHERE 
						 idsuministro = ".$suministro['id'];
		mysql_query($consulta);	
	}

	public function crearSuministro($suministro){
		conexion::getConexion();
		$consulta = "INSERT INTO `suministro`(`idsuministro`, `nombre`, `cantidad`, `unidad`, `estado`, `detalle`)
					 VALUES (NULL, '".$suministro['nombre']."', '".$suministro['cantidad']."', '".$suministro['unidad']."', 1, '".$suministro['detalle']."')";
		mysql_query($consulta);
	}

	public function getSuministroAgotado(){
        conexion::getConexion();
		$consulta = "SELECT s.idsuministro, s.nombre, s.cantidad, u.diminutivo, s.detalle FROM suministro s, unidad u WHERE s.unidad = u.idunidad AND s.cantidad = 0";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}

	public function eliminarSuministro($idSuministro){
		conexion::getConexion();
		$consulta = "UPDATE `suministro`
					 SET estado = 0
					 WHERE 
						 idsuministro = ".$idSuministro;
		mysql_query($consulta);	
	}
}
?>