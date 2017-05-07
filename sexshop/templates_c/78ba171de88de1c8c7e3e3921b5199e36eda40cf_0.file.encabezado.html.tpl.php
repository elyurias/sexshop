<?php
/* Smarty version 3.1.30, created on 2017-05-06 20:23:37
  from "/var/www/html/repoGit/sexshop/sexshop/templates/encabezado/encabezado.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e7719e3a047_53471274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78ba171de88de1c8c7e3e3921b5199e36eda40cf' => 
    array (
      0 => '/var/www/html/repoGit/sexshop/sexshop/templates/encabezado/encabezado.html.tpl',
      1 => 1494120214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590e7719e3a047_53471274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class='container-fluid'>
		<br>
		<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-7 col-md-6 col-sm-10">
					<h1 align="left"><br><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
				</article>
				<article class='col-lg-2 col-md-3 col-sm-12'>
					<?php if ($_smarty_tpl->tpl_vars['es']->value == 'op') {?>
						<a href='perfil.php' class='btn btn-primary'>Mi perfil</a>
						<a href="php/login/logout.php" class='btn btn-warning'>Cerrar Sesion</a>
					<?php } else { ?>
						<a href='registro.php' class='btn btn-primary'>Registrate</a><br>
						<a href='login.php' class='btn btn-warning'>Iniciar sesion</a>
					<?php }?>
				</article>
		</section>
		<section class='row'>
			<div class='col-lg-12' style='background-color:black;'>
			<br>
			</div>
		</section>
</section>
<?php }
}
