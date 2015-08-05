<?php
	session_start();

	function getIP() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))
	        return $_SERVER['HTTP_CLIENT_IP'];
	       
	    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	        return $_SERVER['HTTP_X_FORWARDED_FOR'];
	   
	    return $_SERVER['REMOTE_ADDR'];
	}

	/**Configuracion de base de datos, servidor, usuario, contraseña y base de datos**/
	$conexion = mysqli_connect("localhost","root","Napolitano91","its");

	$sql = "SELECT * FROM bloque";

	if(!$result = mysqli_query($conexion,$sql)) die();//si la consulta es fallida, la función se termina 

	while($row =mysqli_fetch_array($result)){

		if ($row['ip'] == getIP().'') exit(header ("Location: bloqueado.php"));

	}

	session_unset();
	session_destroy();

	exit(header ("Location: index.php"));
?>