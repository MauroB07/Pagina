<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="css/fontello.css">
    
    <title>Document</title>
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <label for="btn-menu" class="icon-menu"></label>
            <a href="#">MoviesForYou</a>
        </div>
        <form class="buscador" action="php/search.php" method="POST">
            <label for="nombre">.</label>
            <input type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
            <input  type="submit" value=" Buscar ">
        </form>
    </div>
</header>
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

    <div class="busqueda"><h1>  __Resultados de busqueda__</h1></div>
    <div class="contenedor">
        <?php

            // Obtén el contenido de la variable $cartas desde la URL
            $cartas = $_GET['cartas'];
            // Imprime el contenido de las cartas en la página
            echo $cartas;
        ?>
    </div>
</body>
</html>