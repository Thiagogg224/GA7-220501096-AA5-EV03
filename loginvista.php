<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>usuario interfa</title>
    <link rel="stylesheet"  href="https://fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet"  href="styleusuario.css">
</head>
<body>
    <form action="validar_login.php" method="POST" class="formulario">
        <h1>Login</h1>
        <div class="contenedor">
            
            <div class="input-contenedor">
                <i class="fa-solid fa-envelope-open-text icon"></i>
                <input type="text" name="correo" placeholder="Correo Electronico">
            </div>

            <div class="input-contenedor">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <button type="submit" class="button">Login</button>
            <p>Al registrarte, aceptas nuestras condiciones de uso y politicas de privacidad</p>
            <p>¿No tienes cuenta?<a class="link" href="registravista.php">Registrate</a></p>
        </div>
    </form>
    
    <!-- Mostrar mensaje de error o éxito -->
    <?php
    if(isset($_GET['error']) && $_GET['error'] == 'invalidlogin') {
        echo '<p class="bad">Correo electrónico o contraseña incorrectos. Por favor, inténtalo de nuevo.</p>';
    } elseif(isset($_GET['success']) && $_GET['success'] == 'registroexitoso') {
        echo '<p class="good">¡Registro exitoso! Por favor, inicia sesión con tus credenciales.</p>';
    }
    ?>
    
</body>
</html>
