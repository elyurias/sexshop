<?php

	ini_set('display_errors', 1);
	require_once dirname(__FILE__)."/../include/smarty.php";
	include('sesion.php');
	echo "DELETE FROM producto WHERE id_producto = ".$_GET['id'];
	$db->execute("DELETE FROM producto WHERE SERIAL = ".$_GET['id']);
	header('location:../product.php');
?>
