<?php
include_once("conexion.php");

class detalleSuministro{
	
	public function getDetalleSumById($idsolicitud){
        conexion::getConexion();
		$consulta = "SELECT * FROM detallesuministros WHERE idSolicitud = $idsolicitud";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

	public function crearDetalleSolicitud($id, $suministros){
		conexion::getconexion();
		foreach ($suministros as $value) {
			$consulta = "INSERT INTO `detallesuministros`(`idSolicitud`, `idSuministro`, `cantidad`) VALUES ($id,$value[0],$value[1])";
			mysql_query($consulta);
		}
	}	

}
?>