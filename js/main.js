	$(document).ready(function(){
			// Configuracion del editor de texto
			var jqteStatus = true;
			$(".status").click(function()
			{
				jqteStatus = jqteStatus ? false : true;
				$('.jqte-test').jqte({"status" : jqteStatus})
				var titulo= $("#titulo").val();
				var aviso= $("#textarea").val();
				var timeout = $("#timeout").is(":checked") ? 1 : 0;
				var timeout_value=$("#timeout_value").val();
				var data=new FormData(document.getElementById(""))
				if(titulo==''||aviso=='')
				{
					alert("Por favor llene todos los campos");
				}
				else
				{
				// AJAX Code To Submit Form.
				$.ajax({
					type: "POST",
					url: "insertar_aviso.php",
					data: dataString,
					cache: false,
					success: function(result){
						alert(result);
					}
				});
					
				}
				jqteStatus = jqteStatus ? false : true;
					$('.jqte-test').jqte({"status" : jqteStatus})
				});
        $('.jqte-test').jqte();

    });
