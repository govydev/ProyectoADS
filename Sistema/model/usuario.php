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
	
	public function getUser($usuario, $campo){
        conexion::getConexion();
		$consulta = "SELECT * FROM usuarios WHERE $campo like '$usuario%'";
		$resultado = mysql_query($consulta);
		$num_registros = mysql_num_rows($resultado);
		for($i = 0; $i < $num_registros; $i++)
			$fila[$i] = mysql_fetch_array($resultado);
		return ($fila);
    }

	public function crearUsuario($user){
		conexion::getConexion();
		$consulta = "INSERT INTO `usuarios` (`idusuario`, `nombre`, `appaterno`, `apmaterno`, `login`, `password`, `estado`) 
					 VALUES (NULL, '".$user['nombre']."', '".$user['appaterno']."', '".$user['apmaterno']."', '".$user['login']."', '".$user['password']."', '".$user['estado']."')";
		$respuesta = mysql_query($consulta) or mysql_error();
		return $respuesta;
	}

	public function actualizarUsuario($user){
		conexion::getConexion();
		$consulta = "UPDATE `usuarios`
					 SET nombre = '".$user['nombre']."', appaterno= '".$user['appaterno']."', apmaterno= '".$user['apmaterno']."', password= '".$user['password']."', estado = '".$user['estado']."' 
					 WHERE 
					 login = '".$user['login']."'";
		$respuesta = mysql_query($consulta) or mysql_error();
		return $respuesta;
		
	}

}
?>