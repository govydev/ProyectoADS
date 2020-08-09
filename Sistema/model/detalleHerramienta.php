<?php
include_once("conexion.php");

class detalleHerramienta{
	
	public function getDetalleHerById($idsolicitud){
        conexion::getConexion();
		$consulta = "SELECT * FROM detalleherramientas WHERE idSolicitud = $idsolicitud";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

	public function crearDetalleHerramienta($id, $herramientas){
		conexion::getconexion();
		foreach ($herramientas as $value) {
			$consulta = "INSERT INTO `detalleherramientas`(`idSolicitud`, `idHerramienta`, `cantidad`) VALUES ($id,$value[0],$value[1])";
			mysql_query($consulta);
		}
	}

}
?>