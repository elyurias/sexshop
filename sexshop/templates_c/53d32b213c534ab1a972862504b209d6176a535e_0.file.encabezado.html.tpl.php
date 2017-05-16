<?php
/* Smarty version 3.1.30, created on 2017-05-15 22:53:40
  from "/var/www/html/sexshop/sexshop/templates/encabezado/encabezado.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591a77c4922b04_04903169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d32b213c534ab1a972862504b209d6176a535e' => 
    array (
      0 => '/var/www/html/sexshop/sexshop/templates/encabezado/encabezado.html.tpl',
      1 => 1494803740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591a77c4922b04_04903169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center>
<section class='container-fluid'>
		<br>
		<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-12">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-4 col-md-4 col-sm-12">
					<h1 align="center"><br><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
				</article>
				<article class='col-lg-5 col-md-5 col-sm-12'>
				  <div class='btn-group'>
					<?php if ($_smarty_tpl->tpl_vars['es']->value == 'op') {?>
						<?php
$__section_lop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_lop']) ? $_smarty_tpl->tpl_vars['__smarty_section_lop'] : false;
$__section_lop_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_lop_1_total = $__section_lop_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_lop'] = new Smarty_Variable(array());
if ($__section_lop_1_total != 0) {
for ($__section_lop_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index'] = 0; $__section_lop_1_iteration <= $__section_lop_1_total; $__section_lop_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index']++){
?>
							<?php if ($_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index'] : null)]['Itipo_usuario'] == 0) {?>
								<a class='btn btn-danger' href='hr.php'>Admin</a>
							<?php }?>
							<a class='btn'><?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_lop']->value['index'] : null)]['Vnombre_usuario'];?>
</a>
							<a class='btn btn-primary' href='carrito.php'>Carrito</a>
						<?php
}
}
if ($__section_lop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_lop'] = $__section_lop_1_saved;
}
?>
						<a href='perfil.php' class='btn btn-primary'>Mi perfil</a>
						<a href="php/login/logout.php" class='btn btn-warning'>Cerrar Sesion</a>
					<?php } else { ?>
						<a href='registro.php' class='btn btn-primary'>Registrate</a><br>
						<a href='login.php' class='btn btn-warning'>Iniciar sesion</a>
					<?php }?>
				  </div>
				</article>
		</section>
		<section class='row'>
			<div class='col-lg-12' style='background-color:black;'>
			<br>
			</div>
		</section>
</section>
</center>
<?php }
}
