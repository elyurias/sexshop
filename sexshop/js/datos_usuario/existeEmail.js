var ti = 0;
$(document).on('ready', function(){
		$('#email').keyup(function(){
			$("#email").css("background-color","white");
		});
		$('#ciudad').change(function(){
			$("#ciudad").css("background-color","white");
		});
		$('#nacimiento').keyup(function(){
			$("#nacimiento").css("background-color","white");
		});
		$('#email').focusout(function(event){
				$.post("php/usuario/existeEmail.php",{emailA : $('#email').val()},function(data){
					var t = $("#email").val().indexOf("@");
					if($("#email").val().length != 0 && t != -1 && $("#email").val().length > 4){
						if(data=='Disponible'){
							ti = 1;
							 alertify.alert("<b>Mensaje de Servidor</b><br> Email Disponible", function () {
								//aqui introducimos lo que haremos tras cerrar la alerta.
								//por ejemplo -->  location.href = 'http://www.google.es/';  <-- Redireccionamos a GOOGLE.
							});
						}else{
							ti = 0;
							alertify.alert("<b style='background-color:red'>Mensaje de Servidor</b><br> Email No Disponible", function () {
								//aqui introducimos lo que haremos tras cerrar la alerta.
								//por ejemplo -->  location.href = 'http://www.google.es/';  <-- Redireccionamos a GOOGLE.
							});
						}
					}else{
						 ti = 0;
					}
				});
		});
		$("#emailB").focusout(function(event){
			if($("#email").val() == $("#emailB").val()){
				alertify.success("Email correctamente repetido");
			}else{
				alertify.error("Los emails no coinciden");
			}
		});
	});
