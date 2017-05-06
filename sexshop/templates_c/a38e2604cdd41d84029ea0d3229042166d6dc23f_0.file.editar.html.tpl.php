<?php
/* Smarty version 3.1.30, created on 2017-04-30 01:33:30
  from "/projects/CursoJQuery/proyectosexshop/sexshop/templates/editar.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59053eea756808_67348584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38e2604cdd41d84029ea0d3229042166d6dc23f' => 
    array (
      0 => '/projects/CursoJQuery/proyectosexshop/sexshop/templates/editar.html.tpl',
      1 => 1493516007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/datatable.html.tpl' => 1,
    'file:encabezado/navegar.html.tpl' => 1,
  ),
),false)) {
function content_59053eea756808_67348584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/datatable.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link href='css/encabezado.css' rel='stylesheet'>
		<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src='js/tablaProductos.js'><?php echo '</script'; ?>
>
		
	</head>
	<body>
		<div class='container-fluid'>
			<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-9 col-md-9 col-sm-10">
					<h1 align="left"><br>Editar producto</h1>
				</article>
			</section>
			<?php $_smarty_tpl->_subTemplateRender("file:encabezado/navegar.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>

<center>
<?php
$__section_cc_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cc']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc'] : false;
$__section_cc_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dato']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cc_0_total = $__section_cc_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cc'] = new Smarty_Variable(array());
if ($__section_cc_0_total != 0) {
for ($__section_cc_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] = 0; $__section_cc_0_iteration <= $__section_cc_0_total; $__section_cc_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']++){
if ($_smarty_tpl->tpl_vars['modo']->value == "editar") {?>
		<form name=forma method="POST" action='actualizar.php?id=<?php echo $_smarty_tpl->tpl_vars['dato']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['SERIAL'];?>
'>
			<h1>Actualizar Producto</h1>
<?php } else { ?>
		<form name=forma method="POST" action='insertar.php'>
			<h1>Registrar </h1>
<?php }?>
	<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
	<label>Nombre</label><input type="text" name="nombre" value='<?php echo $_smarty_tpl->tpl_vars['dato']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Vnombre_producto'];?>
' required><br><BR>
	<label>Descripcion</label><input type="text" name="descripcion" value='<?php echo $_smarty_tpl->tpl_vars['dato']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Vdescripcion_producto'];?>
' required><br><BR>
	<label>Existencia</label><input type="text" name="cantidad" value='<?php echo $_smarty_tpl->tpl_vars['dato']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Iexistencia_producto'];?>
' required><br><br>
	<label>Marca</label>
		<select name=marca>
			<?php
$__section_cd_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cd']) ? $_smarty_tpl->tpl_vars['__smarty_section_cd'] : false;
$__section_cd_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['marca']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cd_1_total = $__section_cd_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cd'] = new Smarty_Variable(array());
if ($__section_cd_1_total != 0) {
for ($__section_cd_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index'] = 0; $__section_cd_1_iteration <= $__section_cd_1_total; $__section_cd_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index']++){
?>
				<option value='<?php echo $_smarty_tpl->tpl_vars['marca']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index'] : null)]['id_marca'];?>
' 
					<?php if ($_smarty_tpl->tpl_vars['marca']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index'] : null)]['id_marca'] == $_smarty_tpl->tpl_vars['dato']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['id_marca']) {?>
						selected
					<?php }?>
					>
					<?php echo $_smarty_tpl->tpl_vars['marca']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cd']->value['index'] : null)]['Vnombre_marca'];?>

				</option>
			<?php
}
}
if ($__section_cd_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cd'] = $__section_cd_1_saved;
}
?>
		</select><br><br>
		<?php if ($_smarty_tpl->tpl_vars['modo']->value == "editar") {?>
			<input type="submit" name="s" value='Actualizar'>
		<?php } else { ?>
			<input type="submit" name="s" value='Registrar'>
		<?php }?>
		
</form>
<?php
}
}
if ($__section_cc_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cc'] = $__section_cc_0_saved;
}
?>
</center>
</div></body></html>
<?php }
}
