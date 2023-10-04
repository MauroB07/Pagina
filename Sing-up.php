<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Sing-up.css">
    <script src="https://kit.fontawesome.com/0d2bc26a88.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form action="./php/Sing-up.php" method="post">
                    <div class="formulario">
                        <h2>Registrarse</h2>

                        <div class="input-contenedor">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="nombre" required>
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="input-contenedor">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="apellido" required>
                            <label for="apellido">Apellido</label>
                        </div>
                        <div class="input-contenedor">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
    
                        <div class="input-contenedor">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" required>
                            <label for="password">Contrseña</label>
                        </div>
                        <div class="olvidar">
                           <label for="#">
                                <input type="checkbox">Recordar
                               
                           </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Acceder</button>
                        <div class="registrar">
                            <p>Tengo cuenta</p><a href="Login.php">Ingresar</a>
                            <br>
                            <?php     
                                include("php/Funciones2.php");
                                mensaje();
                            ?>  
                        </div>
                    </div>
    
                </form>
                
            </div>
        </div>
    </section>
</body>
</html>