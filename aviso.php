<?php
    header('Content-type: text/html; charset=utf-8; Cache-Control: no-cache');
    include("connectdb.php");
	
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
    $aviso = $_POST["aviso"];

    mysql_query("INSERT INTO avisos_t VALUES ('', '$nombre', '$email', '$aviso', CURDATE())");
?>
<script languaje="javascript"> 
	alert("¡Aviso Enviado Correctamente!"); 
	location.href = "index.php";
</script>