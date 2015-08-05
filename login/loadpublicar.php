<?php
		session_start();
		if (isset($_SESSION['usr'])){
			echo '<div class="widget footer-widgets message-widget">
							<a href="publicar_aviso2.php" class ="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Publicar aviso</a>	
							<tr/>
							<a href="mostrar_aviso.php" class ="btn btn-warning btn-lg"><i class="glyphicon glyphicon-pencil"></i> Editar aviso</a>	
							<tr/>
							<a href="eliminar_aviso.php" class ="btn btn-danger btn-lg"><i class="glyphicon glyphicon-trash"></i> Eliminar aviso</a>	
							</div>'
							;

		}	
	
?>