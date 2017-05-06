<?php
ini_set('display_errors', 1);
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__)."/php/sesion.php";
$oSmarty->assign('id',$_GET['id']);
if($status){
	if(!isset($_POST['s'])){		
		$sql="SELECT * from producto  where SERIAL='".$_GET['id']."'";//consulta 
		$Adatos= $db->GetAll($sql);
		$oSmarty->assign('dato',$Adatos);
		$oSmarty->assign('modo','editar');
		$sql1="SELECT * from  marca ";//consulta 
		$aMarca= $db->GetAll($sql1);
		$oSmarty->assign('marca',$aMarca);
		$oSmarty->display('editar.html.tpl');

	}else{
		$sql="update producto set Vnombre_producto='".$_POST["nombre"]."', Vdescripcion_producto='".$_POST["descripcion"]."', Iexistencia_producto='".$_POST["cantidad"]."' , id_marca='".$_POST["marca"]."' where SERIAL='".$_POST['id']."'"; 
		echo $sql;
		$aReg= $db->execute($sql);
		if($aReg){
			header ("Location: product.php");  
		}else{
			echo "no";
		}
	}
}else{
	header("location: index.php");
}
?>
