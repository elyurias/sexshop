<div class='row'>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-6 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
			</div>
			<div class='row'>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>
					<article class="col-lg-6 col-md-4 col-sm-12 caja">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	{if $es eq 'op'}
      		<a class="nav-item nav-link" href="php/login/logout.php">Cerrar Sesion</a>
	{else}
      	        <a class="nav-item nav-link" href="login.php">Inicio de Sesion</a>
    {/if}
	<a class="nav-item nav-link" href="index.php">Pagina de Inicio</a>
      		<a class="nav-item nav-link" href="product.php">Productos</a>
	{if $es eq 'op'}
		<a class="nav-item nav-link selected" href="#">Bienvenido Usuario: 
		{section name=n loop=$usu}
		{$usu[n].Vnombre_usuario}
		{/section}
		</a>
	{/if}
	
    </div>
  </div>
</nav>
		</article>
					<article class="col-lg-3 col-md-4 col-sm-12 caja">
						<br>
					</article>			
			</div>
