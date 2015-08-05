<?php
$link = mysqli_connect('localhost', 'root', 'Napolitano91','Avisos')////Conexion a la base de datos
	 or die("No se pudo conectar a la BDD".mysqli_error($link));////Si hubo un problema de conexion
$query='Select *from avisos where status=1';////Selecciona los avisos que se encuentran habilitados
$result=mysqli_query($link,$query) 
	or die("Consulta incorecta".mysqli_error($link));
if(mysqli_num_rows($result)==0){
	echo "No hay avisos";			////Si no hay avisos disponibles
}
while ($row=mysqli_fetch_array($result)) {
	echo '<p>'.$row['Contenido'].'<p>';//////Recorrre e imprime el contenido del aviso
}
?>