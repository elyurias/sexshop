<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->getAll("SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']." ORDER BY (municipio)");
	echo "SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']."";
	foreach($p as $row){
		 $opciones.= '<option value="'.$row['idMunicipio'].'">'.$row['municipio'].'</option>';
	}
	echo $opciones;
?>
