<?php
/* Smarty version 3.1.30, created on 2017-05-15 22:54:29
  from "/var/www/html/sexshop/sexshop/templates/perfil.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591a77f51a3f48_92201873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '950e41c1b7eaff43045239ce9b266caa26cd11d7' => 
    array (
      0 => '/var/www/html/sexshop/sexshop/templates/perfil.html.tpl',
      1 => 1494904934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_591a77f51a3f48_92201873 (Smarty_Internal_Template $_smarty_tpl) {
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
 src='js/domicilio/municipio2.js'><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src='js/domicilio/ciudad2.js'><?php echo '</script'; ?>
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
				<div class='col-lg-4 col-md-4 col-sm-12'></div>
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
							<div class='col-lg-12'>
								<button class='btn btn-primary' id="modificar2">Modificar Direccion</button>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'></div>
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
" required>
					<label>Apellido paterno </label><input type='text' name='paterno' id='paterno' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_paterno_usuario'];?>
" required>
					<label>Apellido materno </label><input type='text' name='materno' id='materno' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Va_materno_usuario'];?>
" required>
					<label>Fecha de nacimiento</label><input type='text' name='nacimiento' id='nacimiento' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Df_nacimiento_usuario'];?>
" required>
					<label>Telefono </label><input type='text' name='telefono' id='telefono' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Btelefono_usuario'];?>
" required>
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
				<form id='fm2' method='POST'>
					<input type="hidden" name='id' value='<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['id_usuario'];?>
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
$__section_lsl_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_lsl']) ? $_smarty_tpl->tpl_vars['__smarty_section_lsl'] : false;
$__section_lsl_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['estado']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lsl_1_total = $__section_lsl_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = new Smarty_Variable(array());
if ($__section_lsl_1_total != 0) {
for ($__section_lsl_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index'] = 0; $__section_lsl_1_iteration <= $__section_lsl_1_total; $__section_lsl_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lsl']->value['index']++){
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
if ($__section_lsl_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_lsl'] = $__section_lsl_1_saved;
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
					<label>Direccion </label><input type='text' name=direccion class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_st']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_st']->value['index'] : null)]['Vdireccion_usuario'];?>
"/>
					<button class='btn btn-primary' name='guardar' id='guardado2'>Realizar cambios</button>
				</form>
			</div>
			
			
			<?php
}
}
if ($__section_st_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_st'] = $__section_st_0_saved;
}
?>
	</body>
</html>
<?php }
}
