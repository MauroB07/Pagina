<?php
    include('conectar.php');
    $titulo = $_POST['titulo'];
    // El formulario ha sido enviado mediante POST
    // Puedes realizar acciones relacionadas con el procesamiento del formulario aquí
    $consulta = "SELECT * FROM pelicula WHERE titulo='$titulo' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        foreach ($resultado as $fila) {

            $id_pelicula = $fila['id_pelicula'];
            $nombre = $fila['titulo'];
            $sinopsis = $fila['sinopsis'];
            $fecha = $fila['fecha'];
            $img = $fila['img'];
            $generos = $fila['generos'];


            if ($img != null) {
                $img = 'SI';
            } else {
                $img = 'NO';
            }

            echo "
                    <tr>
                        <td>$id_pelicula</td>
                        <td>$nombre</td>
                        <td id='celda-sinopsis'>$sinopsis</td>
                        <td>$generos</td>
                        <td>$fecha</td>
                        <td>$img</td>
                    </tr>
                ";
        }
    }







?>