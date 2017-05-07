$(document).on("ready",function(){
	$("#pais").focusout(function(){
		$.post("php/usuario/",{pais:"MX"},function(data){
				$("entidad").val("<option>Hola</option>");
		});
	});
});
