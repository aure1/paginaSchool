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
	$conexion = mysqli_connect("localhost","root","","its");


	if ( isset($_SESSION['contador']) && $_SESSION['contador'] > 3) {

		$sql = "INSERT INTO bloque VALUE ('".getIP()."');";

		if(!$result = mysqli_query($conexion,$sql)) die();//si la consulta es fallida, la función se termina 
	}


	$sql = "SELECT * FROM bloque";

	if(!$result = mysqli_query($conexion,$sql)) die();//si la consulta es fallida, la función se termina 

	while($row =mysqli_fetch_array($result)){

		if ($row['ip'] == getIP().'') exit(header ("Location: bloqueado.php"));

	}


	if ( isset($_POST['usu']) && isset($_POST['pass']) && $_SESSION['key'] == $_POST['key']){

		$sql = "SELECT * FROM log";

		if(!$result = mysqli_query($conexion,$sql)) die();//si la consulta es fallida, la función se termina 
			while($row =mysqli_fetch_array($result)){
				if ($row['us'] != $_POST['usu'] || $row['pass'] != $_POST['pass']) exit(header ("Location: error.php"));
				else $_SESSION['usr']=$row['us'];		
			}
		
		$_SESSION['contador'] = 0;


		/** Aqui se ingresa el codigo que se utilizara para las funciones del fancy box**/
		echo '

			<!DOCTYPE html>

			<html><!DOCTYPE html>

			<html>
				<head>
					<!-- Latest compiled and minified CSS -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

					<!-- Optional theme -->
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

					<!-- Latest compiled and minified JavaScript -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

					<link rel="stylesheet" href="estilo.css">

					<title>Instituto Tecnológico Superior de Zapopan</title>
				
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
					<meta name="itszapopan" content="width=device-width, initial-scale=1, maximum-scale=1">
					<script type="text/javascript">
function redireccionar(){
  window.location="../index.html";
  alert("Sesion iniciada");
} 
setTimeout ("redireccionar()", 1000); //tiempo expresado en milisegundos

</script>

				</head>


				<body>

			        

					<div class="container">

					<div class="jumbotron">
					    <h1>BIENVENIDO</h1> 
					    <p>Usted ha entrado al sitio.</p> 
					    <a href="logout.php">LOGOUT</a>
					</div>


				        
								
					</div>	
					<div class="footer-line">
						<div class="container">
							<h3>&#169; Instituto Tecnol&oacute;gico Superior de Zapopan</h3>
						</div>
					</div>

				</body>

				


			</html>
			
		';



	}else{
		exit(header ("Location: error.php"));
	}

?>
