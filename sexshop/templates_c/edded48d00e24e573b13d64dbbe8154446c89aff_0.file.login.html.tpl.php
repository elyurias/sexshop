<?php
/* Smarty version 3.1.30, created on 2017-05-11 19:59:32
  from "/var/www/html/DosrepoGit/sexshop/sexshop/templates/login/login.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591508f47521d9_00302451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edded48d00e24e573b13d64dbbe8154446c89aff' => 
    array (
      0 => '/var/www/html/DosrepoGit/sexshop/sexshop/templates/login/login.html.tpl',
      1 => 1494462521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_591508f47521d9_00302451 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div class='container-fluid'>
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
