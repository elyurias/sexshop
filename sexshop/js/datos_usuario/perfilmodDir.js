$(function() {
  // this initializes the dialog (and uses some common options that I do)
  $("#dialog2").dialog({
    autoOpen : false, modal : true, show : "blind", hide : "blind"
  });

  // next add the onclick handler
  $("#modificar2").click(function() {
    $("#dialog2").dialog("open");
    return false;
  });
});
function abra(){
	if(parseInt($("#ciudad").val())==0){
		$("#ciudad").css("background-color","red");
		return false;
	}else{
		$("#ciudad").css("background-color","white");
		return true;
	}
}
$(document).on('ready', function(){
	$("#fm2").submit(function(){	
			if(abra()==true){
				$.post("php/usuario/mod2.php",$("#fm2").serialize(),
					function(data){
						alert(data);
					}
				);
			}else{
				
			}
		});
});
