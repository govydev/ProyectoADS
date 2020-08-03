<?php

class formAgotado{

    public function formAgotadoShow($herramienta, $suministro){?>
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
<p class="full-width"><small> <b>Almacener@:<br>Lisbeth</b> </h1></small></p><br><br>
</div>
<div class="full-width list-group" style="border-radius: 0;">
<div class="list-group-item text-center">
    <div class="list-group-item text-center">
        <a href="indexGestionSH.php" class="list-group-item" id="categori-4">
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
<div>Listado de Herramientas Agotadas</div>
</div><br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nombre</th>
                <th>Detalle</th>
                <th>Unidad</th>
			</tr>
		</thead>
		<tbody>
            <?if(count($suministro) > 0){
                $i=1;
                foreach ($suministro as $value) {?>
				<tr>
					<td><?= $i?></td>
					<td><?= $value['nombre'] ?></td>
                    <td><?= $value['detalle'] ?></td>
                    <td><?= $value['diminutivo'] ?></td>
				</tr>
            <?}}
            else{?>
                <center><label>No se encuentra suministros agotados</label></center>
            <?}?>
		</tbody>
	</table>
</div><br>
</div>
</div><br><br><br>
<div class="col-xs-12 col-sm-8 col-md-9">
<div class="full-width bar-info-user">
<i class="	fa fa-book" aria-hidden="true"></i>
<div>Listado de Herramientas Agotadas</div>
</div><br>
<!-- Contenido-->
<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th>N°</th>
				<th>Nombre</th>
                <th>Detalle</th>
			</tr>
		</thead>
		<tbody>
            <?if(count($herramienta) > 0){
                $i=1;
                foreach ($herramienta as $value) {?>
				<tr>
					<td><?= $i?></td>
					<td><?= $value['nombre'] ?></td>
                    <td><?= $value['detalle'] ?></td>
				</tr>
            <?}}
            else{?>
                <center><label>No se encuentra herramientas agotadas</label></center>
            <?}?>
		</tbody>
	</table>
</div>
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

}

?>