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
    <title>Document</title>
    <link rel="stylesheet" href="css/registrarpeli.css">
</head>
<header>
    <div class="logo">
     
       <img  src="img/logo.png">
       
       <h2>PeliculasForYou</h2>
       <?php 
             $num = $rol_id; 
             if($num == 1 ){
                echo '<img src="img/configuracion.jpg">';
             }else{
              }
        ?>
       

    </div>
        <div class="perfil">
            <a class="perfil" href="Perfil.php"><img src="img/perfil.png"></a>
        </div>
       <nav class="menu">
            <a href="Index.php">Inicio</a>
            <a href="#">Generos</a>
            <a href="#">Peliculas</a>
            <a href="#">Series</a>
            
       </nav>
   </header>
<body>
    <form id="formulario" method="post" action="php/Registrar_peli.php" enctype="multipart/form-data">

        <h1>Subir Pelicula</h1>
        <input type="text" name="name" placeholder="Nombre"> <br>
        <br>
        
        <textarea name="sinopsis" cols="30" rows="10" placeholder="Sinopsis"></textarea> <br>
        <br>
        <input name="img" type="text" placeholder="URL:"> <br>
        <br>
        
        <input type="submit" name="register" >
        <!-- <button onclick="window.location.href='..Edit_Peli copy/Edit_index.php'">Editar Peliculas</button> -->
        <a href="Edit_index.php">Editar Peliculas</a>
    </form>

    


</body>
</html>