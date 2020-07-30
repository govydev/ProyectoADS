<?php

class formAutenticacion{

    public function formAutenticacionshow(){
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <title>Autenticacion</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="style/Css/main.css">
        </head>    
        <body>
            <div class="full-width NavBar">
                <div class="full-width text-semi-bold NavBar-logo">SMF</div>	
            </div>
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
            <img src="style/assets/img/user.png" class="NavBar-Nav-icon" alt="User">
            <p class="full-width"><small> <b>Bienvenido <br> Autenticarse antes de ingresar</b> </h1></small></p><br><br>
            </div>
                <form action="securityModule/getUsuario.php" method="POST">
                    <div class="form-group">
                        <input class="form-control item" type="text" name="txtUsuario" id="username" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group">
                        <input class="form-control item" type="password" name="txtPassword" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary btn-block create-account" type="submit" name="btnLogin" value="LogIn">
                    </div>
                </form>
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
                    <li>Aprobar</li>
                    <li>ADS</li>
                    <li>:)</li>
                    <li>WEB</li>
                </ul>
            </div>
            </div>
            </footer>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="style/Js/jquery-1.11.2.min.js"><\/script>')</script>
            <script src="style/Js/bootstrap.min.js"></script>
            <script src="style/Js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="style/Js/main.js"></script>
        </body>
        </html>
        <?php
    }

}

?>