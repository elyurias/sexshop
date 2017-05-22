<?php
/* Smarty version 3.1.30, created on 2017-05-21 21:57:48
  from "/var/www/html/sexshop/sexshop/templates/perfil.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592253ac7e4be9_56621201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '950e41c1b7eaff43045239ce9b266caa26cd11d7' => 
    array (
      0 => '/var/www/html/sexshop/sexshop/templates/perfil.html.tpl',
      1 => 1495421866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_592253ac7e4be9_56621201 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/bootstrap.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link href='css/encabezado.css' rel='stylesheet'>
		<?php echo '<script'; ?>
 src='js/datos_usuario/perfilmod.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='js/datos_usuario/perfilmodDir.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src='js/datos_usuario/perfilmodPass.js'><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src='js/domicilio/municipio2.js'><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src='js/domicilio/ciudad2.js'><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src='js/datos_usuario/password.js'><?php echo '</script'; ?>
>
	</head>
	<body>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php
$__section_st_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_st']) ? $_smarty_tpl->tpl_vars['__smarty_section_st'] : false;
$__section_st_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_st_0_total = $__section_st_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_st'] = new Smarty_Variable(array());
if ($__section_st_0_total != 0) {
for ($__section_st_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] = 0; $__section_st_0_iteration <= $__section_st_0_total; $__section_st_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']++){
?>
		<center>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-lg-4 col-md-4 col-sm-12'>
				<br>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'>
					<div class='container-fluid'>
						<div class='row'>
							<div class='col-lg-12'>
								<legend>Datos de usuario</legend>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Nombre:</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vnombre_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_paterno_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_materno_usuario'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Fecha de nacimiento</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Df_nacimiento_usuario'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Telefono</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Btelefono_usuario'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Email</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vemail_usuario'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Sexo</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php if ($_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Csexo_usuario'] == 'M') {?>Masculino<?php } else { ?>Femenino<?php }?></h7>
							</div>
						</div>
						<div class='row'>
						<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_usuario'];?>
'>
							<div class='col-lg-12'>
								<button class='btn btn-primary' id="modificar">Modificar</button>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
								<legend>Direccion del usuario</legend>
							</div>
						</div>
						<?php
$__section_sss_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sss']) ? $_smarty_tpl->tpl_vars['__smarty_section_sss'] : false;
$__section_sss_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dom']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sss_1_total = $__section_sss_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sss'] = new Smarty_Variable(array());
if ($__section_sss_1_total != 0) {
for ($__section_sss_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index'] = 0; $__section_sss_1_iteration <= $__section_sss_1_total; $__section_sss_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index']++){
?>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Estado</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['dom']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index'] : null)]['estado'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Municipio</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['dom']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index'] : null)]['municipio'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Asentamiento</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['dom']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index'] : null)]['asentamiento'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Codigo postal</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['dom']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sss']->value['index'] : null)]['cp'];?>
</h7>
							</div>
						</div>
						<?php
}
}
if ($__section_sss_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sss'] = $__section_sss_1_saved;
}
?>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Direccion</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vdireccion_usuario'];?>
</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-12'>
								<button class='btn btn-primary' id="modificar2">Modificar Direccion</button>
							</div>
							<div class='col-lg-12'><br></div>
							<div class='col-lg-12'>
								<button class='btn btn-danger' id="modificar3">Solicitar tambio de password</button>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'>
				<br>
				</div>
			</div>
		</div>
		</center>   
			<div id="dialog" title="Modificar datos de usuario">
				<form id='fm' method='POST'>
					<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_usuario'];?>
'>
					<input type="hidden" id='nac' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Df_nacimiento_usuario'];?>
'>
					<label>Nombre </label><input type='text' name='nombre' id='nombre' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vnombre_usuario'];?>
" class='form-control' required>
					<label>Apellido paterno </label><input type='text' name='paterno' id='paterno' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_paterno_usuario'];?>
" class='form-control' required>
					<label>Apellido materno </label><input type='text' name='materno' id='materno' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_materno_usuario'];?>
" class='form-control' required>
					<label>Fecha de nacimiento</label><input type='text' name='nacimiento' id='nacimiento' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Df_nacimiento_usuario'];?>
" class='form-control' required>
					<label>Telefono </label><input type='text' name='telefono' id='telefono' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Btelefono_usuario'];?>
" class='form-control' required>
					<label>Sexo </label> F:<input type='radio' name='sexo' id='sexo' value="F" 
					<?php if ($_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Csexo_usuario'] == 'F') {?>
					 checked="checked"
					<?php }?>
					>
					M:<input type='radio' name='sexo' id='sexo' value="M"
					<?php if ($_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Csexo_usuario'] == 'M') {?>
					 checked="checked"
					<?php }?>
					>
					<button class='btn btn-primary' name='guardar' id='guardado1'>Realizar cambios</button>
				</form>
			</div>
			
			<div id="dialog2" title="Modificar datos de usuario (Direccion)">
				<form id='fm2' method='POST' onsubmit="return abra();">
					<input type="hidden" id = 'ide' name='id' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_usuario'];?>
'>
					<input type="hidden" name='mun' id='mun' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['idMunicipio'];?>
'>
					<input type="hidden" name='nim' id='idn' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_direccion'];?>
'>
					<label>Pais </label><select class='form-control'><option>Mexico</option></select>
					<label>Estado </label>
						<select id='estado' class='form-control' name='estado'>
							<option>Selecciona una opcion</option>
							<?php
$__section_lsl_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl'] : false;
$__section_lsl_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lsl_2_total = $__section_lsl_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = new Smarty_Variable(array());
if ($__section_lsl_2_total != 0) {
for ($__section_lsl_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] = 0; $__section_lsl_2_iteration <= $__section_lsl_2_total; $__section_lsl_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']++){
?>
								<option value='<?php echo $_smarty_tpl->tpl_vars['estado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] : null)]['idEstado'];?>
' 
									<?php if ($_smarty_tpl->tpl_vars['estado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] : null)]['idEstado'] == $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['idEstado']) {?>
										selected
									<?php }?>
									>
									<?php echo $_smarty_tpl->tpl_vars['estado']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] : null)]['estado'];?>

								</option>
							<?php
}
}
if ($__section_lsl_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = $__section_lsl_2_saved;
}
?>
						</select>
					<label>Municipio </label>
						<select id='municipio' class='form-control' name='municipio'>
						
						</select>
					<label>Asentamiento </label>
						<select id='ciudad' class='form-control' name='ciudad'>
						
						</select>
					<label>Codigo Postal </label><input type='text' name=cp class='form-control' id='cp'/>
					<label>Direccion </label><input type='text' id='dirusu' name=direccion class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vdireccion_usuario'];?>
"/>
					<button class='btn btn-primary' name='guardar' id='guardado2'>Realizar cambios</button>
				</form>
			</div>
			<div id="dialog3" title="Modificar Password" onsubmit="return false;">
				<form id='fm3' method='POST'>
					<input type="hidden" id='ide' name='id' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_usuario'];?>
'>
					<input type="hidden" id='password1' name='org' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vpassword_usuario'];?>
'>
					<label>Password anterior </label><input type='password' name='nombre' id='psss' class='form-control' required>
					<label>Nuevo password </label><input type='password' name='nombre' id='pass1' class='form-control' required>
					<label>Repetir password </label><input type='password' name='nombre' id='pass2' class='form-control' required>
					<button class='btn btn-primary' name='guardar' id='guardado3'>Cambiar Password</button>
				</form>
			</div>
			<?php
}
}
if ($__section_st_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_st'] = $__section_st_0_saved;
}
?>
			<div id='passR1' title="Guia de creacion de contrasenias">
			</div>
			<div id='er' title="Errores">
			</div>
			<div id='cambo' title="Se ha cambiado la contrasenia">
				Se redireccionara a la pagina principal 5 segundos...
			</div>
	</body>
</html>
<?php }
}
