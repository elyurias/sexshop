<?php
/* Smarty version 3.1.30, created on 2017-05-10 21:48:13
  from "/var/www/html/repoGit/sexshop/sexshop/templates/registro.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5913d0eda57234_77033696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '336fc6f1277daa2d03bd3051a061110ca6e71297' => 
    array (
      0 => '/var/www/html/repoGit/sexshop/sexshop/templates/registro.html.tpl',
      1 => 1494470891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_5913d0eda57234_77033696 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 src='js/domicilio/municipio.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='js/domicilio/ciudad.js'><?php echo '</script'; ?>
>
</head>
<body>
	<?php $_smarty_tpl->_subTemplateRender("file:encabezado/encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<center>
	<section class='container>'>
	
		<form action='php/registro.php' method='post' id='fm'>
			<div id='formulario'>
				<h3>Datos de usuario</h3>
				<section>
				<table>
					<tr><td>Nombre:</td><td><input type='text' name='nombre' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Apellido paterno:</td><td><input type='text' name='paterno' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Apellido materno:</td><td><input type='text' name='materno' class='form-control'/></td><td></td><td></td></tr>
					<tr id='clo'><td>Email:</td><td><input type='text' name='emailA' id='email'class='form-control'/></td><td>Repetir email:</td><td><input type='text' name='emailB' id='emailB' class='form-control'/></td></tr>
					<tr><td>Telefono:</td><td><input type='text' name='telefono' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Sexo:</td><td></td><td>F:<input type='radio' name='sexo' value='F' class='form-control'></td><td>M: <input type='radio' name='sexo' value='M' class='form-control'></td></tr>
				</table>
				</section>
			<h3>Direccion</h3>
				<section>
				<table>					
					<tr><td>Pais:</td><td><select class='form-control'>
											<option>Mexico</option>
										  </select></td><td></td><td></td></tr>
					<tr><td>Estado:</td><td>
						<select id='estado' class='form-control' name='estado'>
							<option>Selecciona una opcion</option>
							<?php
$__section_lsl_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl'] : false;
$__section_lsl_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lsl_0_total = $__section_lsl_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = new Smarty_Variable(array());
if ($__section_lsl_0_total != 0) {
for ($__section_lsl_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] = 0; $__section_lsl_0_iteration <= $__section_lsl_0_total; $__section_lsl_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']++){
?>
								<option value='<?php echo $_smarty_tpl->tpl_vars['estado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] : null)]['idEstado'];?>
'>
									<?php echo $_smarty_tpl->tpl_vars['estado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] : null)]['estado'];?>

								</option>
							<?php
}
}
if ($__section_lsl_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = $__section_lsl_0_saved;
}
?>
						</select>
					</td><td></td><td></td></tr>
					<tr><td>Minicipio:</td><td>
						
						<select id='municipio' class='form-control' name='municipio'>
							<option value=0>Selecciona un estado</option>
						</select></td><td></td><td></td></tr>
						
					<tr><td>Ciudad:</td><td><select id='ciudad' class='form-control' name='ciudad'>
						<option>Selecciona un municipio</option>
					</select></td><td></td><td></td></tr>
					<tr><td>Codigo Postal:</td><td><select id='cp' class='form-control' name='cp'>
						<option>Selecciona un Ciudad</option>
					</select>
					</td><td></td><td></td></tr>
					<tr><td>Direccion:</td><td><input type='text' name='direccion' class='form-control'/></td><td></td><td></td></tr>
				</table>
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
