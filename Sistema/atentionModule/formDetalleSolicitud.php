<?

class formDetalleSolicitud{
    public function formDetalleSolicitudShow($detalleSuministro, $detalleHerramienta, $datos){?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Gestion Suministro Herramienta</title>
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
			document.getElementById('btnAceptar').addEventListener('click', function(){
		var mensaje;
		var opcion = confirm("La presente solicitud sera atendida , verifique que todo los datos mostrados esten correctos");
		if (opcion == true) {
			mensaje = "Aceptar";
		} else {
			mensaje = "Cancelar";
		}
  });
  
  document.getElementById('btnRechazar').addEventListener('click', function(){
	var mensaje;
		var opcion = confirm("La presente solicitud sera rechazada");
		if (opcion == true) {
			mensaje = "siguiente";
			if(mensaje = "siguiente"){
					while(true){	
					let cantM = prompt('ingrese cantidad a modificar :');
					if(cantM == ""){
						alert('El motivo no puede estar vacio');
						break;
					}else if(cantM== 'fin'){
						break;
					}
					break;
				}
				
			}

		} else {
			mensaje = "Cancelar";
		}
			
  });
		</script>
	</head>
    <body>
<div class="full-width NavBar">
	<div class="full-width text-semi-bold NavBar-logo">SMF</div>	
</div>
<div class="container">
		<div class="col-xs-8 col-sm-2 col-md-4">
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="registration-form">
        </div>
		<center>
					<label>Nombre : <?=$datos['nombre']?></label><br>
					<label>DNI : <?=$datos['DNI']?></label>
			</center>
		<form action="getBotonMD.php" method="POST">
				<center><input type="submit" value="Visualizar solicitud" name="btnOpcion" class="list-group-item" id="categori-8"></center>
			</form><br>
				<div class="col-md-6">
				<form action="getBotonGSH.php" method="post">
					<center><input type="submit" id="btnAceptar"  value="Aceptar Solicitud" name="btnAccion" onclick="return enviarSolicitud()" class="list-group-item" id="categori-6"></center>
				</form>
				</div>
				<div class="col-md-6">
				<form action="getBotonGSH.php" method="post">
					<center><input type="submit" id="btnRechazar"  value="Rechazar solicitud" name="btnAccion" class="list-group-item" id="categori-2"></center>
				</form>
				</div>
        </div>
		</div>
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
			<?if(count($detalleSuministro) > 0){
                $i=1;
                foreach ($detalleSuministro as $fila) {?>
				<tr>
                    <td><?= $fila["idDetalle"] ?></td>
					<td><?= $fila["idSolicitud"] ?></td>
                    <td><?= $fila["idSuministro"] ?></td>
                    <td><?= $fila["cantidad"] ?></td>
				</tr>
            <?}?>
			else{?>
                <center><label>No se encuentra suministros agotados</label></center>
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
	<?if(count($detalleHerramienta) > 0){?>
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
			<?$i=1;
                foreach ($detalleHerramienta as $fila) {?>
				<tr>
					<td><?= $fila["idDetalle"] ?></td>
					<td><?= $fila["idSolicitud"] ?></td>
                    <td><?= $fila["idHerramienta"] ?></td>
                    <td><?= $fila["cantidad"] ?></td>
				</tr>
            <?}?>
		</tbody>
	</table>
	<?}
	else{?>
		<center><label>No se encuentra suministros agotados</label></center>
	<?}?>
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