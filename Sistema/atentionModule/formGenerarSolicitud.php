<?

class formGenerarSolicitud{
    public function formGenerarSolicitudShow($herramienta, $suministro){?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Generar Solicitud</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="../style/Css/main.css">
            <script>
            var listSuministro = [];
            var listHerramienta = [];

            function alertAgregarCantidad(tipo, cantidad,id){
                do{
                    cant = prompt("Ingrese Cantidad de " + tipo +":");
                    if(!isNaN(cant) && cant!=""){
                        if(cant <= cantidad && cant != null){
                            switch (tipo) {
                                case 'suministro':
                                    listSuministro.push([id,cant]);
                                    break;
                                            
                                case 'herramienta':
                                    listHerramienta.push([id,cant]);
                                    break;
                                } 
                            break;
                        }else if(cant >= cantidad){
                            alert("La cantidad ingresada supera a al stock disponible");
                        }
                        cant == null;
                        
                    }
                }while(cant != null);
            }

            function 
            
            </script>
        </head>
        <body>
        <div class="full-width NavBar">
            <div class="full-width text-semi-bold NavBar-logo">SMF</div>	
        </div>
        <nav class=" full-width NavBar-Nav">
                    <div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
                    <ul class="list-unstyled full-width menu-mobile-c">
                        <li>
                        <form action="getBotonES.php" method="post">
                            <input type="hidden" name="listSuministro">
                            <input type="hidden" name="listHerramienta">
                            <center><input type="submit" value="Crear Solicitud" name="btnAccion" class="btn btn-primary btn-sm" id="categori-2"></center>
                        </form>
                        
                        </li>
                    </ul>
        </nav>
        <br>
        <form action="../securityModule/getUsuario.php" method="POST">
            <?session_start();?>
            <input type="hidden" value="<?=$_SESSION['usuario']?>" name="txtUsuario">
            <input type="hidden" value="<?=$_SESSION['clave']?>" name="txtPassword" >
            <center><input type="submit" value="Ir a menu principal" name="btnLogin" class="list-group-item" id="categori-8"></center>
        </form>
        <br><center>
            <form action="getBotonES.php" method="POST">
                <label>Buscar : </label> <input type="text" name="txtBusqueda">
                <select name="ddTipo">
                    <option value="herramienta">Herramienta</option>
                    <option value="suministro">Suministro</option>
                </select>
                <input type="submit" class="btn btn-default" value="Buscar" name="btnAccion">
            </form>
        </center>
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
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach ($suministro as $fila) {?>
                        <tr>
                            <td><?= $fila["nombre"] ?></td>
                            <td><?= $fila["cantidad"] ?></td>
                            <td><?= $fila["diminutivo"] ?></td>
                            <td><?= $fila["detalle"] ?></td>
                            <td>
                            <button type="button" onclick="alertAgregarCantidad('suministro', <?= $fila['cantidad']?>, <?= $fila['idsuministro']?>)">
                            Añadir</button>
                            </td>
                        </tr>
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
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach ($herramienta as $fila) {?>
                        <tr>
                            <td><?= $fila["nombre"] ?></td>
                            <td><?= $fila["cantidad"] ?></td>
                            <td><?= $fila["detalle"] ?></td>
                            <td>
                            <button type="button" onclick="alertAgregarCantidad('herramienta', <?= $fila['cantidad']?>, <?= $fila['idherramienta']?>)">
                            Añadir</button>
                            </td>
                        </tr>
                    <?}?>
                </tbody>
            </table>
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
            <script src="../style/js/bootstrap.min.js"></script>
            <script src="../style/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="../style/js/main.js"></script>
        </body>
        </html>
<?}
}
?>