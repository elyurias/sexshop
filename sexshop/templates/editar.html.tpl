<html>
	<head>
		{include file="encabezado/datatable.html.tpl"}
		<link href='css/encabezado.css' rel='stylesheet'>
		<script type="text/javascript" charset="utf-8" src='js/tablaProductos.js'></script>
		
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
			{include file='encabezado/navegar.html.tpl'}<br>

<center>
{if ! isset($modo)}
{section name=cc loop=$dato}
		<form name=forma method="POST" action='actualizar.php?id={$dato[cc].SERIAL}'>
			<h1>Actualizar Producto</h1>
{else}
		<form name=forma method="POST" action='insertar.php'>
			<h1>Registrar </h1>
{/if}
	<input type="hidden" name="id" id="id" value="{$id}"/>
	<label>Nombre</label><input type="text" name="nombre" value='
	
	{$dato[cc].Vnombre_producto}
	
	' required><br><BR>
	<label>Descripcion</label><input type="text" name="descripcion" value='{$dato[cc].Vdescripcion_producto}' required><br><BR>
	<label>Existencia</label><input type="text" name="cantidad" value='{$dato[cc].Iexistencia_producto}' required><br><br>
	<label>Marca</label>
		<select name=marca>
			{section name=cd loop=$marca}
				<option value='{$marca[cd].id_marca}' 
					{if $marca[cd].id_marca eq $dato[cc].id_marca}
						selected
					{/if}
					>
					{$marca[cd].Vnombre_marca}
				</option>
			{/section}
		</select><br><br>
		{if ! isset($modo)}
			<input type="submit" name="s" value='Actualizar'>
		{else}
			<input type="submit" name="s" value='Registrar'>
		{/if}
		
</form>
{if ! isset($modo)}
{/section}
{/if}
</center>
</div></body></html>
