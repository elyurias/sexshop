<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->getAll("SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']." ORDER BY (municipio)");
	$opciones = '<option>Selecciona</option>';
	foreach($p as $row){
		$dataSS = "";
		if(isset($_POST['mun'])){
			if(strcmp($row['idMunicipio'],$_POST['mun'])==1){
				$dataSS = "selected";
			}else{
				$dataSS = "";
			}
		}
		$opciones.= '<option value="'.$row['idMunicipio'].'" '.$dataSS.'>'.$row['municipio'].'</option>';
	}
	echo $opciones;
?>
