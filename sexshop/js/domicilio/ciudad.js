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
	$("#ciudad").change(
		function(){
			$.post("php/domicilio/cp.php",
				  {ciudad:$("#ciudad").val()},
					function(opcion){
						$("#cp").val(opcion);
			});
		}
	);
});
