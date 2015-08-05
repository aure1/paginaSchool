<?php
$titulo= $_POST['titulo'];
$aviso= $_POST['aviso'];
$timeout= $_POST['timeout'];
$timeout_value=$_POST['timeout_value'];
$link = mysqli_connect('localhost', 'root', 'Napolitano91','Avisos')////Conexion a la base de datos
	 or die("No se pudo conectar a la BDD".mysqli_error($link));////Si hubo un problema de conexion
$query="insert into avisos values(null,'".$aviso."',DATE_ADD(NOW(),INTERVAL ".$timeout_value." DAY),".$timeout.",1)";///Inserta el aviso con el tiempo de via
$result=mysqli_query($link,$query);
if($result) echo "Se creo el aviso correctamente";
else echo "No se pudoo crear el aviso intente de nuevo";
?>