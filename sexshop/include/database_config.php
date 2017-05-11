<?php
	/*Si no estan definidas estas variables, entonces las define
	como vatiables de entorno dentro de PHP
	*/
 if(!defined ("DATABASE_HOST")){
     define ("DATABASE_DRIVER","mysqli");
     define ("DATABASE_HOST","localhost"); 
     define ("DATABASE_USER","root"); 
     define ("DATABASE_PASSWD","root");
     define ("DATABASE_NAME","sexshop2");       
 }
?>
