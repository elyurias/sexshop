<?php
require_once dirname(__FILE__)."/include/smarty.php";
include("php/sesion.php");//implementada $s (sesion) $db (base de datos)
if($status){
	$estado = $db->GetAll("SELECT * FROM listaEstado");
	$dom = $db->GetAll("SELECT * from domUsuario where Vemail_usuario = '".$_SESSION['email']."'");
	$oSmarty->assign('estado',$estado);
	$oSmarty->assign('dom',$dom);
	$oSmarty->assign("titulo","Perfil de usuario");
	$oSmarty->display("perfil.html.tpl");
}else{
	header("Location: index.php");
}
?>
