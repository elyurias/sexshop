<?php
/* Smarty version 3.1.30, created on 2017-05-15 19:45:01
  from "/var/www/html/DosrepoGit/sexshop/sexshop/templates/registro.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591a4b8d951e99_75860180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1e170323e22440ce771bddd09a51ab72d719c5' => 
    array (
      0 => '/var/www/html/DosrepoGit/sexshop/sexshop/templates/registro.html.tpl',
      1 => 1494816876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_591a4b8d951e99_75860180 (Smarty_Internal_Template $_smarty_tpl) {
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
 src='js/datos_usuario/reg.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='js/datos_usuario/password.js'><?php echo '</script'; ?>
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
	
		<form method='post' id='fm' autocomplete="off">
			<div id='formulario'>
				<h3>Datos de usuario</h3>
				<section>
				<table>
					<tr><td>Nombre:</td><td><input type='text' name='nombre' class='form-control' id='nombre'/></td><td></td><td></td></tr>
					<tr><td>Apellido paterno:</td><td><input type='text' name='paterno' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Apellido materno:</td><td><input type='text' name='materno' class='form-control'/></td><td></td><td></td></tr>
					<tr id='clo'><td>Email:</td><td><input type='text' name='emailA' id='email'class='form-control'/></td><td>Repetir email:</td><td><input type='text' name='emailB' id='emailB' class='form-control'/></td></tr>
					<tr><td>Telefono:</td><td><input type='text' name='telefono' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Sexo:</td><td></td><td>F:<input type='radio' name='sexo' value='F' class='form-control'></td><td>M: <input type='radio' name='sexo' value='M' class='form-control'></td></tr>
					<tr><td>Fecha de nacimiento:</td><td></td><td><input type='text' name='nacimiento' class='form-control' id='nacimiento'></td><td></td></tr>
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
						
					<tr><td>Asentamiento:</td><td><select id='ciudad' class='form-control' name='ciudad'>
						<option>Selecciona un municipio</option>
					</select></td><td></td><td></td></tr>
					<tr><td>Codigo Postal:</td><td><input type='text' name=cp class='form-control' id='cp'/>
					</td><td></td><td></td></tr>
					<tr><td>Direccion:</td><td><input type='text' name='direccion' class='form-control'/></td><td></td><td></td></tr>
				</table>
				</section>
			<h3>Crear password</h3>
				<section>
				<div class='row'>
					<div class='col-lg-4'></div>
					<table class='col-lg-4'><center>
						<tr><td>Password: </td>
							<td><input type='password' name='pass1' id='pass1' value='' required ></td>
							<td>
								<div id='passR1' title="Guia de creacion de contrasenias">
								</div>
							</td>
							</tr>
							<tr><td>Password: Repetir </td>
							<td><input type='password' name='pass2' id='pass2' value='' required >
							</td>
							<td>
								<div id='passR2'>
								</div>
							</td>
						</tr></center>
					</table>
					<div class='col-lg-4'></div>
				</div>
				</section>
			<h3>Registrar</h3>
				<section>
				<div class='row'>
					<div class='col-lg-12'><center>
					<button id="registro" class='btn btn-primary'>Registrar nuevo usuario</button>
					<!--<input type='submit' name='<?php if ($_smarty_tpl->tpl_vars['modo']->value == 'registrar') {?>reg<?php } else { ?>mod<?php }?>' value='Registrar' class='btn btn-primary'>
					--></center></div>
				</div>
			</section>
		</div><div id='data' title="Mensaje de errores"></div>
	</form>
	<section>
	</center>
</body>
</html>
<?php }
}
