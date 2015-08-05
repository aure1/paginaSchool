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
	<script type="text/javascript" src="js/main3.js"></script>

	<title>Index</title>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['usr'])) exit(header("Location: ./"));

?>
	<div class="container">
		<div class="row">
			<h1>Mostrar aviso</h1>
			<div id="publicar aviso"class="col lg-12 md-8 sm-4">	
			<form id="form_aviso" enctype="multipart/form-data">
			<table class="table table-striped table-bordered table-hover table-condensed" >
			<thead style="background:gray; color:white">
				<tr>
					<th>Contenido</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
			$link = mysqli_connect('localhost', 'root', 'Napolitano91','Avisos')////Conexion a la base de datos
	 		or die("No se pudo conectar a la BDD".mysqli_error($link));////Si hubo un problema de conexion
			$query="select *from avisos";
			$result=mysqli_query($link,$query) 
				or die("Consulta incorecta".mysqli_error($link));
			if(mysqli_num_rows($result)==0){
				echo "No hay avisos";			////Si no hay avisos disponibles
			}
			while ($row=mysqli_fetch_array($result)) {
				echo '<tr><td>'.$row['Contenido'].'</td><td><button type="button" id='.$row['idavisos'].'  name="Editar" class="btn btn-primary btn-lg">Editar</button></td><td><button type="button" name="Borrar" id='.$row['idavisos'].' class="btn btn-danger btn-lg">Borrar</button></td></tr>';//////Recorrre e imprime el contenido del aviso
			}
			?>
			</tbody>	
			</table>
			
			</form>
			</div>
		</div>
	</div>
</body>
</html>