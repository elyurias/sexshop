$(function() {
  // this initializes the dialog (and uses some common options that I do)
  $("#dialog3").dialog({
    autoOpen : false, modal : true, show : "blind", hide : "blind", position: {
                  my: "center center" ,
                  at: "center top"
               }
  });
   $("#er").dialog({autoOpen : false, modal : true, show : "blind", hide : "blind"});

  // next add the onclick handler
  $("#modificar3").click(function() {
    $("#dialog3").dialog("open");
    return false;
  });
});
function abra(){
	var vali = "";
	if($("#password1").val()!=$("#psss").val()){
		vali = vali + "<div class='alert alert-danger'>Clave no valida [Password anterior]</div>";
	}
	if($("#pass1").val()!=$("#pass2").val() || $("#pass1").val().length < 4){
		vali = vali + "<div class='alert alert-danger'>Clave no valida [4 Caracteres minimos, o no estan repetidos]</div>";
	}
	return vali;
}
$(document).on('ready', function(){
	$('#guardado3').click(function(){
		if(abra().length!=0){
			$('#er').html(abra());
			$("#er").dialog("open");
		}else{
				$.post("php/usuario/mod3.php",{id:$('#ide').val(),pass:$('#pass1').val()},
					function(data){
					}
				);
				$("#cambo").dialog();
				setTimeout(function(){window.location = "php/login/logout.php";},5000)
			}
		});
});
