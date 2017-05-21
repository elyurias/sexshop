var emaEdad = 0;
$(document).on('ready',function(){
  $('#registro').click(function(){
	var cadena = '';
    if($("#email").val()==$("#emailB").val() && $("#email").val().length < 4){
		cadena+= ("<div class='alert alert-danger'>Error en email verifique su estructura</div>");
		$("#email").css("background-color","red");
	}
	if(parseInt($("#ciudad").val())==0){
		cadena+= ("<div class='alert alert-danger'>Ingrese una direccion valida</div>");
		$("#ciudad").css("background-color","red");
	}
	if(ti == 0){
		cadena+= ("<div class='alert alert-danger'>Email no disponible</div>");
		$("#email").css("background-color","red");
	}
	if(emaEdad == 0){
		cadena+= ("<div class='alert alert-danger'>Menor de edad</div>");
		$("#nacimiento").css("background-color","red");
	}
	if($("#pass1").val()==$("#pass2").val() && $("#pass1").val().length < 4){
		cadena+= ("<div class='alert alert-danger'>Error en password verifique su estructura</div>");
		$("#pass1").css("background-color","red");
	}
	if(cadena.length!=0){
		$("#data").html(cadena);
		$("#data").dialog();
		//alert(cadena);
	}else{
		var estadoDe = confirm("Desea registrarse como nuevo usuario, aceptando, usted adepta todas las politicas de privacidad, etc.. etc..");
		alert(estadoDe);
		if(estadoDe == true){
			$.post("php/usuario/reg.php",$( "#fm" ).serialize(),
				function(data){
					alert(data);
				}
			);
		}else{
		
		}
	}
  });
  aramistasis();
});
function validar(){
	return false;
}
function aramistasis(){
  $("#nacimiento").change(function(){
	var miFechaActual = new Date() 
	var ano = miFechaActual.getFullYear();
	var anioNac = parseInt($("#nacimiento").val().substring(0,4));
	if(ano - anioNac >= 18){
		emaEdad = 1;
	}else{
		emaEdad = 0;
	}
  });	
}
$( function() {
	$( "#nacimiento" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    $( "#nacimiento" ).datepicker( "option", "dateFormat", 'yy-mm-dd');
});
