<?php

class formRegistrarSuministro{

    public function formRegistrarSuministroShow($unidad){?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Registrar Suministro</title>
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
    <div class="col-xs-12 col-sm-4 col-md-4">
    <div class="full-width user-menu-xs">
    </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
    <div class="registration-form">
    <div class="full-width post-user-info" style="margin: 0 !important;">
    <img src="../style/assets/img/user.png" class="NavBar-Nav-icon" alt="User">
    <p class="full-width"><small><b>Almacener@:<br>Lisbeth</b></h1></small></p><br><br>
    <br>
        <form action="getSuministroGSH.php" method="POST">
            <input type="hidden" name="txtId">
            <div class="form-group">
                <input class="form-control item" type="text" name="txtNombre" id="" placeholder="Nombre">
            </div>
            <div class="form-group">
            <label for=""> Unidades:</label>
                <select name="idUnidad">
                <?foreach ($unidad as$value) {?>
                <option value="<?=$value['idunidad']?>"><?=$value["nombre"]?></option>
                <?}?>
                </select>
            </div>
            <div class="form-group">
                <input class="form-control item" type="number" name="nbCantidad"  id="" placeholder="Cantidad">
            </div>
            <div class="form-group">
            <textarea class="form-control item" type="text" name="txtDetalle"  style="WIDTH: 340px; HEIGHT: 98px" size=32  id="" placeholder="Detalle"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Registrar" name="btnAccion" class="btn btn-primary btn-block create-account">
            </div>
        </form>
        <div class="list-group-item text-center">
            <a href="indexGestionSH.php" class="list-group-item" id="categori-2">
            <i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section><br>
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