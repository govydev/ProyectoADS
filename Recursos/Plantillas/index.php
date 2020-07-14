<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="Css/main.css">
	</head>    
<body>
<div class="full-width NavBar">
	<div class="full-width text-semi-bold NavBar-logo">SMF</div>	
</div>

</section>
<!-- cuerpo listo -->
<section class="full-width section">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-4">
<div class="full-width user-menu-xs">
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4">
<div class="registration-form">
<div class="full-width post-user-info" style="margin: 0 !important;">
<!--<i class="fa fa-user NavBar-Nav-icon" aria-hidden="true"></i>-->
<img src="assets/img/user.png" class="NavBar-Nav-icon" alt="User">
<p class="full-width"><small> <b>Bienvenido <br> Autenticarse antes de ingresar</b> </h1></small></p><br><br>
</div>
    <form>
	    <div class="form-group">
            <input class="form-control item" type="text" name="username" maxlength="15" minlength="4" pattern="^[a-zA-Z0-9_.-]*$" id="username" placeholder="Nombre de Usuario" required>
        </div>
        <div class="form-group">
            <input class="form-control item" type="password" name="password" minlength="6" id="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block create-account" type="submit">ingresar</button>
        </div>
    </form>
</div>
</div>
</section><br>

<!--Pie de pagina-->
<?php
include_once("Vista/Plantilla/pie.php");
?>