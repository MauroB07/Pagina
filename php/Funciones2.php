<?php 
session_start();
//Esta funcion es llamada por Sing-up.php
//Imprime un mensaje dependiendo de cuan sea el error
function mensaje(){
    $error = $_SESSION['error'];
    if($error == 1){
        echo '<p class="error" style="color: red; padding-top: 5px; font-weight: bold;">Email ya registrado</p>  ';
        $error = 0;
        $_SESSION['error'] = $error;
    }elseif($error ==2){
        echo '<p class="error" style="color: red; padding-top: 5px; font-weight: bold;">Email o password incorrectos</p>  ';
        $error = 0;
        $_SESSION['error'] = $error;
    }
}














?>