<?php
	require_once dirname(__FILE__)."/include/smarty.php";
	include("php/sesion.php");
	$oSmarty->assign('modo','registrar');
	$oSmarty->assign("titulo","Nuevo usuario");
	$p = $db->getAll("SELECT * FROM estado");
	$oSmarty->assign('estado',$p);
	$oSmarty->display("registro.html.tpl");
?>
