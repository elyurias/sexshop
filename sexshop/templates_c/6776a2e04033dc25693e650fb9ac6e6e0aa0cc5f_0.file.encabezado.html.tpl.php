<?php
/* Smarty version 3.1.30, created on 2017-05-11 20:04:01
  from "/var/www/html/DosrepoGit/sexshop/sexshop/templates/encabezado/encabezado.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59150a019c6447_10654378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6776a2e04033dc25693e650fb9ac6e6e0aa0cc5f' => 
    array (
      0 => '/var/www/html/DosrepoGit/sexshop/sexshop/templates/encabezado/encabezado.html.tpl',
      1 => 1494551039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59150a019c6447_10654378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<center>
<section class='container-fluid'>
		<br>
		<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-6 col-md-5 col-sm-10">
					<h1 align="center"><br><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
				</article>
				<article class='col-lg-3 col-md-4 col-sm-12'>
				  <div class='btn-group'>
					<?php if ($_smarty_tpl->tpl_vars['es']->value == 'op') {?>
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
