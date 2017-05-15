<html>
	<head>
		{include file="encabezado/bootstrap.html.tpl"}
		<link href='css/encabezado.css' rel='stylesheet'>
		<script src='js/datos_usuario/perfilmod.js'></script>
	</head>
	<body>
		{include file='encabezado/encabezado.html.tpl'}
		{section name=st loop=$usu}
		<center>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-lg-4 col-md-4 col-sm-12'></div>
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
					</div>
				</div>
				<div class='col-lg-4 col-md-4 col-sm-12'></div>
			</div>
		</div>
		</center>
		
                
			<div id="dialog" title="Modificar datos de usuario">
				<form id='fm' method='POST'>
					<input type="hidden" name='id' value='{$usu[st].id_usuario}'>
					<input type="hidden" id='nac' value='{$usu[st].Df_nacimiento_usuario}'>
					<label>Nombre </label><input type='text' name='nombre' id='nombre' value="{$usu[st].Vnombre_usuario}" required>
					<label>Apellido paterno </label><input type='text' name='paterno' id='paterno' value="{$usu[st].Va_paterno_usuario}" required>
					<label>Apellido materno </label><input type='text' name='materno' id='materno' value="{$usu[st].Va_materno_usuario}" required>
					<label>Fecha de nacimiento</label><input type='date' name='nacimiento' id='nacimiento' value="{$usu[st].Df_nacimiento_usuario}" required>
					<label>Telefono </label><input type='text' name='telefono' id='telefono' value="{$usu[st].Btelefono_usuario}" required>
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
			{/section}
	</body>
</html>
