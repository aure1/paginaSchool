	$(document).ready(function(){
		    $(function(){           
        if (!Modernizr.inputtypes.date) {
        // If not native HTML5 support, fallback to jQuery datePicker
            $('input[type=date]').datepicker({
                // Consistent format with the HTML5 picker
                    dateFormat : 'yy-mm-dd',
                        changeMonth: true,
    					changeYear: true
                },
                // Localization
                $.datepicker.regional['it']
            );
        }
    });
			$('#form_aviso').submit(function(e){
				data=new FormData(this)
				data.append('timeout',$("#timeout").is(":checked") ? 1 : 0);
				$.ajax({
					type: "POST",
					url: "insertar_aviso2.php",
					data:data ,
					cache: false,
					processData: false,
      				contentType: false,
					success: function(result){
						alert(result);
					}
				});
				e.preventDefault();
					});
        $('.jqte-test').jqte();

    });
