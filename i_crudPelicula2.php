<?php
require 'php/Funciones2.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontello.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/CrudPelicul4.css"> <!-- mod-dic -->
</head>
<header class="header">
    <div class="container">
        <div class="logo">
            <label for="btn-menu" class="icon-menu"></label>
            <a href="index.php">MoviesForYou</a>
        </div>
        <form class="buscador" action="php/search.php" method="POST">
            <label for="2">.</label>
            <input class="busq" type="text" id="nombre" name="nombre" placeholder="  Nombre de la pelicula">
            <input class="busq" type="submit" value=" Buscar ">
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
            <a href="Perfil.php">Perfil</a>
            <a href="#">Busqueda avanzada</a>
            <a href="#">Lo nuevo!</a>
            <?php
            Rol();
            ?>
            <label for="btn-menu" class="icon-cancel-squared"></label>
        </nav>
    </div>
</div>

<body>
    <div class="contenedor">
        <div class="boton-admin">
            <label for="btn-admin-pelicula">Administrar Peliculas</label>
            <label for="">Administrar Usuarios</label>
        </div>
        <input type="checkbox" id="btn-admin-pelicula">
        <div class="admin-peliculas">
            <div class="item1">
                <h2 class="v1">Administrar Pelicula</h2>

                <div id="formulario_pelicula">
                    <div>
                        <form id="formulario" method="post" action="php/crudPelicula.php" enctype="multipart/form-data"> <!-- mod-dic -->

                            <textarea id="miTextArea" oninput="verificarTextArea()" name="id_pelicula" cols="30" rows="1" placeholder="id_pelicula"></textarea> <br> <!-- mod-dic -->
                            <textarea name="titulo" cols="30" rows="1" placeholder="Titulo"></textarea> <br>
                            <textarea name="sinopsis" cols="30" rows="10" placeholder="Sinopsis"></textarea> <br>
                            <textarea name="generos" cols="30" rows="5" placeholder="Generos"></textarea> <br>
                            <textarea name="url" cols="30" rows="1" placeholder="URL img"></textarea> <br>

                            <p>Fecha Estreno</p>
                            <input name="fechaEstreno" type="date"><br>

                            <div id="botones">
                                <button id="miBoton" name="action" value="insert">Agregar</button> <!--este boton por efecto del Js viene con un margin (preguntar a Leo xd)-->
                                <button id="btn" name="action" value="modify">Modificar</button> <br>
                                <button id="btn" name="action" value="delete">Eliminar</button> <br>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="item2">

                <h2 class="v1">Lista de peliculas</h2>

                <div id="listaPeliculas">

                    <form id="formulario"  method="post">
                        <label for="titu"></label><input type="text" name="titulo" id="titu">
                        <button type="button" id="enviar">Buscar</button>
                    </form>

                </div>
                <div class="tabla-scroll">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Sinopsis</th>
                                <th>Generos</th>
                                <th>Fecha Estreno</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>

                        <tbody id="resultado">
                        
                        </tbody>

                    <script>
                        $("#enviar").click(function(){
                            $.ajax({
                                url: "php/admin_peli.php",
                                type: "post",
                                data: $("#formulario").serialize(),
                                success: function(resultado){
                                    $("#resultado").html(resultado);
                                }
                            });
                        });
                    </script>
                </div>    
            </div>
        </div>



        <script src="Js/crudPelicula.js"></script> <!-- mod-dic -->

    </div>
</body>
<footer class="footer">
    <div class="contacto_1">

        <img class="red_social" src="img/facebook.png" alt="Facebook">
        <img class="red_social" src="img/twiter.png" alt="Twiter">
        <img class="red_social" src="img/instagram.png" alt="Instagram">
    </div>
    <div class="contacto_2">
        <h4>MoviesForYou</h4>
        <p>Ver peliclas y series en streaming para ti</p>
        <p>Derechos de autor © 2023 </p>
    </div>
    <div class="contacto_3">
        <form class="form" action="">
            <p>Contactenos</p>
            <input id="campos" type="email" name="Gmail" placeholder="Ingrese email" required>
            <input id="campos" type="text" name="Asunto" placeholder="Asunto">
            <input id="campos" type="text" name="Mensaje" placeholder="Mensaje" required>
            <input id="campos" type="submit" name="Enviar" placeholder="Enviar">
        </form>
    </div>
</footer>

</html>