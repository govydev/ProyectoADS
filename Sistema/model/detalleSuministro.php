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


}
?>