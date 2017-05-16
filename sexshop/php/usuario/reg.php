<?php
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->Execute("CALL addUsuario('".$_POST['nombre']."', '".$_POST['paterno']."', '".$_POST['materno']."', '".$_POST['nacimiento']."', ".$_POST['telefono'].", '".$_POST['emailA']."', '".$_POST['pass1']."',  '".$_POST['direccion']."',  ".$_POST['ciudad'].",  '".$_POST['sexo']."')");
	if($p){
	  echo "Se registro correctamente";
	}else{
	  echo "Error, verifique sus datos";
	}
?>
