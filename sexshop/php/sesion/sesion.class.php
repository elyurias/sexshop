<?php
	class sesion{
		public static $datos;
		public function setData($d){//Vamos a asignar las variables de usuario email, y tipo
			//ini_set('session.gc_maxlifetime',60);
			self::$datos = array($d[0], $d[1]);
		}
		public function iniciarSesion(){
			session_start();//inicia sesion
		}
		public function asignarVariables(){
			$_SESSION['email'] = self::$datos[0];
			$_SESSION['tipo'] = self::$datos[1];
		}
		public function getVariables(){
			return array('email'=>$_SESSION['email'],'tipo'=>$_SESSION['tipo']);
		}
		public function destruirSesion(){
			session_destroy();
		}
		public function isSession(){
			if(isset($_SESSION['email'])){
				return True;
			}else{
				return False;
			}
		}
	}
?>
