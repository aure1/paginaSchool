$(document).ready(function(){
$('[name="Editar"]').click(function()
	{
	id_aviso=""+this.id;
					$.ajax({
					type: "POST",
					url: "editar_aviso.php",
					data:{id:id_aviso},
					cache: false,
				});


	}
	
	);
$('[name="Borrar"]').click(function()
	{
	id_aviso=""+this.id;
						$.ajax({
					type: "POST",
					url: "eliminar_aviso.php",
					data:{id:id_aviso},
					cache: false,
					success: function(result){
						alert(result);
						window.location="mostrar_aviso.php";
					}
				});
	}
);
});