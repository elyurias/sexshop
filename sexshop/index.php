<?php
	require_once dirname(__FILE__)."/include/smarty.php";
	include("php/sesion.php");
	$oSmarty->assign("titulo","Principal");
	$oSmarty->display("principal.html.tpl");
?>
