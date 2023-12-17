<?php 
session_start();
//Esta funcion es llamada por Sing-up.php
//Imprime un mensaje dependiendo de cuan sea el error
function mensaje(){
    if(empty($_SESSION['error'])){
        //Si $_SESSION['error'] esta vacio no hace nada
    }elseif($_SESSION['error']==1){
        echo '<p class="error" style="color: red; padding-top: 5px; font-weight: bold;">Email ya registrado</p>  ';
        $error = 0;
        $_SESSION['error'] = $error;
    }elseif($_SESSION['error']==2){
        echo '<p class="error" style="color: red; padding-top: 5px; font-weight: bold;">Email o password incorrectos</p>  ';
        $error = 0;
        $_SESSION['error'] = $error;
    }
}

function Rol(){
    if(empty($_SESSION['rol_id'])){
    }elseif($_SESSION['rol_id'] == 1){
        echo "<a href='http://localhost/Pagina/i_crudPelicula.php'>Administar</a>";
    
    }
}
session_write_close();













?>