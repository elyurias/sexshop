<html>
	<head>
		{include file="encabezado/bootstrap.html.tpl"}
		<link href='css/encabezado.css' rel='stylesheet'>
		<script src='js/datos_usuario/perfilmod.js'></script>
		<script src='js/datos_usuario/perfilmodDir.js'></script>
		<script src='js/datos_usuario/perfilmodPass.js'></script>
			<script src='js/domicilio/municipio2.js'></script>
			<script src='js/domicilio/ciudad2.js'></script>
			<script src='js/datos_usuario/password.js'></script>
	</head>
	<body>
		{include file='encabezado/encabezado.html.tpl'}
		{section name=st loop=$usu}
		<center>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-lg-4 col-md-4 col-sm-12'>
				<br>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'>
					<div class='container-fluid'>
						<div class='row'>
							<div class='col-lg-12'>
								<legend>Datos de usuario</legend>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Nombre:</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$usu[st].Vnombre_usuario} {$usu[st].Va_paterno_usuario} {$usu[st].Va_materno_usuario}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Fecha de nacimiento</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$usu[st].Df_nacimiento_usuario}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Telefono</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$usu[st].Btelefono_usuario}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Email</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$usu[st].Vemail_usuario}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Sexo</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{if $usu[st].Csexo_usuario eq 'M'}Masculino{else}Femenino{/if}</h7>
							</div>
						</div>
						<div class='row'>
						<input type="hidden" name='id' value='{$usu[st].id_usuario}'>
							<div class='col-lg-12'>
								<button class='btn btn-primary' id="modificar">Modificar</button>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-12 col-md-12'>
								<legend>Direccion del usuario</legend>
							</div>
						</div>
						{section name=sss loop=$dom}
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Estado</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$dom[sss].estado}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Municipio</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$dom[sss].municipio}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Asentamiento</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$dom[sss].asentamiento}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Codigo postal</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$dom[sss].cp}</h7>
							</div>
						</div>
						{/section}
						<div class='row'>
							<div class='col-lg-6 col-md-6'>
								<h5>Direccion</h5>
							</div>
							<div class='col-lg-6 col-md-6'>
								<h7>{$usu[st].Vdireccion_usuario}</h7>
							</div>
						</div>
						<div class='row'>
							<div class='col-lg-12'>
								<button class='btn btn-primary' id="modificar2">Modificar Direccion</button>
							</div>
							<div class='col-lg-12'><br></div>
							<div class='col-lg-12'>
								<button class='btn btn-danger' id="modificar3">Solicitar tambio de password</button>
							</div>
						</div>
					</div>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'>
				<br>
				</div>
			</div>
		</div>
		</center>   
			<div id="dialog" title="Modificar datos de usuario">
				<form id='fm' method='POST'>
					<input type="hidden" name='id' value='{$usu[st].id_usuario}'>
					<input type="hidden" id='nac' value='{$usu[st].Df_nacimiento_usuario}'>
					<label>Nombre </label><input type='text' name='nombre' id='nombre' value="{$usu[st].Vnombre_usuario}" class='form-control' required>
					<label>Apellido paterno </label><input type='text' name='paterno' id='paterno' value="{$usu[st].Va_paterno_usuario}" class='form-control' required>
					<label>Apellido materno </label><input type='text' name='materno' id='materno' value="{$usu[st].Va_materno_usuario}" class='form-control' required>
					<label>Fecha de nacimiento</label><input type='text' name='nacimiento' id='nacimiento' value="{$usu[st].Df_nacimiento_usuario}" class='form-control' required>
					<label>Telefono </label><input type='text' name='telefono' id='telefono' value="{$usu[st].Btelefono_usuario}" class='form-control' required>
					<label>Sexo </label> F:<input type='radio' name='sexo' id='sexo' value="F" 
					{if $usu[st].Csexo_usuario eq 'F'}
					 checked="checked"
					{/if}
					>
					M:<input type='radio' name='sexo' id='sexo' value="M"
					{if $usu[st].Csexo_usuario eq 'M'}
					 checked="checked"
					{/if}
					>
					<button class='btn btn-primary' name='guardar' id='guardado1'>Realizar cambios</button>
				</form>
			</div>
			
			<div id="dialog2" title="Modificar datos de usuario (Direccion)">
				<form id='fm2' method='POST' onsubmit="return abra();">
					<input type="hidden" id = 'ide' name='id' value='{$usu[st].id_usuario}'>
					<input type="hidden" name='mun' id='mun' value='{$usu[st].idMunicipio}'>
					<input type="hidden" name='nim' id='idn' value='{$usu[st].id_direccion}'>
					<label>Pais </label><select class='form-control'><option>Mexico</option></select>
					<label>Estado </label>
						<select id='estado' class='form-control' name='estado'>
							<option>Selecciona una opcion</option>
							{section name=lsl loop=$estado}
								<option value='{$estado[lsl].idEstado}' 
									{if $estado[lsl].idEstado eq $usu[st].idEstado}
										selected
									{/if}
									>
									{$estado[lsl].estado}
								</option>
							{/section}
						</select>
					<label>Municipio </label>
						<select id='municipio' class='form-control' name='municipio'>
						
						</select>
					<label>Asentamiento </label>
						<select id='ciudad' class='form-control' name='ciudad'>
						
						</select>
					<label>Codigo Postal </label><input type='text' name=cp class='form-control' id='cp'/>
					<label>Direccion </label><input type='text' id='dirusu' name=direccion class='form-control' value="{$usu[st].Vdireccion_usuario}"/>
					<button class='btn btn-primary' name='guardar' id='guardado2'>Realizar cambios</button>
				</form>
			</div>
			<div id="dialog3" title="Modificar Password" onsubmit="return false;">
				<form id='fm3' method='POST'>
					<input type="hidden" id='ide' name='id' value='{$usu[st].id_usuario}'>
					<input type="hidden" id='password1' name='org' value='{$usu[st].Vpassword_usuario}'>
					<label>Password anterior </label><input type='password' name='nombre' id='psss' class='form-control' required>
					<label>Nuevo password </label><input type='password' name='nombre' id='pass1' class='form-control' required>
					<label>Repetir password </label><input type='password' name='nombre' id='pass2' class='form-control' required>
					<button class='btn btn-primary' name='guardar' id='guardado3'>Cambiar Password</button>
				</form>
			</div>
			{/section}
			<div id='passR1' title="Guia de creacion de contrasenias">
			</div>
			<div id='er' title="Errores">
			</div>
			<div id='cambo' title="Se ha cambiado la contrasenia">
				Se redireccionara a la pagina principal 5 segundos...
			</div>
	</body>
</html>
