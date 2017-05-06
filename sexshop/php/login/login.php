<?php
/*
Clase login de SEXSHOP (PHP)
Equipo 3-> Programacion de Bases de Datos
*/
	/*
		Obtenemos la funcion getDb para el uso en esta validacion
	*/
	require_once dirname(__FILE__)."../../../include/database.php";
	class login{
		/*Asignacion de variables estaticas, para el cambio en todas las instancias de la misma*/
		public static $email;
		public static $password;
		/*
		*/
		public function __construct($email, $password){
			self::$email = $email;
			self::$password = $password;
		}
		public function verificar(){
			$db = getDb();
			$res = $db->GetAll("SELECT Vemail_usuario, Itipo_usuario FROM usuario WHERE Vemail_usuario = '".self::$email."' AND Vpassword_usuario = '".self::$password."'");
			if(SIZEOF($res)==1){
				return array($res[0]['Vemail_usuario'],$res[0]['Itipo_usuario']);
			}else{
				return array();
			}
		}
		public function cifrado($cadena){
			return $cadena;
		}
		public function crearSesion(){
			require_once dirname(__FILE__).'/../sesion/sesion.class.php';
			$s = new sesion();
			$a = $this->verificar();
			//$s->iniciarSesion();
			//$s->destruirSesion();
			if(SIZEOF($a)==2){
				//$s->iniciarSesion();
				$s->setData($a);
				$s->asignarVariables();
				return True;
			}else{
				//print_r($a);
				return False;
			}
		}
	}
	//$log = new login("ving_bart@hotmail.com","irving");
	//print($log->crearSesion());
?>
