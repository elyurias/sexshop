<?php 
ini_set('display_errors', 1);
require_once dirname(__FILE__)."/include/smarty.php";
include("php/sesion.php");//implementada $s (sesion) $db (base de datos)
$aProductos= $db->GetAll("select p.SERIAL, p.Vnombre_producto, p.Vdescripcion_producto, 
p.FprecioCompra_producto, p.FprecioVenta_producto, p.Iexistencia_producto, p.Iestado_producto, p.id_marca, m.Vnombre_marca, m.Vdireccion_web_marca 
 from producto p inner join marca m on p.id_marca = m.id_marca");//traer todos los datos 
//mostrar
$oSmarty->assign("productos",$aProductos);//oSmarty es la variable antes creada
//print_r(array('email'=>'anonimo','tipo'=>2));
//print_r($s->getVariables());
$t = 'sin';
$u = 'anonimo';
if($status){
	$datos = $s->getVariables();
	if($datos['tipo'] == 0){
		$t = 'admin';
	}
	if($datos['tipo'] == 1){
		$t = 'usuario';
	}
	$u = $datos['email'];
}
$oSmarty->assign("tipo",$t);
$oSmarty->assign("usuario",$u);
$oSmarty->display("areadetrabajo.html.tpl");
//$oSmarty->display("holamundo.html.tpl");
?>


