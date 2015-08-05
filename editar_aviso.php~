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
			$query="select from avisos where idavisos = ".$_POST['id'];
			$result=mysqli_query($link,$query) 
			or die("No se pudo borrar el elemento".mysqli_error($link));
		?>
</tbody>	
			</table>
			
			</form>
			</div>
		</div>
	</div>
</body>
</html>