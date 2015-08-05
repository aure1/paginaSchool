			<?php
			$link = mysqli_connect('localhost', 'root', 'Napolitano91','Avisos')////Conexion a la base de datos
	 		or die("No se pudo conectar a la BDD".mysqli_error($link));////Si hubo un problema de conexion
	 		$query="delete from avisos where idavisos=".$_POST['id'];
			//echo $query;
	 		$result=mysqli_query($link,$query) 
	 		or die("No se pudo borrar el elemento".mysqli_error($link));
				//echo var_dump();
	 		if($result) echo "Se ha eliminado el aviso";
	 		else echo "no se pudo eliminar";
	 		?>