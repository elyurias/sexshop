<?php
/* Smarty version 3.1.30, created on 2017-05-06 20:19:24
  from "/var/www/html/repoGit/sexshop/sexshop/templates/login/login.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e761c873539_17061711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881da2de98cbcabff43fcf22b3bfbd3b864d06cd' => 
    array (
      0 => '/var/www/html/repoGit/sexshop/sexshop/templates/login/login.html.tpl',
      1 => 1494062496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/navegar.html.tpl' => 1,
  ),
),false)) {
function content_590e761c873539_17061711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<link href='css/encabezado.css' rel='stylesheet'>
		<?php echo '<script'; ?>
 src = "js/mensajes.js"><?php echo '</script'; ?>
>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/bootstrap.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</head>
	<body>
		<div class='container-fluid'>
		<section class='row encabezado'>
			<article class="col-lg-3 col-md-3 col-sm-2">
				<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
			</article>
			<article class="col-lg-9 col-md-9 col-sm-10">
				<h1 align="left"><br>Login de Usuario</h1>
			</article>
		</section>
		
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/navegar.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<section class=row>
						<div class="col-lg-3 col-md-3 col-sm-12 "></div>
						<div class="col-lg-6 col-md-6 col-sm-12 ">
							<div class='container-fluid'>
								<form action="login.php" method="POST"><br>
									<div class=row>
										<label class="col-lg-6 col-md-6 col-sm-12 ">Email   : </label> <input type="text" class="col-lg-6 col-md-6 col-sm-12 " name='email' required />
									</div><br>
									<div class=row>
										<label class="col-lg-6 col-md-6 col-sm-12 ">Password: </label> <input type="password" class="col-lg-6 col-md-6 col-sm-12 " name='pass'required />
									</div><br>
									<div class=row>
										<input type="submit" name="accion" class="col-lg-12 col-md-12 col-sm-12 btn btn-primary" value='iniciar sesion' align='center'>
									</div>
								</form>
							</div>
						</div>	
						<div class="col-lg-3 col-md-3 col-sm-12 "></div>
		</section>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['op']->value == 'B') {?>
			<?php echo '<script'; ?>
>errorUsuario();<?php echo '</script'; ?>
>
		<?php }?>
	</body>
</html>
<?php }
}
