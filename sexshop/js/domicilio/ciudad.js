$(document).on('ready', function(){
	$("#municipio").change(function(){
		$.post(
			"php/domicilio/ciudad.php",
			{municipio:$('#municipio').val(), estado:$('#estado').val()},
			function(opciones){
				$("#ciudad").html(opciones);
			}
		);
	});
});
