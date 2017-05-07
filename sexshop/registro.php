<?php
	require_once dirname(__FILE__)."/include/smarty.php";
	include("php/sesion.php");
	$oSmarty->assign('modo','registrar');
	$oSmarty->assign("titulo","Principal nuevo usuario");
	$oSmarty->display("registro.html.tpl");
?>
