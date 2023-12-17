<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Login.css">
    <script src="https://kit.fontawesome.com/0d2bc26a88.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form action="php/Login.php" method="post">
                    <div class="formulario">
                        <h2>Iniciar Session</h2>
    
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
                                <a href="#">Olvide la contraseña</a>
                           </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Acceder</button>
                        <div class="registrar">
                            <p>No tengo cuenta</p><a href="Sing-up.php">Crear una</a>
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