var datoCorrectoVerificar = "";
$(document).on("ready",function(){
	$("#pass1").keyup(function(event){
		var dato = $("#pass1").val();
		var nums = '0123456789';
		var letras = "<div class='alert alert-danger'>Al menos una letra mayuscula</div>";
		var numeros = "<div class='alert alert-danger'>Al menos un numero</div>";
		var tamanioC = "<div class='alert alert-danger'>Tamano superior a 4</div>";
		for(var i = 0; i < dato.length; i = i + 1){
			var sss = parseInt(dato.charAt(i));
			if(dato.charAt(i) === dato.charAt(i).toUpperCase() && !$.isNumeric(sss)){
				letras = "<div class='alert alert-success'>Sintaxis correcta (Mayusculas)</div>";
			}
			if(nums.indexOf(dato.charAt(i),0)>-1){
				numeros = "<div class='alert alert-success'>Sintaxis correcta (Numeros)</div>";
			}
		}
		if(dato.length > 4){
			tamanioC = "<div class='alert alert-success'>Sintaxis correcta (Tamano)</div>";
		}
		$("#passR1").html(letras+numeros+tamanioC);
		$("#passR1").dialog();
		$("#pass1").focus();
	});
	$("#pass2").keyup(function(event){
		if($("#pass1").val() == $("#pass2").val()){
			 datoCorrectoVerificar = "<div class='alert alert-success'>Correctamente repetidos</div>";
		}else{
			 datoCorrectoVerificar = "<div class='alert alert-danger'>No estan bien repetidos</div>";
		}
		$("#passR1").html(datoCorrectoVerificar);
		$("#pass2").focus();
	});
});
