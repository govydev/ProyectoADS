<?

class formEmitirSolicitud{
    public function formEmitirSolicitudShow($herramienta, $suministro){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../style/Css/main.css">
	<script>
		function cambiarCantidad(tipo, num, cantidad){
			do{
                cant = prompt("Ingrese nueva Cantidad:");
                if(!isNaN(cant) && cant!=""){
                    if(cant <= cantidad && cant != null){
						var name = "cant"+tipo+num;
						switch (tipo) {
							case 'S':
								document.getElementById(name).value = cant;
								break;
						
							case 'H':
								document.getElementById(name).value = cant;
								break;
						}
                        
                        break;
                    }else if(cant >= cantidad){
                        alert("La cantidad ingresada supera a al stock disponible: "+cantidad);
                    }
                    cant == null;
                }
            }while(cant != null);
		}

		function confirmarEliminacion() {
			if(confirm('Seguro que desea realizar la eliminacion de la solicitud?')){
				return true;
			}else{
				return false;
			}
		}

		function verificarCampos() {
			nombre = document.getElementById("nombre").value;
			dni = document.getElementById("dni").value;
			console.log(nombre + "  " + dni);
			if(nombre.length >= 4 && dni<100000000 & dni>9999999){
				if(confirm("Confirme la generacion de la solicitud")){
					return true;
				}else{
					return false;
				}
			}
			else{
				!alert("Los campos ingresados no cumplen con requisitos.");
				return false;
			}
		}

		function eliminarItemS(item, text){
			if(confirm(text)){
				document.getElementById('itemS'+item).value = 0;
				return true;
			}
			else{
				return true;
			}
		}

		function eliminarItemH(item, text){
			if(confirm(text)){
				document.getElementById('itemH'+item).value = 0;
				return true;
			}
			else{
				return true;
			}
		}

	</script>
</head>
<body>
<div class="full-width NavBar">
	<div class="full-width text-semi-bold NavBar-logo">SMF</div>	
</div>
<section class="full-width section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-3">
<div class="full-width user-menu-xs">
<div class="full-width post-user-info" style="margin: 0 !important;">
<img src="../style/assets/img/user.png" class="NavBar-Nav-icon" alt="User">
<p class="full-width"><small> <b>Almacener@:<br>Lisbeth</b> </h1></small></p><br><br>
</div>
<form action="getBotonGS.php" method="post">
<div class="full-width list-group" style="border-radius: 0;">
<div class="list-group-item text-center">
    <div class="list-group-item text-center">
	<label for="">Nombre:</label><br><input type="text" name="txtNombre" id="nombre"><br><br>
	<label for="">DNI:</label><br><input type="number" name="txtDNI" id="dni"><br><br>
		<input type="submit" name="btnAccion" value="Generar Solicitud" class="btn btn-success btn-block create-account" onclick="return verificarCampos()">
    </div>
	<div class="list-group-item text-center">
        <input type="submit" name="btnAccion" value="Agregar" class="btn btn-primary btn-block create-account">
    </div>
	<div class="list-group-item text-center">
        <input type="submit" name="btnAccion" value="Eliminar Solicitud" class="btn btn-danger btn-block create-account" onclick="return confirmarEliminacion()">
    </div>
	<div class="list-group-item text-center">
        <a href="indexEmitirSolicitud.php" class="list-group-item" id="categori-4">
        <i class="fa fa-mail-reply-all" aria-hidden="true"></i> Volver atrás</a>
    </div>
</div>
</div>
</div>
</div>
<div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Suministro</div>
</div><br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<?if(count($suministro)>0){?>
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
			</tr>
		</thead>
		<tbody>
            <?$i = 0;?>
            <?foreach ($suministro as $value) {?>
				<tr>
					<td><?= ++$i?></td>
					<td><?= $value[2] ?></td>
                    <td>
						<input type="number" name="cantS<?=$i?>" id="cantS<?=$i?>" value="<?= $value[0] ?>" id="" readonly>
					</td>
                    <td><?= $value[4] ?></td>
					<td>
						<input type="hidden" name="idS<?=$i?>" value="<?= $value[1] ?>">
						<button type="button" onclick="cambiarCantidad('S', <?=$i?>, <?= $value[3] ?>)"> Modificar</button>
					</td>
					<td>
					<input type="text" name="textEliminarS<?=$i?>" id="itemS<?=$i?>"  value="1">
					<input type="submit" name="btnAccion" value="Eliminar" onclick="return eliminarItemS(<?=$i?>,'Seguro que desea realizar la eliminacion de suministro?')">
					</td>
				</tr>
            <?}?>  
		</tbody>
	</table>
	<?}else{
		echo "No se agregaron Solicitudes";
	}?>
</div><br>
</div>
</div><br><br><br>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Herramientas</div>
</div><br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<?if(count($herramienta)>0){?>
	<table class="table table-condensed" style="margin: left">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nombre</th>
                <th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
            <?$i = 0;?>
            <?foreach ($herramienta as $value) {?>
				<tr>
					<td><?= ++$i?></td>
					<td><?= $value[2]?></td>
                    <td><input type="number" name="cantH<?=$i?>" id="cantH<?=$i?>" value="<?= $value[0] ?>" readonly></td>
					<td>
					<input type="hidden" name="idH<?=$i?>" value="<?= $value[1] ?>">
					<button type="button" onclick="cambiarCantidad('H', <?=$i?>, <?= $value[3] ?>)"> Modificar</button>
					</td>
					<td>
					<form action="getBotonGS.php" method="post">
					<input type="hidden" name="textEliminarH<?=$i?>" value="1">
					<input type="submit" value="Eliminar" name="btnAccion" onclick="return eliminarItemH(<?=$i?>,'Seguro que desea realizar la eliminacion de herramienta?')">
					</form>
					</td>
				</tr>
            <?}?> 
		</tbody>
	</table>
	<?}else{
		echo "No se agregaron Solicitudes";
	}?>
</div>
</form>
</div>
</div>
</div><br><br>
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
}?>