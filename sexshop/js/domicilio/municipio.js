$(document).on('ready', function(){
	$("#estado").change(function(){
		$.ajax({
			url:"php/domicilio/municipio.php",
			type:"POST",
			data:"idEstado="+$("#estado").val(),
			success: function(opciones){
				$("#municipio").html(opciones);
			}
		});
	});
});
