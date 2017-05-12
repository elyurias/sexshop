<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$opciones = '<option>Selecciona</option>';
	$p = $db->getAll("SELECT id, asentamiento FROM ciudad_estado_municipio WHERE idMunicipio = ".$_POST['municipio']." AND idEstado = ".$_POST['estado']." ORDER BY (ciudad)");
	foreach($p as $row){
		 $opciones.= '<option value="'.$row['id'].'">'.$row['asentamiento'].'</option>';
	}
	echo $opciones;
?>
