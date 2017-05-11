<!DOCTYPE html xml:lang="es" lang="es">
<head>
	<title>{$titulo}</title>
	{include file="encabezado/bootstrap.html.tpl"}
	<script src='js/jqueryui_registro.js'></script>
	<script src='js/datos_usuario/existeEmail.js'></script>
	<script src='js/domicilio/municipio.js'></script>
	<script src='js/domicilio/ciudad.js'></script>
</head>
<body>
	{include file='encabezado/encabezado.html.tpl'}
	<center>
	<section class='container>'>
	
		<form action='php/registro.php' method='post' id='fm'>
			<div id='formulario'>
				<h3>Datos de usuario</h3>
				<section>
				<table>
					<tr><td>Nombre:</td><td><input type='text' name='nombre' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Apellido paterno:</td><td><input type='text' name='paterno' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Apellido materno:</td><td><input type='text' name='materno' class='form-control'/></td><td></td><td></td></tr>
					<tr id='clo'><td>Email:</td><td><input type='text' name='emailA' id='email'class='form-control'/></td><td>Repetir email:</td><td><input type='text' name='emailB' id='emailB' class='form-control'/></td></tr>
					<tr><td>Telefono:</td><td><input type='text' name='telefono' class='form-control'/></td><td></td><td></td></tr>
					<tr><td>Sexo:</td><td></td><td>F:<input type='radio' name='sexo' value='F' class='form-control'></td><td>M: <input type='radio' name='sexo' value='M' class='form-control'></td></tr>
				</table>
				</section>
			<h3>Direccion</h3>
				<section>
				<table>					
					<tr><td>Pais:</td><td><select class='form-control'>
											<option>Mexico</option>
										  </select></td><td></td><td></td></tr>
					<tr><td>Estado:</td><td>
						<select id='estado' class='form-control' name='estado'>
							<option>Selecciona una opcion</option>
							{section name=lsl loop=$estado}
								<option value='{$estado[lsl].idEstado}'>
									{$estado[lsl].estado}
								</option>
							{/section}
						</select>
					</td><td></td><td></td></tr>
					<tr><td>Minicipio:</td><td>
						
						<select id='municipio' class='form-control' name='municipio'>
							<option value=0>Selecciona un estado</option>
						</select></td><td></td><td></td></tr>
						
					<tr><td>Ciudad:</td><td><select id='ciudad' class='form-control' name='ciudad'>
						<option>Selecciona un municipio</option>
					</select></td><td></td><td></td></tr>
					<tr><td>Codigo Postal:</td><td><select id='cp' class='form-control' name='cp'>
						<option>Selecciona un Ciudad</option>
					</select>
					</td><td></td><td></td></tr>
					<tr><td>Direccion:</td><td><input type='text' name='direccion' class='form-control'/></td><td></td><td></td></tr>
				</table>
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
