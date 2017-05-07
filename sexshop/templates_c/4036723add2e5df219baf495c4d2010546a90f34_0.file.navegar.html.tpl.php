<?php
/* Smarty version 3.1.30, created on 2017-05-06 20:19:24
  from "/var/www/html/repoGit/sexshop/sexshop/templates/encabezado/navegar.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e761c90a262_96389755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4036723add2e5df219baf495c4d2010546a90f34' => 
    array (
      0 => '/var/www/html/repoGit/sexshop/sexshop/templates/encabezado/navegar.html.tpl',
      1 => 1494119837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590e761c90a262_96389755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='row'>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-6 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
			</div>
			<div class='row'>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-6 col-md-4 col-sm-12 caja">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	<?php if ($_smarty_tpl->tpl_vars['es']->value == 'op') {?>
      		<a class="nav-item nav-link" href="php/login/logout.php">Cerrar Sesion</a>
	<?php } else { ?>
      	        <a class="nav-item nav-link" href="login.php">Inicio de Sesion</a>
    <?php }?>
	<a class="nav-item nav-link" href="index.php">Pagina de Inicio</a>
      		<a class="nav-item nav-link" href="product.php">Productos</a>
	<?php if ($_smarty_tpl->tpl_vars['es']->value == 'op') {?>
		<a class="nav-item nav-link selected" href="#">Bienvenido Usuario: 
		<?php
$__section_n_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_n']) ? $_smarty_tpl->tpl_vars['__smarty_section_n'] : false;
$__section_n_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_n_0_total = $__section_n_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_n'] = new Smarty_Variable(array());
if ($__section_n_0_total != 0) {
for ($__section_n_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] = 0; $__section_n_0_iteration <= $__section_n_0_total; $__section_n_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']++){
?>
		<?php echo $_smarty_tpl->tpl_vars['usu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_n']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_n']->value['index'] : null)]['Vnombre_usuario'];?>

		<?php
}
}
if ($__section_n_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_n'] = $__section_n_0_saved;
}
?>
		</a>
	<?php }?>
	
    </div>
  </div>
</nav>
		</article>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>			
			</div>
<?php }
}
