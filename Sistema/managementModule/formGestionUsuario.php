<?

class formGestionUsuario{

    public function formGestionUsuarioShow($usuarios){
        ?>
        <!DOCTYPE html>
        <html lang="es">
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
        <img src="../style/assets/img/user.png" class="NavBar-Nav-icon" alt="User"><?session_start();?>
        <p class="full-width"><small> <b>Administrador:<br><?=$_SESSION["user"]?></b> </h1></small></p><br><br>
        </div>
        <div class="full-width list-group" style="border-radius: 0;">
        <div class="list-group-item text-center">
        <a href="" class="list-group-item" id="categori-8">
        <i class="	fa fa-mail-reply-all" aria-hidden="true"></i>  Ir a menu principal</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9">
        <div class="full-width bar-info-user">
        <i class="	fa fa-book" aria-hidden="true"></i>
        <div>Gestion de Usuarios </div>
        </div><br>
        <form action="getBotonGU.php" method="POST">
        <input type="text" name="txtBusqueda">
        <select name="" id="">
            <option value="">A</option>
            <option value="">e</option>
        </select>
        <input type="submit" value="Buscar" name="btnAccion"><br><br>
        </form>
        <div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>A.Paterno</th>
                        <th>A.Materno</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Estado</th>
                        <th ><form action="getBotonGU.php" method="POST"><input type="submit" value="Nuevo" name="btnAccion"></form></th>
                    </tr>
                </thead>
                <tbody>
                        <? $i=1;?>
                        <?foreach ($usuarios as $value) {?>
                            <tr>
                                <td><?=$i++?></td>
                                <td><?=$value["nombre"]?></td>
                                <td><?=$value["appaterno"]?></td>
                                <td><?=$value["apmaterno"]?></td>
                                <td><?=$value["login"]?></td>
                                <th><?=$value["password"]?></th>
                                <th><?php 
                                if($value["password"])  echo "Habilitado";
                                else                    echo "Deshabilitado";
                                ?></th>
                                <td>
                                <!--Tengo el incoveniente que tengo que pasar a getBotonGU el usuario, el boton y la accion,
                                talves tengamos que cambiar ese etiqueta a por un boton-->
                                    <a name="btnAccion" action="Modifcar" href="getBotonGU.php?=<?=$value["login"]?>">Editar</a>
                                </td>
                            </tr>
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
        <?        
    }

}

?>