<?

class formGestionSH{
    public function formGestionSHShow($herramienta, $suministro){?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestion Suministro Herramienta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../style/Css/main.css">
	</head>
    <body>
<div class="full-width NavBar">
	<div class="full-width text-semi-bold NavBar-logo">SMF</div>	
</div>
<nav class=" full-width NavBar-Nav">
			<div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
			<ul class="list-unstyled full-width menu-mobile-c">
				<li>
				<form action="getBotonGSH.php" method="post">
					<center><input type="submit" value="Elementos Agotado" name="btnAccion" class="btn btn-primary btn-sm" id="categori-2"></center>
				</form>
				
				</li>
			</ul>
</nav>
<br>
<form action="../securityModule/getUsuario.php" method="POST">
	<?session_start();?>
	<input type="hidden" value="<?=$_SESSION['usuario']?>" name="txtUsuario">
	<input type="hidden" value="<?=$_SESSION['clave']?>" name="txtPassword" >
	<center><input type="submit" value="Ir a menu principal" name="btnLogin" class="list-group-item" id="categori-8"></center>
</form>
<br><center>
	<form action="getBotonGSH.php" method="POST">
		<label>Buscar : </label> <input type="text" name="txtBusqueda">
		<select name="ddTipo">
			<option value="herramienta">Herramienta</option>
			<option value="suministro">Suministro</option>
		</select>
		<input type="submit" value="Buscar" name="btnAccion">
	</form>
</center>
<section class="full-width section">
<div class="modal-body row">
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Suministros </div>		
		</div>
		
     <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	 
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
				<th>Detalle</th>
				<th colspan="2">
				<form action="getBotonGSH.php" method="POST"> 
					<input type="hidden" name="txtId" value="<?= $fila["idsuministro"]?>">
					<input type="hidden" name="txtTipo" value="suministro">
					<center><input type="submit" value="Nuevo" name="btnAccion"></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
            <?foreach ($suministro as $fila) {?>
				<tr>
					<td><?= $fila["nombre"] ?></td>
					<td><?= $fila["cantidad"] ?></td>
                    <td><?= $fila["diminutivo"] ?></td>
                    <td><?= $fila["detalle"] ?></td>
					<td>
					<form action="getBotonGSH.php" method="POST"> 
						<input type="hidden" name="txtId" value="<?= $fila["idsuministro"]?>">
						<input type="hidden" name="txtTipo" value="suministro">
						<input type="submit" value="Modificar" name="btnAccion">
					</form>
					</td>
                    <td>
					<form action="getBotonGSH.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
            <?}?>
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
                <th>Cantidad</th>
				<th>Detalle</th>
				<th colspan="2">
				<form action="getBotonGSH.php" method="POST"> 
					<input type="hidden" name="txtId" value="<?= $fila["idherramienta"]?>">
					<input type="hidden" name="txtTipo" value="herramienta">
					<center><input type="submit" value="Nuevo" name="btnAccion"></center>
				</form>
				</th>
			</tr>
		</thead>
		<tbody>
            <?foreach ($herramienta as $fila) {?>
				<tr>
					<td><?= $fila["nombre"] ?></td>
					<td><?= $fila["cantidad"] ?></td>
                    <td><?= $fila["detalle"] ?></td>
					<td>
					<form action="getBotonGSH.php" method="POST"> 
						<input type="hidden" name="txtId" value="<?= $fila["idherramienta"]?>">
						<input type="hidden" name="txtTipo" value="herramienta">
						<input type="submit" value="Modificar" name="btnAccion">
					</form>
					</td>
                    <td>
					<form action="get.php" method="POST"> 
						<center><button type="submit" onclick="return confirm('¿Realmente quiere eliminar el Suministro')">Eliminar</submit></center>
					</form>
					</td>
				</tr>
            <?}?>
		</tbody>
	</table>
</div>
     </div>
</div>
</section>
<footer class="full-width footer">
<div class="container">
	<p class="text-semi-bold">
	nuestra compañia
	</p>
</div>
<div class="container">
<div class="col-xs-12">
	<ul class="list-unstyled text-center full-width footer-copyright">
		<li>&copy; 2020 Company</li>
		<li><a href="#!">Aprobar</a></li>
		<li><a href="#!">ADS</a></li>
		<li><a href="#!">:)</a></li>
		<li><a href="#!">WEB</a></li>
	</ul>
</div>
</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../..//js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../js/main.js"></script>
</body>
</html>
    <?}
}

?>