<?php
echo var_dump($_POST);
$titulo= $_POST['titulo'];
$aviso= $_POST['aviso'];
$width=$_POST['width'];
$height=$_POST['height'];
$timeout= $_POST['timeout'];
$date_to_disable=$_POST['date_to_disable'];
$uploaddir = '../img_avisos/';
$uploadfile = $uploaddir.basename($_FILES['img']['tmp_name']);
$aviso=str_replace('"',"'",$aviso);
//echo $uploadfile, " ->",$_FILES['img']['tmp_name'] ;
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "El archivo es válido y fue cargado exitosamente.\n";
    $aviso=$aviso."<br><img class='img-rounded' src=".$uploadfile." height=".$height." width=".$width." ><br>";///Si se subio el archivo correctamente se agrega al aviso
} else {
    echo "Hubo un error al subir el archivo intente de nuevo por favor\n";
}
$link = mysqli_connect('localhost', 'root', '','Avisos')////Conexion a la base de datos
	 or die("No se pudo conectar a la BDD".mysqli_error($link));////Si hubo un problema de conexion
$query='insert into avisos values(null,"'.$aviso.'","'.$date_to_disable.'",'.$timeout.',1)';///Inserta el aviso con el tiempo de via
$result=mysqli_query($link,$query);
echo $query;
if($result) echo "Se creo el aviso correctamente";
else echo "No se pudoo crear el aviso intente de nuevo".mysql_error();
?>
