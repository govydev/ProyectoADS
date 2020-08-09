<?

class formDetalleRegistro{
    public function formDetalleRegistroShow($detalleSuministro, $detalleHerramienta, $datos){?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Detalle del Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../style/Css/main.css">
		<script>
			function alertEliminarShow(text) {
				if (confirm(text)) {
					return true;
				}else{
					return false;
				}
			}
		</script>
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
<form action="getBotonMD.php" method="POST">
	<center><input type="submit" value="Registros de salida" name="btnOpcion" class="list-group-item" id="categori-8"></center>
</form>
<br>
<center>
		<label>Nombre : <?=$datos['nombre']?></label><br>
        <label>DNI : <?=$datos['DNI']?></label>
</center>
<section class="full-width section">
<div class="modal-body row">
     <div class="col-md-6">
	 <div class="full-width bar-info-user">
		<i class="	fa fa-book" aria-hidden="true"></i>
		<div>Listado de Suministros </div>		
		</div>
		
     <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	 
	<table class="table table-condensed">
		<thead class="thead-light">
			<tr>
				<th>Detalle</th>
                <th>Solicitud</th>
                <th>Suministro</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
            <?foreach ($detalleSuministro as $fila) {?>
				<tr>
                    <td><?= $fila["idDetalle"] ?></td>
					<td><?= $fila["idSolicitud"] ?></td>
                    <td><?= $fila["idSuministro"] ?></td>
                    <td><?= $fila["cantidad"] ?></td>
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
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Detalle</th>
                <th>Solicitud</th>
                <th>Suministro</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
            <?foreach ($detalleHerramienta as $fila) {?>
				<tr>
					<td><?= $fila["idDetalle"] ?></td>
					<td><?= $fila["idSolicitud"] ?></td>
                    <td><?= $fila["idHerramienta"] ?></td>
                    <td><?= $fila["cantidad"] ?></td>
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