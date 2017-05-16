$(document).on('ready', function(){
	recargar(1);
	$("#estado").change(function(){
		recargar(2);
	});
});
var estadoServido = 0;
function recargar(op){
	if(op==2){
		$.post(
			"php/domicilio/municipio.php",
			{idEstado:$("#estado").val()},
			function(opciones){
				$("#municipio").html(opciones);
			}
		);
	}else{
		$.post(
			"php/domicilio/municipio.php",
			{idEstado:$("#estado").val(),mun:$("#mun").val()},
			function(opciones){
				$("#municipio").html(opciones);
			}
		);
	}
}
