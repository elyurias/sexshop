<?php
	require_once dirname(__FILE__)."/../include/database.php";
	require_once dirname(__FILE__)."/sesion/sesion.class.php";
	$db = getDb();
	$s = new sesion();
	$s->iniciarSesion();
	$status = False;
	if(isset($_SESSION['email'])){
		$oSmarty->assign("es","op");
		$usu = $db->GetAll("SELECT * FROM usuario WHERE Vemail_usuario = '".$_SESSION['email']."'");
		$oSmarty->assign('usu',$usu);
		$status = True;
	}else{
	    $oSmarty->assign('es','nil');
		$status = False;
	}
?>
