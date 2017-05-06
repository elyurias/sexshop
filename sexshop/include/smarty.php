<?php
/*
	Configuramos la direccion de los teplates copilados, y a donde seran almacenados, asi como el uso general de la utilidad de la
	variable $oSmarty en todos los archivos PHP donde los ocupemos
*/
ini_set('display_errors', 1);
require_once dirname(__FILE__)."/../libs/smarty-3.1.30/libs/Smarty.class.php";
$oSmarty = new Smarty();
$oSmarty->template_dir=dirname(__FILE__)."/../templates/";
$oSmarty->compile_dir =dirname(__FILE__)."/../templates_c/";
?>
