<html>
	<head>
		<link href='css/encabezado.css' rel='stylesheet'>
		<script src = "js/mensajes.js"></script>
		{include file="encabezado/bootstrap.html.tpl"}
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
		
		{include file='encabezado/navegar.html.tpl'}
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
		{if $op eq 'B'}
			<script>errorUsuario();</script>
		{/if}
	</body>
</html>
