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
<p class="full-width"><small> <b>Personal de Atencion:<br>Milton</b> </h1></small></p><br><br>
</div>
<div class="full-width list-group" style="border-radius: 0;">
<div class="list-group-item text-center">
<a href="" class="list-group-item" id="categori-4" onclick="return confirm('¿dese continuar?')">
<i class="fa fa-trash" aria-hidden="true"></i>  Eliminar Solicitud </a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Suministros </div>
</div><br>
<form>
<input type="text" name="busqueda" required >
<i aria-hidden="true"></i><button>Emitir Solicitud</button> </a>
</form>
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
				<th colspan="2">Accion</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td></td>
                    <td></td>
					<td>
						<a href="">Editar</a>
					</td>
                    <td>
						<a href="" onclick="return confirm('¿Realmente quiere eliminar el dato?')">Eliminar</a>
					</td>
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