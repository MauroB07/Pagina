<?php 
session_start();
include('conectar.php');
$password = "";
$email = "";
$_SESSION['error'] = 0;
//Recibimos todos los campos
    if(isset($_POST['email'])){
       $email = trim($_POST['email']);
    }

    if(isset($_POST['password'])){
        $password = trim($_POST['password']);
    }

    $consulta = "SELECT email,passwordd, rol_id FROM usuario WHERE email='$email' and passwordd='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    if ($resultado) {
        // Verificar si se encontraron resultados
        if (mysqli_num_rows($resultado) > 0) {
            // Recorrer los resultados
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $email2 = $fila['email'];
                $password2 = $fila['passwordd'];
                $rol =$fila['rol_id'];
            }
        
            if($email2 == $email){
                if($password2 == $password){
                    $_SESSION['email'] = $email2;
                    $_SESSION['password'] = $password2;
                    $_SESSION['rol_id'] = $rol;
                    header("Location:/Pagina/index.php");
                }
                                
                
            }else{
                $_SESSION['error'] = 2; 
                header("Location:/Pagina/Login.php");
                exit();
            }
        }else{
            $_SESSION['error'] = 2; 
                header("Location:/Pagina/Login.php");
                exit();
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
