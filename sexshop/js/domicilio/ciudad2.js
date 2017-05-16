$(document).on('ready', function(){
	/*$("#municipio").change(function(){
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
	);*/
	if(estadoServido==0){
		reload(2);
		reloadCP(2);
	}
	$("#municipio").change(function(){
		reload(1);
	});
	$("#ciudad").change(function(){
		reloadCP(1);
	});
});
function reload(op){
	if(op==1){
		$.post(
			"php/domicilio/ciudad.php",
			{municipio:$('#municipio').val(), estado:$('#estado').val()},
			function(opciones){
				$("#ciudad").html(opciones);
			}
		);
	}else{
		$.post(
			"php/domicilio/ciudad.php",
			{municipio:$('#mun').val(), estado:$('#estado').val(), idn:$('#idn').val()},
			function(opciones){
				$("#ciudad").html(opciones);
			}
		);
	}
}
function reloadCP(op){
	if(op==1){
			$.post("php/domicilio/cp.php",
				  {ciudad:$("#ciudad").val()},
					function(opcion){
						$("#cp").val(opcion);
			});
	}else{
			$.post("php/domicilio/cp.php",
				  {ciudad:$("#idn").val()},
					function(opcion){
						$("#cp").val(opcion);
			});
	}
}
