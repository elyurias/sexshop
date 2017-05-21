<?php
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->getAll("SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']." ORDER BY (municipio)");
	echo "SELECT * FROM municipio WHERE idEstado = ".$_POST['idEstado']." ORDER BY (municipio)";
	$opciones = '<option value=0>Selecciona</option>';
	foreach($p as $row){
		$dataSS = "";
		if(!isset($_POST['estado'])){
			if($row['idMunicipio']==$_POST['mun']){
				$dataSS = "selected";
			}else{
				$dataSS = "";
			}
		}
		$opciones.= '<option value="'.$row['idMunicipio'].'" '.$dataSS.'>'.$row['municipio'].'</option>';
	}
	echo $opciones;
?>
