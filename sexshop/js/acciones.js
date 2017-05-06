function eliminar(id){
	if(confirm("Desea eliminar el registro... "+id)){
		window.location = "php/eliminar.php?id="+id;
	}else{
	  alert("No se eliminara el registro");
	}
}
