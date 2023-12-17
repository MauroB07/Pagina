<?php
session_start();

//Esta funcion nos trae los fatos del usuario para mostrarlos en pantalla
//se llama desde Perfil.php
function traerUsuario(){
    include('conectar.php');
    $gmail = "";
    $password = "";
    if (empty($_SESSION['password'] && $_SESSION['email'])) {
        //si no ecuentra los datos

    } else {
        //si encuentra los datos
        $gmail = $_SESSION['email'];
        $password = $_SESSION['password'];
    }
    $consulta = "SELECT id,nombre, apellido, email,passwordd FROM usuario WHERE email='$gmail' and passwordd='$password'";
    $resultado = mysqli_query($conexion, $consulta);


    // Verificar si se encontraron resultados
    if (mysqli_num_rows($resultado) > 0) {

        // Recorrer los resultados

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $User_id = $fila['id'];
            $User_nombre = $fila['nombre'];
            $User_apellido = $fila['apellido'];
            $User_email = $fila['email'];
            $User_password = $fila['passwordd'];
        }

        $Info_User = array(
            "id" => $User_id,
            "nombre" => $User_nombre,
            "apellido" => $User_apellido,
            "email" => $User_email,
            "password" => $User_password

        );
    } else {
        $Info_User = array(
            "nombre" => "Error: Usuario no encontrado",
            "apellido" => "Error: Usuario no encontrado",
            "email" => "Error: Usuario no encontrado",
            "password" => "Error: Usuario no encontrado"

        );
    }

    return $Info_User;
}

if (isset($_POST['accion'])) {
    $accion = trim($_POST['accion']);
    ABM_usuario($accion);
}
function ABM_usuario($accion)
{
    include('conectar.php');
    if ($accion == "1") {
        //antes de editar al usuario traemos sus datos
        $usuario = traerUsuario();

        $id_user = $usuario['id'];

        if (isset($_POST['nombre'])) {
            $nombre = trim($_POST['nombre']);
        } else {
            $nombre = $usuario['nombre'];
        }

        if (isset($_POST['apellido'])) {
            $apellido = trim($_POST['apellido']);
        } else {
            $apellido = $usuario['apellido'];
        }
        if (isset($_POST['email'])) {
            $email = trim($_POST['email']);
        } else {
            $email = $usuario['email'];
        }
        if (isset($_POST['password'])) {
            $password = trim($_POST['password']);
        } else {
            $password = $usuario['password'];
        }

        $consulta = "UPDATE usuario SET nombre ='$nombre',apellido='$apellido',email='$email',passwordd='$password' WHERE id=$id_user";
        if (mysqli_query($conexion, $consulta)) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            traerUsuario();
            header("Location:/Pagina/Perfil.php");
        } else {
        }
    }elseif($accion == "2"){
        $usuario = traerUsuario();
        $id = $usuario['id'];
        $consulta= "DELETE FROM usuario WHERE id=$id";
        mysqli_query($conexion,$consulta);
        // Elimina todas las variables de sesión
        session_unset();
        // Destruye la sesión
        session_destroy();
        header("Location:/Pagina/index.php");
    }
    
}
session_write_close();
