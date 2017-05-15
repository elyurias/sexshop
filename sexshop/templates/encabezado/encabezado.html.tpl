<center>
<section class='container-fluid'>
		<br>
		<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-12">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-4 col-md-4 col-sm-12">
					<h1 align="center"><br>{$titulo}</h1>
				</article>
				<article class='col-lg-5 col-md-5 col-sm-12'>
				  <div class='btn-group'>
					{if $es eq 'op'}
						{section name=lop loop=$usu}
							{if $usu[lop].Itipo_usuario eq 0}
								<a class='btn btn-danger' href='hr.php'>Admin</a>
							{/if}
							<a class='btn'>{$usu[lop].Vnombre_usuario}</a>
							<a class='btn btn-primary' href='carrito.php'>Carrito</a>
						{/section}
						<a href='perfil.php' class='btn btn-primary'>Mi perfil</a>
						<a href="php/login/logout.php" class='btn btn-warning'>Cerrar Sesion</a>
					{else}
						<a href='registro.php' class='btn btn-primary'>Registrate</a><br>
						<a href='login.php' class='btn btn-warning'>Iniciar sesion</a>
					{/if}
				  </div>
				</article>
		</section>
		<section class='row'>
			<div class='col-lg-12' style='background-color:black;'>
			<br>
			</div>
		</section>
</section>
</center>
