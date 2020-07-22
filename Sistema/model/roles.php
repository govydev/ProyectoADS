<?php
include_once("conexion.php");

class roles{
	
	public function getAllRoles(){
        conexion::getConexion();
		$consulta = "SELECT * FROM roles";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }


}
?>