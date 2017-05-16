var emaEdad = 0;
$(document).on('ready',function(){
  $('#registro').click(function(){
	var cadena = '';
    if($("#email").val()==$("#emailB").val() && $("#email").val().length < 4){
		cadena+= ("Error en email verifique su estructura");
	}
	if(ti == 0){
		cadena+= ("<br>Email no disponible");
	}
	if(emaEdad == 0){
		cadena+= ("<br>No tienes la edad suficiente (eres menor de edad (18 anios))");
	}
	if($("#pass1").val()==$("#pass2").val() && $("#pass1").val().length < 4){
		cadena+= ("<br>Error en password verifique su estructura");
	}
	if(cadena.length!=0){
		$("#data").html(cadena);
		$("#data").dialog();
		//alert(cadena);
	}else{
		if(confirm("Desea registrarse como nuevo usuario, aceptando, usted adepta todas las politicas de privacidad, etc.. etc..")){
			$('#fm').submit(function(){
				$.post("php/usuario/reg.php",$( "#fm" ).serialize(),
					function(data){
						alert(data);
					}
				);
			});
		}else{
		
		}
	}
  });
  aramistasis();
});
function aramistasis(){
  $("#nacimiento").focusout(function(event){
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
