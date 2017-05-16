<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$opciones = '<option>Selecciona</option>';
	$p = $db->getAll("SELECT id, asentamiento FROM listaAsentamiento WHERE idMunicipio = ".$_POST['municipio']." AND idEstado = ".$_POST['estado']." ORDER BY (ciudad)");
	foreach($p as $row){
		$ste = "";
		if(isset($_POST['idn'])){
			if(strcmp($_POST['idn'],$row['id'])==1){
				$ste = "selected";
			}else{
				$ste = "";
			}
		}
		 $opciones.= '<option value="'.$row['id'].'" '.$ste.'>'.$row['asentamiento'].'</option>';
	}
	echo $opciones;
?>
