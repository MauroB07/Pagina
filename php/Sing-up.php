<?php
    session_start();
    include("conectar.php");
    include("Funciones2.php");
    //Declaramos las variables para que no generen error
    
    //Recibimos todos los campos
    if(isset($_POST['nombre'])){
        $nombre = trim($_POST['nombre']);
    }

    if(isset($_POST['apellido'])){
        $apellido = trim($_POST['apellido']);
    }

    if(isset($_POST['email'])){
       $email = trim($_POST['email']);
    }

    if(isset($_POST['password'])){
        $password = trim($_POST['password']);
    }


    //Realizamos la consulta a la base de datos para saber si el mismo email esta registrado
    $consulta = "SELECT email FROM usuario WHERE email='$email'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Recorrer los resultados
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $email2 = $fila['email'];   
            }
            //Si su email ya esta registrado lo redirrecionamos a la misma pagina y guardamos en la
            // session el error = 1 para usarlo en Funciones2.php
            if($email2 == $email){
                $_SESSION['error'] = 1;
                header("Location:/Pagina/Sing-up.php");
                exit();
                
            }
        }else {
            //Si no se encuentran coincidencias procede a cargar el usuario
            $consulta ="INSERT INTO usuario(nombre,apellido,email,passwordd, rol_id,registro) Values('$nombre','$apellido','$email','$password','2','1')";
            $resultado = mysqli_query($conexion, $consulta);
            $_SESSION['password'] = $password;
            $_SESSION['email'] =$email;
            header("Location:/Pagina/index.php");
            
            
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

?>