<?php
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->getAll("SELECT * FROM usuario WHERE Vemail_usuario = '".$_POST['emailA']."'");
	if(SIZEOF($p)==0){
		echo 'Disponible';
	}else{
		echo 'No disponible';
	}
?>
