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
		<form action="indexEmitirRegistro.php" method="POST">
				<center><input type="submit" value="Menu Despachador" name="btnAccion" class="list-group-item" id="categori-8"></center>
			</form><br>
				<div class="col-md-6">
				<form action="getBotonLS.php" method="POST">
				<input type="submit" onclick="return Aceptar()" name="btnAccion" class="list-group-item" id="categori-6" value="Aceptar Solicitud" />
				</form>
				</div>
				<div class="col-md-6">
				<form action="getBotonLS.php" method="POST">
				<input type="hidden" name="txtMotivo" id="motivo">
				<input type="submit" onclick="return Rechazar()" name="btnAccion" class="list-group-item" id="categori-2" value="Rechazar solicitud" />
				</form>
				</div>
				<script>
						function Rechazar() {
						//Ingresamos un mensaje a mostrar
						var mensaje = confirm("La presente solicitud sera rechazada");
						if(mensaje==true){
							var motivo = prompt("Motivo");
							if (motivo == ""){
								var opt =alert("el motivo no puede estar vacio");
									return  false;
							}else if(motivo == null){
								return false;
							}else{
								document.getElementById('motivo').value = motivo;
								return true;
							}
						}else{
							return false;
						}

						}			
						function Aceptar() {
						var mensaje;
						var opcion = confirm("La presente solicitud sera atendida , verifique que todo los datos mostrados esten correctos");
						if (opcion == true) {
							mensaje = "Aceptar";
						} else {
							mensaje = "Cancelar";
							return false
						}
		}
		</script>
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
	<?if(count($detalleSuministro) > 0){?>
	<table class="table table-condensed">
		<thead class="thead-light">
			<tr>
				<th>Detalle</th>
                <th>Suministro</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
		<?$i = 0;
                foreach ($detalleSuministro as $fila) {?>
				<tr>
                    <td><?= ++$i ?></td>
                    <td><?= $fila["nombre"] ?></td>
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
                <th>Herramienta</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
		<?$i = 0;
                foreach ($detalleHerramienta as $fil) {?>
				<tr>
					<td><?= ++$i ?></td>
                    <td><?= $fil["nombre"] ?></td>
                    <td><?= $fil["cantidad"] ?></td>
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