<?php 
require 'php/conexion.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT * FROM pelicula");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dt.css">
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
            <label for="2">.</label>
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
  <div class="contenedor">
    <div class ="contenedor2">
        <div class="imagen">
            <img class="img_peli" src="https://www.smashmexico.com.mx/wp-content/uploads/sites/2/2018/02/09103129/first-movie-poster-released-for-venom-the-trailer-is-coming-tomorrow11-e1518193898324.jpg" alt="venom">
        </div>
        <table class="tabla">
            <tr>
                <td>Titulo</td>
                <td class="datos ">Titanes del Pacifico</td>
            </tr>
            <tr>
                <td>Generos</td>
                <td class="datos ">Accion,comedia,romance</td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td class="datos ">En el mundo de bla bla que exisia no se que cosa XD, y fidsjvnjvnwnwepvne evnwvivnwovin ivnwv cnwovv eoivnwevnowvv oviwnvwvv nnewen ffweofw owefmewomfwe wofewmfwofmn</td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td class="datos ">10/08/1999</td>
            </tr>
        </table>
        <div class="video">
            <h2 class="vista">Ver pelicula</h2>
            <img class="reproductor" src="img/Captura.png" alt="">
        </div>
    </div>
    
  </div> 
</body>
</html>
