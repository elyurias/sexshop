<?php
	require_once dirname(__FILE__)."/include/smarty.php";
	include("php/sesion.php");
	if($status){
		 if($_SESSION['tipo']==0){
			$oSmarty->assign('modo','registrar');
			$oSmarty->assign("titulo","Pagina de administrador");
			$p = $db->getAll("SELECT * FROM estado");
			$oSmarty->assign('estado',$p);
			$oSmarty->display("registro.html.tpl");
		}else{
			header("location: index.php");
		}
	}else{
		header("location: index.php");
	}
?>
