<?php
require_once dirname(__FILE__)."/include/smarty.php";
include("php/sesion.php");//implementada $s (sesion) $db (base de datos)
if($status){
	$oSmarty->assign("titulo","Perfil de usuario");
	$oSmarty->display("perfil.html.tpl");
}else{
	header("Location: index.php");
}
?>
