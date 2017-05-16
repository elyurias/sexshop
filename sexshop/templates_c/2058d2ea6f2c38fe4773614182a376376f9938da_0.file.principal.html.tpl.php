<?php
/* Smarty version 3.1.30, created on 2017-05-15 22:54:05
  from "/var/www/html/sexshop/sexshop/templates/principal.html.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591a77ddedbce9_24549290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2058d2ea6f2c38fe4773614182a376376f9938da' => 
    array (
      0 => '/var/www/html/sexshop/sexshop/templates/principal.html.tpl',
      1 => 1494119790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado/bootstrap.html.tpl' => 1,
    'file:encabezado/encabezado.html.tpl' => 1,
  ),
),false)) {
function content_591a77ddedbce9_24549290 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<?php $_smarty_tpl->_subTemplateRender("file:encabezado/bootstrap.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<link href='css/encabezado.css' rel='stylesheet'>
	</head>
	<body>
			<?php $_smarty_tpl->_subTemplateRender("file:encabezado/encabezado.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html>
<?php }
}
