<?php
ini_set('display_errors', 1);
	require_once dirname(__FILE__).'/../sesion/sesion.class.php';
	$s = new sesion();
	$s->iniciarSesion();
	$s->destruirSesion();
	header("location:../../index.php");
?>
