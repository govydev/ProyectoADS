<?php
include_once("conexion.php");

class usuario{

    public function verificarUsuario($user, $pass){
        conexion::getConexion();
		$consulta = "SELECT login FROM usuarios WHERE login = '$user' AND password ='$pass' AND estado = 1";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		if($num_registros == 1)
			return (1);
		else
			return(0);
	}
	
	public function getAllUser(){
        conexion::getConexion();
		$consulta = "SELECT * FROM usuarios";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
	}
	
	public function getUser($usuario){
        conexion::getConexion();
		$consulta = "SELECT * FROM usuarios WHERE login='$usuario'";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }


}
?>