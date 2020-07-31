<?php
include_once("Plantilla/cabezera.php");
?>
<br><br>
<div class="col-xs-12 col-sm-4 col-md-4">
</div>
<div class="col-xs-8 col-sm-2 col-md-2">
		<form action="get.php" method="POST">
				<button type="submit" class="list-group-item" id="categori-4">
				<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Atender</button>
		</fomr>
		<form action="get.php" method="POST">
				<button type="submit" class="list-group-item" id="categori-3">
				<i class="fa fa-remove" aria-hidden="true"></i> Rechazar</button>
		</form>
	</div>
</div>
</div>
</div><br><br>

<section class="full-width section">
<div class="modal-body row">
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Suministros </div>		
		</div>
	
		</form>
     <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	 
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Nº</th>
				<th>Suministro</th>
                <th>Detalle</th>
				<th>Cantidad</th>
				<th colspan="2">
				<form action="get.php" method="POST"> 
				<center><button type="submit">Nuevo</button></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td></td>
					<td>
					<form action="get.php" method="POST"> 
						<center><button type="submit"> Editar </button></center>
					</form>
					</td>
                    <td>
					<form action="get.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
		</tbody>
	</table>
</div>
     </div>
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Herramientas </div>
		</div>
	   <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr><th>Nº</th>
				<th>Herammienta</th>
                <th>Detalle</th>
				<th>Cantidad</th>
				<th colspan="2">
				<form action="get.php" method="POST"> 
				<center><button type="submit">Nuevo</button></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
					<td>
					<form action="get.php" method="POST"> 
						<center><button type="submit"> Editar </button></center>
					</form>
					</td>
                    <td>
					<form action="get.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
		</tbody>
	</table>
</div>
     </div>
</div>
</section>
<!--Pie de pagina-->
<?php
include_once("Plantilla/pie.php");
/*
				

*/
?>