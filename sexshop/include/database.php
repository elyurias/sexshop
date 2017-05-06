<?php
require_once dirname(__FILE__) ."/../libs/adodb/adodb.inc.php";
require_once dirname(__FILE__) ."/database_config.php";
	/*Retorno de coneccio de la base de datos por ADO
	  En esta funcion, se crea la coneccion a la base de datos
	  y se retorna una variable estatica, la cual cambia respecto a todas las instancias de getDb...
	*/
	function getDb (){
	  static $db;
	 if (!isset ($db)){
	   $db = ADONewConnection (DATABASE_DRIVER);
	   $db -> connect (DATABASE_HOST,DATABASE_USER,DATABASE_PASSWD,	DATABASE_NAME);
	   $db -> Execute ("SET NAMES 'utf8'");
	  }
	return $db;
	}

?>