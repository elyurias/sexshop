<html>
	<head>
		{include file="encabezado/datatable.html.tpl"}
		<link href='css/encabezado.css' rel='stylesheet'>
		<script type="text/javascript" charset="utf-8" src='js/tablaProductos.js'></script>
		<script type="text/javascript" charset="utf-8" src='js/acciones.js'></script>
	</head>
	<body>
		<div class='container-fluid'>
			<section class='row encabezado'>
				<article class="col-lg-3 col-md-3 col-sm-2">
					<a href="index.php"><img src="img/logo.jpg" WIDTH=100 HEIGHT=100 ALT="sexshop" align='center'></a>
				</article>
				<article class="col-lg-9 col-md-9 col-sm-10">
					<h1 align="left"><br>Productos</h1>
				</article>
			</section>
			{include file='encabezado/navegar.html.tpl'}<br>
			<section class='row'>
				<div class='col-lg-12'>
				{if $tipo eq 'admin'}
					<a class='btn btn-primary' href='insertar.php'>Registrar nuevo producto</a>
				{/if}
				<table align=center id='productos'>
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Descripcion</th>
							<th>Marca</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						{section name=cc loop=$productos}
						<tr>
							<td>{$productos[cc].Vnombre_producto}</td>
							<td>{$productos[cc].FprecioVenta_producto}</td>
							<td>{$productos[cc].Vdescripcion_producto}</td>
							<td>{$productos[cc].Vnombre_marca}</td>
							{if $tipo eq 'admin'}
								<td>
									<a class='btn btn-info' href='actualizar.php?id={$productos[cc].SERIAL}'>Modificar</a>
									<button onclick='eliminar({$productos[cc].SERIAL});' class='btn btn-primary'>Eliminar</button>
								</td>
							{/if}
							{if $tipo eq 'usuario'}
								<td>Usuario normal</td>
							{/if}
							{if $tipo eq 'sin'}
								<td>Registrate para mas</td>
							{/if}
						</tr>
						{/section}
					</tbody>
					<tfoot>
					</tfoot>
				</table>
				</div>
			</section>
		</div>
	</body>
	
</html>
