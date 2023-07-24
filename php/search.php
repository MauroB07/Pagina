<?php      
$inc = include('conectar.php');

if ($inc) {
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        // Consulta preparada
        $consulta = "SELECT * FROM pelicula WHERE titulo LIKE '%$nombre%'";
        $resultado = mysqli_query($conexion,$consulta);

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                $sinopsis = $row['sinopsis'];
                $imagen_url = $row['img'];
                $contenido = '"contenido"';
                $carta = '"carta"';
                $class_imagen = '"imagen"';
                $class_nombre = '"nombre"';

                $cartas .="
                <div class='pelicula'>        
                <img  class='peli' src='$imagen_url' alt='$nombre'>
        
                <div class='nombre'>
                    <p>$nombre</p>
                </div>
                </div>";
                
            }

            // Verificar si el usuario ya está en busqueda2.php
            if ($_SERVER['PHP_SELF'] !== '/Pagina/busqueda2.php') {
                // Redirigir a la misma página (busqueda2.php) al finalizar la consulta
                header("Location: http://localhost/Pagina/busqueda2.php?cartas=" . urlencode($cartas));

                exit; // Detener la ejecución después de la redirección
            }else{
                header("Location: http://localhost/Pagina/busqueda2.php?cartas=" . urlencode($cartas));

            }

                        

            

        }
    }
}
?>
