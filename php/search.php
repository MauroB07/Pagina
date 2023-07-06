<?php      
$inc = include('conectar.php');

if ($inc) {
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Consulta preparada
        $consulta = "SELECT * FROM pelicula WHERE nombre = ?";
        $stmt = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($stmt, "s", $nombre);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                $sinopsis = $row['sinopsis'];

                $contenido = '"contenido"';
                $carta = '"carta"';
                $class_imagen = '"imagen"';
                $class_nombre = '"nombre"';

                echo "
                    <h1>$id</h1>
                    <h1>$nombre</h1>
                    <h1>$sinopsis</h1>
                ";
            }
        }
    }
}
?>
