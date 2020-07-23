<?php

class formMenuPrincipal{

    public function formMenuPrincipalShow($roles){
        ?>
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
                <div class="full-width text-semi-bold NavBar-logo">
                    SMF
                </div>
                <nav class=" full-width NavBar-Nav">
                    <ul class="list-unstyled full-width menu-mobile-c">
                        <li>
                            <a href="../index.php" id="categori-8">
                                <i class="fa fa-object-group fa-fw hidden-md hidden-lg"></i>Salir del sistema
                            </a>
                        </li>
                    </ul>	
                </nav>		
        </div>
            <section class="section">
                <h2 class="text-center text-light">Elija su rol</h2><br>	
                <div class="container">
                    <div class="full-width container-category">
                        <?php for($i = 0; $i < count($roles); $i++) {?>
                            <a href="<?=$roles[$i]["path"]?>" id="categori-2">
                            <i class="<?=$roles[$i]["icono"]?>" aria-hidden="true"></i>
                            <span><?=$roles[$i]["rol"]?></span>
                        </a>
                        <?php  }?>
                    </div>
                </div><br><br><br>
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
        <?php
    }

}

?>