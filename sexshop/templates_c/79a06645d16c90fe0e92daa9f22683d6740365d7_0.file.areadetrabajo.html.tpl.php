<?php
/* Smarty version 3.1.30, created on 2017-04-30 01:07:46
  from "/projects/CursoJQuery/proyectosexshop/sexshop/templates/areadetrabajo.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590538e277d095_90470346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a06645d16c90fe0e92daa9f22683d6740365d7' => 
    array (
      0 => '/projects/CursoJQuery/proyectosexshop/sexshop/templates/areadetrabajo.html.tpl',
      1 => 1493511986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/datatable.html.tpl' => 1,
    'file:encabezado/navegar.html.tpl' => 1,
  ),
),false)) {
function content_590538e277d095_90470346 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/datatable.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link href='css/encabezado.css' rel='stylesheet'>
		<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src='js/tablaProductos.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src='js/acciones.js'><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class='container-fluid'>
			<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-9 col-md-9 col-sm-10">
					<h1 align="left"><br>Productos</h1>
				</article>
			</section>
			<?php $_smarty_tpl->_subTemplateRender("file:encabezado/navegar.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
			<section class='row'>
				<div class='col-lg-12'>
				<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'admin') {?>
					<a class='btn btn-primary' href='insertar.php'>Registrar nuevo producto</a>
				<?php }?>
				<table align=center id='productos'>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Descripcion</th>
							<th>Marca</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
$__section_cc_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cc']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc'] : false;
$__section_cc_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['productos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cc_0_total = $__section_cc_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cc'] = new Smarty_Variable(array());
if ($__section_cc_0_total != 0) {
for ($__section_cc_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] = 0; $__section_cc_0_iteration <= $__section_cc_0_total; $__section_cc_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']++){
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Vnombre_producto'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['FprecioVenta_producto'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Vdescripcion_producto'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['Vnombre_marca'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'admin') {?>
								<td>
									<a class='btn btn-info' href='actualizar.php?id=<?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['SERIAL'];?>
'>Modificar</a>
									<button onclick='eliminar(<?php echo $_smarty_tpl->tpl_vars['productos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cc']->value['index'] : null)]['SERIAL'];?>
);' class='btn btn-primary'>Eliminar</button>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'usuario') {?>
								<td>Usuario normal</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'sin') {?>
								<td>Registrate para mas</td>
							<?php }?>
						</tr>
						<?php
}
}
if ($__section_cc_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cc'] = $__section_cc_0_saved;
}
?>
					</tbody>
					<tfoot>
					</tfoot>
				</table>
				</div>
			</section>
		</div>
	</body>
	
</html>
<?php }
}
