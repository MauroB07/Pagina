<?php
session_start();
include("conectar.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibimos el nombre y contraseña del formulario
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $conexion = mysqli_connect("localhost", "root", "mauro", "bd_pagina");

    $consulta = "SELECT * FROM usuario WHERE nombre = '$nombre' AND passwordd = '$password'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if (empty($filas)) {
        // Mostrar un mensaje de error en la misma página
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    } else {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['password'] = $password;
        // Redirige al usuario a otra página después de iniciar sesión correctamente
        header("Location: http://localhost/Pagina/index.php");
        exit(); // Asegura que el script se detiene después de la redirección
    }
}
?>