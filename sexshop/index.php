<?php
	require_once dirname(__FILE__)."/include/smarty.php";
	include("php/sesion.php");
	$oSmarty->display("principal.html.tpl");
?>
