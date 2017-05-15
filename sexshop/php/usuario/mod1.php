<?php
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->Execute("CALL modBase1Usuario('".$_POST['nombre']."', '".$_POST['paterno']."', '".$_POST['materno']."',".$_POST['telefono'].", '".$_POST['nacimiento']."', '".$_POST['sexo']."', ".$_POST['id'].");");
?>
