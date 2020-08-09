<?php

class formListaSolicitud{

    public function formListaSolicitudShow($solicitudes){?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../style/Css/main.css">
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
<p class="full-width"><small> <b>Despachador :<br>Marcos Antonio</b> </h1></small></p><br><br>
</div>
<div class="full-width list-group" style="border-radius: 0;">
</div>
</div>
</div>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Solicitudes </div>
</div><br>
<form action="get.php" method="POST"> 
<label> Solicitud :</label> <input type="text" name="" required >
<i aria-hidden="true"></i><button>Buscar</button></a>
</form>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>Nº</th>
				<th>Nombre</th>
                <th>DNI</th>
				<th>motivo</th>
				<th>Fecha de Emision</th>
                <th>estado</th>
				<th colspan="1">Detalles</th>
			</tr>
		</thead>
		<tbody>
				<tr>
				<?foreach ($solicitudes as $fila) {?>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
                    <td><?= $fila[2] ?></td>
					<td><?= $fila[3] ?></td>
					<td><?= $fila[4] ?></td>
                    <td><?= $fila[5] ?></td>
					<td>
						<button class="btn btn-info" type="submit">Ver</button>
					</td><?}?>
				</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</section><br><br><br>
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