<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Document</title>
    </head>
    <header class="header">
            <div class="container">
                <div class="logo">
                    <label for="btn-menu" class="icon-menu"></label>
                    <a href="#">MoviesForYou</a>
                   
                </div>

                
                <form class="buscador" action="php/search.php" method="GET">
                        <label for="nombre">.</label>
                        <input type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
                        <input  type="submit" value=" Buscar ">
                    </form>
                
            </div>
        </header>
        <div class="capa"></div>
        <input type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <div class="imagen-perfil">
                        <img src="img/perfil.png" alt="">
                    </div>
                    <a href="#">Perfil</a>
                    <a href="#">Busqueda avanzada</a>
                    <a href="#">Lo nuevo!</a>
                    <a href="#">Contacto</a>
                    <?php 
                    include ('php/Funciones.php');
                    crear($rol_id);
                    ?>
                    
                    <label for="btn-menu" class="icon-cancel-squared"></label>
                </nav>
            </div>
        </div>
    <body>
        <div class="contenedor">
                <?php include('php/index.php') ?>
                </div>
        </div>


        
    </body>
</html>
