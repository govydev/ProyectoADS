<?php
class conexion{
	public static $conexion = null;

	private function conexion()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("sistemaADS");
	}
	
	public function getConexion()
	{
		if(self::$conexion == null){
			return self::$conexion = new conexion;
		}else{
			return $conexion;
		}
	}
}
?>