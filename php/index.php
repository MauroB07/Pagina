<?php

$inc = include('conectar.php');
    
    if($inc){
        
       
         /*link a detalles*/
        

        $consulta = "SELECT * FROM pelicula"; /*datospeli*/
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id = $row['id_pelicula'];
                $nombre = $row['nombre'];
                $sinopsis = $row['sinopsis'];
                $imagen_url = $row['img'];
                
                $contenido = '"contenido"';
                $carta = '"carta"';
                $class_imagen = '"imagen"';
                $class_nombre = '"nombre"';

                echo "
                
                <div class='pelicula'>        
                    <img  class='peli' src='$imagen_url' alt='$nombre'>
                    
                    <div class='nombre'>
                        <p>$nombre</p>
                    </div>
                </div>
            
                ";
                
             
                
                
                
            }
            
        }
    }
?>