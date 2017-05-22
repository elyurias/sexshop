<?php
	require_once dirname(__FILE__)."../../../include/database.php";
	$db = getDb();
	$p = $db->Execute("CALL modBase2Usuario(".$_POST['id'].",".$_POST['ciudad'].",'".$_POST['dirusu']."')");
?>
