<?php 
    include('php/editarusuario.php');
    include('php/Funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Peliculas</title>
        <link rel="stylesheet" href="css/perfil.css">
    </head>
    <header>
        <div class="logo">
            <img src="https://macayailen.files.wordpress.com/2012/06/12981849-cine-y-aplaudir-bordo-de-primer-simbolo-de-peliculas-aislados-en-negro-de-alta-resolucion-de-imagene.jpg?w=400" alt="LOGO">
            <h2>PeliculasForYou</h2>
        </div>
        <nav class="menu">
            <a href="Index.php">Inicio</a>
            <a href="#">Generos</a>
            <a href="#">Peliculas</a>
            <a href="#">Series</a>
        </nav>
    </header>
    <body class="perfil">
        <div class="contenedor_perfil">
            <div class="tabla">
                <table class="table">
                    <caption>
                        Datos
                        <form method="post">
                            <input type="hidden" name="id" value="1">
                            <input type="submit" name="edit" value="Editar">
                        </form>
                    </caption>
                    <tbody>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td><?php echo $nombre; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Apellido</th>
                            <td><?php echo $apellido; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Password</th>
                            <td><?php echo $password; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Rol_id</th>
                            <td><?php echo $rol_id; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="imagen">
                <img src="img/gettyimages-950057624-170667a.jpg">
            </div>
            
        </div>
    </body>
</html>
