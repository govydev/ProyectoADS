<?php
include_once("Plantilla/cabezera.php");
?>
<!-- cuerpo lis -->
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
<form action="get.php" method="POST">
<button type="" class="list-group-item" id="categori-4">
<i class="fa fa-cogs fa-fw" aria-hidden="true"></i>  Emitir Solicitud</button>
</form>
</div>
<div class="list-group-item text-center">
<form action="get.php" method="POST">
<button type="submit" class="list-group-item" id="categori-8">
<i class="	fa fa-mail-reply-all" aria-hidden="true"></i>  Ir a menu principal</button>
</form>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Solicitudes</div>
</div><br>
<form action="get.php" method="POST">
<label>Buscar : </label> <input type="text" name="busqueda">

<select name="" id="">
            <option value="">A</option>
            <option value="">e</option>
            </select>
</form>
<br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
                <th>Detalle</th>
                <th>Categoria</th>
				<th></th>
				<th></th>
				<th colspan="2">cantidad</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
                    <td><?= $fila[3] ?></td>
                    <th></th>
					<th></th>
					<td><?= $fila[4] ?></td>
					<td>
					<form action="" method="POST">
						<button type="submit" class="btn btn-info" id="btnAñadir">Añadir</button>
						<form action="get.php" method="POST">
					</td>
				</tr>
		</tbody>
	</table>
	<script>
		document.getElementById('btnAñadir').addEventListener('click', function(){
			while(true){	
			let cantidad = prompt('ingrese cantidad a añadir :');
			if(!isNaN(cantidad) && cantidad!= null && cantidad != ""){
				alert('ingreso correctamente');
				break;
			}else if(cantidad== 'fin'){
				break;
			}else{
				alert('ingrese cantidades enteras');
				break;
			}
			break;
		}
 
  });
	</script>
</div>
</div>
</div>
</div><br><br>
</section>

<!--Pie de pagina-->
<?php
include_once("Plantilla/pie.php");
?>