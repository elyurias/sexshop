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
$(document).on('ready', function(){
	$("#fm2").submit(function(){	
			$.post("php/usuario/mod2.php",$("#fm2").serialize(),
				function(data){
					alert(data);
				}
			);
		});
});
