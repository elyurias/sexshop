$(function() {
  // this initializes the dialog (and uses some common options that I do)
  $("#dialog").dialog({
    autoOpen : false, modal : true, show : "blind", hide : "blind"
  });

  // next add the onclick handler
  $("#modificar").click(function() {
    $("#dialog").dialog("open");
    return false;
  });
});
$( function() {
	$( "#nacimiento" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    $( "#nacimiento" ).datepicker( "option", "dateFormat", 'yy-mm-dd');
    $( "#nacimiento" ).datepicker( "setDate", $("#nac").val());
});
$(document).on('ready', function(){
	var emaEdad = 0;
	$("#nacimiento").focusout(function(event){
		var miFechaActual = new Date() 
		var ano = miFechaActual.getFullYear();
		var anioNac = parseInt($("#nacimiento").val().substring(0,4));
		if($("#nacimiento").val().length==0){
			$("#nacimiento").val($("#nac").val());
		}
		if(ano - anioNac >= 18){
			emaEdad = 1;
		}else{
			emaEdad = 0;
			alert("Categoria de edad como menor de edad");
			$("#nacimiento").val($("#nac").val());
		}
	});
	$("#fm").submit(function(){
		if(emaEdad == 1){	
			$.post("php/usuario/mod1.php",$("#fm").serialize(),
				function(data){
					alert(data);
				}
			);
		}else{
				alert("Categoria de edad como menor de edad");
			}
		});
});
