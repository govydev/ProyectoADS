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
<p class="full-width"><small> <b>Administrador:<br>Flavio</b> </h1></small></p><br><br>
</div>
<div class="full-width list-group" style="border-radius: 0;">
<div class="list-group-item text-center">
<a href="" class="list-group-item" id="categori-8">
<i class="	fa fa-mail-reply-all" aria-hidden="true"></i>  Ir a menu principal</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Gestion de Usuarios </div>
</div><br>
<label>Buscar : </label> <input type="text" name="busqueda">
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Nombre</th>
                <th>A.Paterno</th>
                <th>A.Materno</th>
				<th>Usuario</th>
				<th>Contraseña</th>
                <th>Cargo</th>
                <th>Estado</th>
				<th ><a hreg="">Nuevo</a></th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td></td>
					<td></td>
                    <td></td>
                    <td></td>
                    <th></th>
					<th></th>
					<td></td>
					<td>
						<a href="">Editar</a>
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