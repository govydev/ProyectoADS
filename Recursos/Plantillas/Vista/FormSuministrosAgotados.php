<?php
include_once("Plantilla/cabezera.php");
?>
<section class="full-width section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-3">
<div class="full-width user-menu-xs">
<div class="full-width post-user-info" style="margin: 0 !important;">
<img src="../assets/img/user.png" class="NavBar-Nav-icon" alt="User">
<p class="full-width"><small> <b>Almacener@:<br>Lisbeth</b> </h1></small></p><br><br>
</div>
<div class="full-width list-group" style="border-radius: 0;">
<div class="list-group-item text-center">
<form action="get.php" method="POST">
<button type="" class="list-group-item" id="categori-4">
<i class="fa fa-mail-reply-all" aria-hidden="true"></i> Volver atrás </button>
</form>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Suministros Agotados</div>
</div><br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
                <th>Detalle</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Unidad</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
				</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</div><br><br>
</section>
<!--Pie de pagina-->
<?php
include_once("Plantilla/pie.php");
?>