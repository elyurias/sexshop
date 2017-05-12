<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$opcion = "";
	$p = $db->getAll("SELECT cp FROM ciudad_estado_municipio WHERE id = ".$_POST['ciudad']."");
	foreach($p as $row){
		 $opcion.= ''.$row['cp'].'';
	}
	echo $opcion;
?>
