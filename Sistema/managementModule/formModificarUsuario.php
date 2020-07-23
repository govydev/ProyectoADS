<?php

class formModificarUsuario{

    public function formModificarUsuarioShow($user,$roles){
        ?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <title>Modificar Usuario</title>
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
        <p class="full-width"><small> <b>Modificar Usuario<br></b></h1></small></p><br><br>
        </div><br>
        <form action="getUsuarioGU.php" method="POST">
            <?foreach($user as $value){?>
                <div class="form-group">
                    <input class="form-control item" type="text" name="txtNombre" id="" placeholder="Nombre" value="<?=$value["nombre"]?>" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="txtApPaterno"  id="" placeholder="A.Paterno" value="<?=$value["appaterno"]?>" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="txtApMaterno" id="" placeholder="A.Materno" value="<?=$value["apmaterno"]?>" required>
                </div>
                <div class="form-group">
                    <input class="form-control item" type="text" name="txtUsuario"  id="" placeholder="Usuario" value="<?=$value["login"]?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <input class="form-control item" type="password" name="txtPassword"  id="" placeholder="Contraseña" value="<?=$value["password"]?>" required>
                </div>
                <div class="form-group">
                    <label for="">Roles :</label><br>
                    <?$i=0?>
                    <?foreach ($roles as $var) {?>
                        <input type="checkbox" name="rol<?=$i?>" <?if ($var["estado"]==1) echo "checked"?>>  <?=$var["rol"]?><br>
                        <?$i++;?>
                    <?}?>
                </div>
                <div class="form-group">
                <label for="">Estado :  </label><br>
                    <input type="radio" name="rdEstado" value="1" <?if ($value["estado"]==1) echo "checked"?>>  Activo <br>
                    <input type="radio" name="rdEstado" value="0" <?if ($value["estado"]==0 ) echo "checked"?>>  Inactivo<br>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block create-account" name="btnAccion" value="Modificar">
                </div>
                <?}?>
            </form>
        <div class="list-group-item text-center">
        <a href="indexGestionUsuario.php" class="list-group-item" id="categori-2">
        <i class="fa fa-times-circle" aria-hidden="true"></i> Cancelar</a>
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
        <?php
    }

}

?>