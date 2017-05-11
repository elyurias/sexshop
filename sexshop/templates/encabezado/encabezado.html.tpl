<section class='container-fluid'>
		<br>
		<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-7 col-md-6 col-sm-10">
					<h1 align="left"><br>{$titulo}</h1>
				</article>
				<article class='col-lg-2 col-md-3 col-sm-12'>
					{if $es eq 'op'}
						<a href='perfil.php' class='btn btn-primary'>Mi perfil</a>
						<a href="php/login/logout.php" class='btn btn-warning'>Cerrar Sesion</a>
					{else}
						<a href='registro.php' class='btn btn-primary'>Registrate</a><br>
						<a href='login.php' class='btn btn-warning'>Iniciar sesion</a>
					{/if}
				</article>
		</section>
		<section class='row'>
			<div class='col-lg-12' style='background-color:black;'>
			<br>
			</div>
		</section>
</section>
