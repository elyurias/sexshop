<?php
/* Smarty version 3.1.30, created on 2017-04-30 01:10:14
  from "/projects/CursoJQuery/proyectosexshop/sexshop/templates/principal.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59053976d93de3_93269797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab2f3f6a683708d1666d29a3c43c9c001e6deb8' => 
    array (
      0 => '/projects/CursoJQuery/proyectosexshop/sexshop/templates/principal.html.tpl',
      1 => 1493511986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/navegar.html.tpl' => 1,
  ),
),false)) {
function content_59053976d93de3_93269797 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/bootstrap.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link href='css/encabezado.css' rel='stylesheet'>
	</head>
	<body>
		<div class='container-fluid'>
			<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-9 col-md-9 col-sm-10">
					<h1 align="left"><br>Pagina Principal</h1>
				</article>
			</section>
			<?php $_smarty_tpl->_subTemplateRender("file:encabezado/navegar.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</body>
</html>
<?php }
}