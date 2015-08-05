<?php
	session_start();

	if (!isset($_SESSION['contador'])) $_SESSION['contador'] = 0;
    else $_SESSION['contador'] += 1;

    echo $_SESSION['contador'];
?>

<!DOCTYPE html>

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


	</head>


	<body>

        

		<div class="container">

		<div class="jumbotron">
		    <h1>ERROR</h1> 
		    <p>Es posible que su contraseña o el usuario es incorrecta, de no saber esta información contacte al administrador del sistema.</p> 
		    <a href="index.php">REGRESAR</a>
		</div>


	        
					
		</div>	
		<div class="footer-line">
			<div class="container">
				<h3>&#169; Instituto Tecnol&oacute;gico Superior de Zapopan</h3>
			</div>
		</div>

	</body>

	


</html>
