<!Doctype <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Estilos-->
	<link rel="stylesheet" type="text/css" href="fancy-box/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.3.4/dist/css/bootstrap.min.css">
	<!-- Scripts-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="fancy-box/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	<title>Index</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['usr'])) exit(header("Location: ./"));

?>
	<div class="container">
		<div class="row">
			<h1>Publicar aviso</h1>
			<div id="publicar aviso"class="col lg-12 md-8 sm-4">	
				<div class="form-group">
					<label>Titulo del Aviso</label>
					<input type="text" class="form-control" name="Titulo" id="titulo" placeholder="escriba el titulo del aviso" required>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="timeout" id ="timeout"> El aviso se mostrara solo un periodo de tiempo
					</label>
				</div>	
				<div class="form-group">
					<label>Tiempo de vida del mensaje (Dias)</label>
					<input type="number" class="form-control" min="0"  step="1" value="7" id="timeout_value">
				</div>				
				<textarea name="textarea" id="textarea" class="jqte-test" style="background-color: #BC0019"></textarea>
				Enviar este archivo: <input name="userfile" type="file" />
				<center><button type="submit" class=" status btn btn-success">Enviar</button></center>
			</div>
		</div>
	</div>
</body>
</html>