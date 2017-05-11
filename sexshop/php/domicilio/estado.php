<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->getAll("SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']);
	echo '<select id="estado" class="form-control">';
	foreach($p as $row){
		 echo '<option value="'.$row['idEstado'].'">'.$row['estado'].'</option>';
	}
	echo '</select>';
?>
