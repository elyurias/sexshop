<?php
/* Smarty version 3.1.30, created on 2017-05-06 22:58:15
  from "/var/www/html/repoGit/sexshop/sexshop/templates/registro.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e9b570ed9b5_37953601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336fc6f1277daa2d03bd3051a061110ca6e71297' => 
    array (
      0 => '/var/www/html/repoGit/sexshop/sexshop/templates/registro.html.tpl',
      1 => 1494128877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_590e9b570ed9b5_37953601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html xml:lang="es" lang="es">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<?php $_smarty_tpl->_subTemplateRender("file:encabezado/bootstrap.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo '<script'; ?>
 src='js/jqueryui_registro.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='js/datos_usuario/existeEmail.js'><?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:encabezado/encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<center>
	<section class='container>'>
	
		<form action='php/registro.php' method='post'>
			<div id='formulario'>
				<h3>Datos de usuario</h3>
				<section>
				<table>
					<tr><td>Nombre:</td><td><input type='text' name='nombre' /></td><td></td><td></td></tr>
					<tr><td>Apellido paterno:</td><td><input type='text' name='paterno' /></td><td></td><td></td></tr>
					<tr><td>Apellido materno:</td><td><input type='text' name='materno' /></td><td></td><td></td></tr>
					<tr id='clo'><td>Email:</td><td><input type='text' name='emailA' id='email'/></td><td>Repetir email:</td><td><input type='text' name='emailB' id='emailB' /></td></tr>
					<tr><td>Telefono:</td><td><input type='text' name='telefono' /></td><td></td><td></td></tr>
					<tr><td>Sexo:</td><td></td><td>F:<input type='radio' name='sexo' value='F'></td><td>M: <input type='radio' name='sexo' value='M'></td></tr>
				</table>
				</section>
			<h3>Direccion</h3>
				<section>
				<div class='row'>
				</div>
				</section>
			<h3>Crear password</h3>
				<section>
				<div class='row'>
				</div>
				</section>
			<h3>Registrar</h3>
				<section>
				<div class='row'>
					<input type='submit' name='<?php if ($_smarty_tpl->tpl_vars['modo']->value == 'registrar') {?>reg<?php } else { ?>mod<?php }?>' value='Registrar' class='btn btn-primary'>
				</div>
			</section>
		</div>
	</form>
	<section>
	</center>
</body>
</html>
<?php }
}
