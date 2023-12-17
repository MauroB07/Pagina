<?php
    include('conectar.php'); // modify

    $id_pelicula = trim($_POST['id_pelicula']);
    $nombre = trim($_POST['titulo']);
    $sinopsis = trim($_POST['sinopsis']);
    $generos = trim($_POST['generos']);
    $url = trim($_POST['url']);
    $fechaEstreno = trim($_POST['fechaEstreno']);

    if (isset($_POST['action'])) {
        $action = $_POST['action'];
    
        if ($action === 'insert') {
            
            $insert = "INSERT INTO pelicula(titulo, sinopsis, fecha, img, generos) VALUES('$nombre','$sinopsis','$fechaEstreno','$img','$generos')";
            $resultado = mysqli_query($conexion,$insert);
            header('Location: ../i_crudPelicula.php'); // mod-dic

        } elseif ($action === 'delete') {
            
            $delete = "DELETE FROM pelicula WHERE id_pelicula = '$id_pelicula'";
            $resultado = mysqli_query($conexion,$delete);
            header('Location: ../i_crudPelicula.php'); // mod-dic
            
        }elseif($action === 'modify'){
            //Obtenemos todos los datos de la pelicula a modificar
            $data = "SELECT * FROM pelicula WHERE id_pelicula='$id_pelicula'";
            $data2 = mysqli_query($conexion,$data);
            if ($data2) {
                // Verificar si se encontraron resultados
                if (mysqli_num_rows($data2) > 0) {
                    // Recorrer los resultados y asignarlo a las variables
                    while ($fila = mysqli_fetch_assoc($data2)) {
                        
                        $data_titulo = $fila['titulo'];
                        $data_sinopsis = $fila['sinopsis'];
                        $data_generos = $fila['generos'];
                        $data_url= $fila['umg'];
                        $data_fechaEstreno= $fila['fecha'];
                    }
                    //Si el usuario deja campos en blanco que no desea modificar se colocaran los mismos datos que 
                    //ya tiene la pelicula
                    if(empty($nombre)){
                        $nombre = $data_titulo;
                    }
                    if(empty($sinopsis)){
                        $sinopsis = $data_sinopsis;
                    }
                    if(empty($generos)){
                        $generos = $data_generos;
                    }
                    if(empty($url)){
                        $url = $data_url;
                    }
                    if(empty($fechaEstreno)){
                        $data_fechaEstreno = $data_fechaEstreno;
                    }
                    $update = "UPDATE pelicula SET titulo = '$nombre', sinopsis = '$sinopsis', fecha = '$fechaEstreno', img = '$img', generos = '$generos'  WHERE id_pelicula = '$id_pelicula'";
                    $resultado = mysqli_query($conexion,$update);
                    header('Location: ../i_crudPelicula.php'); // mod-dic
                }
            }
            
        
        }
    }


?>