<!Doctype <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Estilos-->
	<link rel="stylesheet" type="text/css" href="fancy-box/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/jquery-te-1.4.0.css">
	<link type="text/css" rel="stylesheet" href="bootstrap-3.3.4/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="css/jquery-ui.min.css">
	<!-- Scripts-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="fancy-box/source/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.47831.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/main2.js"></script>

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
			<form id="form_aviso" enctype="multipart/form-data">
				<div class="form-group">
					<label>Titulo del Aviso</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="escriba el titulo del aviso" required>
				</div>
				<div class="form-group">
					<label>El aviso se mostrara solo un periodo de tiempo
					<input type="checkbox" name="timeout" id ="timeout"> 
					</label>
				</div>	
				<div class="form-group">
					<label>Fecha en que expira el aviso</label>
					<input type="date" name="date_to_disable" step="1"  value="<?php echo date("Y-m-d");?>">
				</div>
				<div class="form-group">
					<input type="file" name="img" id="img">
				</div>
				<div class="form-group">
					<label>Alto</label>
					<input type="number" class="form-control " min="0"  step="1" value="100" id="heigth" name="height">
					<label>Ancho</label>
					<input type="number" class="form-control" min="0"  step="1" value="300" id="width" name ="width">
				</div>				
				<textarea name="aviso" id="textarea" class="jqte-test" style="background-color: #BC0019"></textarea>
				<center><button type="submit" class=" status btn btn-success">Publicar</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>