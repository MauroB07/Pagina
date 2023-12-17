<?php
require 'php/Funciones2.php';
include('php/editarusuario.php');
$info = traerUsuario();
$nombre = $info['nombre'];
$apellido = $info['apellido'];
$email = $info['email'];
$pass = $info['password'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://kit.fontawesome.com/0d2bc26a88.js" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/Perfil.css">
  <title>Document</title>
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
      <a href="busqueda2.php">Busqueda avanzada</a>
      <a href="#">Lo nuevo!</a>
      <?php Rol(); ?>
      <label for="btn-menu" class="icon-cancel-squared"></label>
    </nav>
  </div>
</div>

<body>
  <div class="contenedor">
    <div class="contenedor2">
      <div class="perfil">
        <div class="perfil-imagen">
          <img src="img/perfil.png" alt="perfil">
          <p><?php echo $nombre ?></p>
        </div>
        <div class="perfil-data">
          <div id="mi-perfil">
            <p>Mi perfil</p><label for="btn-menu2"><i class="fa-solid fa-pen-to-square"></i></label>
          </div>
          <div id="informacion">
            <p id="campo">Nombre:</p>
            <p id="info"><?php echo $nombre ?></p>
          </div>
          <div id="informacion">
            <p id="campo">Apellido:</p>
            <p id="info"><?php echo $apellido ?></p>
          </div>
          <div id="informacion">
            <p id="campo">Email:</p>
            <p id="info"><?php echo $email ?></p>
          </div>
          <div id="informacion">
            <p id="campo">Password:</p>
            <p id="info"><?php echo $pass ?></p>
          </div>
          <br>
          <br>
        </div>
        <div class="eliminar-cuenta">
          <button id="btn-baja"><label for="btn-ventana">Eliminar Cuenta</label>
        </div>

      </div>
      <label for="btn-ventana"></label>
      <input type="checkbox" id="btn-ventana">
      <div class="fondo-">
        <div class="ventana-mensaje-1">
          <p id="titulo-">Eliminar Cuenta</p>
          <div class="mensaje-1">
            <form action="php/editarusuario.php" method="post">
              <p>¿Estas seguro de querer eliminar tu cuenta?</p>
              <div class="opcion-1">
                <button id="opcion-1" type="submit" name="accion" value="2">Si</button>
                <label for="btn-ventana">No</label>
              </div>
            </form>
            <label id="btn-quit" for="btn-ventana"><i class="fa-sharp fa-solid fa-rectangle-xmark fa-2xl" style="color: #f20d2f;"></i></label>
          </div>
        </div>
      </div>
      <input type="checkbox" id="btn-menu2">
      <div class="ventana">
        <div class="ventana2">
          <div class="titulo">
            <h2>Editar usuario</h2>
          </div>
          <form action="php/editarusuario.php" method="post">
            <div class="formulario">
              <div class="input-contenedor">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value=<?php echo $nombre ?>>
              </div>
              <div class="input-contenedor">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" value=<?php echo $apellido ?>>
              </div>
              <div class="input-contenedor">
                <label for="email">Email</label>
                <input type="email" name="email" value=<?php echo $email ?>>
              </div>
              <div class="input-contenedor">
                <label for="password">Password</label>
                <input type="password" name="password" value=<?php echo $pass ?>>
              </div>
            </div>
            <div id="Boton">
              <button type="submit" name="accion" value="1">Guardar</button>
            </div>
          </form>
          <label id="X" for="btn-menu2"><i class="fa-sharp fa-solid fa-rectangle-xmark fa-2xl" style="color: #f20d2f;"></i></label>
        </div>
      </div>
    </div>
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