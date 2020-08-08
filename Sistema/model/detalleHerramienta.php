<?php
include_once("conexion.php");

class detalleHerramienta{
	
	public function getDetalleHerById(){
        conexion::getConexion();
		$consulta = "SELECT * FROM detalleherramientas";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }


}
?>