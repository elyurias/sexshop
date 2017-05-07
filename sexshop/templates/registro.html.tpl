<!DOCTYPE html xml:lang="es" lang="es">
<head>
	<title>{$titulo}</title>
	{include file="encabezado/bootstrap.html.tpl"}
	<script src='js/jqueryui_registro.js'></script>
	<script src='js/datos_usuario/existeEmail.js'></script>
</head>
<body>
	{include file='encabezado/encabezado.html.tpl'}
	<center>
	<section class='container>'>
	
		<form action='php/registro.php' method='post'>
			<div id='formulario'>
				<h3>Datos de usuario</h3>
				<section>
				<table>
					<tr><td>Nombre:</td><td><input type='text' name='nombre' /></td><td></td><td></td></tr>
					<tr><td>Apellido paterno:</td><td><input type='text' name='paterno' /></td><td></td><td></td></tr>
					<tr><td>Apellido materno:</td><td><input type='text' name='materno' /></td><td></td><td></td></tr>
					<tr id='clo'><td>Email:</td><td><input type='text' name='emailA' id='email'/></td><td>Repetir email:</td><td><input type='text' name='emailB' id='emailB' /></td></tr>
					<tr><td>Telefono:</td><td><input type='text' name='telefono' /></td><td></td><td></td></tr>
					<tr><td>Sexo:</td><td></td><td>F:<input type='radio' name='sexo' value='F'></td><td>M: <input type='radio' name='sexo' value='M'></td></tr>
				</table>
				</section>
			<h3>Direccion</h3>
				<section>
				<div class='row'>
				</div>
				</section>
			<h3>Crear password</h3>
				<section>
				<div class='row'>
				</div>
				</section>
			<h3>Registrar</h3>
				<section>
				<div class='row'>
					<input type='submit' name='{if $modo eq 'registrar'}reg{else}mod{/if}' value='Registrar' class='btn btn-primary'>
				</div>
			</section>
		</div>
	</form>
	<section>
	</center>
</body>
</html>
