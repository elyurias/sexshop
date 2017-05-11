<?php
	session_destroy();
	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."/php/sesion/sesion.class.php";
	include("php/login/login.php");
	require_once dirname(__FILE__)."/include/smarty.php";
	$oSmarty->assign('titulo','Login');
	$oSmarty->assign("op","A");
	$oSmarty->assign("es","A");
		$a = new sesion();
		$a->iniciarSesion();
		$sesionActiva = False;
		if(isset($_SESSION['email'])){
			$sesionActiva = True;
			header("location:index.php");
		}
	if(!isset($_POST['accion'])){
		$oSmarty->display("login/login.html.tpl");
	}else{
			$lg = new login($_POST['email'],$_POST['pass']);
			$estado = $lg->crearSesion();
			if($estado and !$sesionActiva){
				$ar = $a->getVariables();
				$oSmarty->assign("datos",$ar);
				header("location:index.php");
			}
			if(!$estado){
				$oSmarty->assign("op","B");
				$oSmarty->display("login/login.html.tpl");
			}
	}
?>
