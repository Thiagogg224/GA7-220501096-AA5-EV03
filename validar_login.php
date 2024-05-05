<?php 
session_start();

// Verificar si se han enviado datos del formulario de inicio de sesión
if(isset($_POST['correo']) && isset($_POST['contraseña'])) {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Verificar si los campos están vacíos
    if(empty($correo) || empty($contraseña)) {
        // Mostrar mensaje de error y redirigir al formulario de inicio de sesión
        header("Location: loginvista.php?error=emptyfields");
        exit(); // Detener la ejecución del script después de la redirección
    }

    $conex = mysqli_connect("localhost","root","","api_rest"); 

    // Consulta SQL para verificar las credenciales del usuario
    $consulta = "SELECT * FROM cliente WHERE Correo = '$correo' AND Contraseña = '$contraseña'";
    $resultado = mysqli_query($conex, $consulta);

    // Contar el número de filas devueltas por la consulta
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        // Las credenciales son válidas, redireccionar al usuario a la página de inicio
        header("Location: index.html");
        exit(); // Detener la ejecución del script después de la redirección
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error y el formulario de inicio de sesión
        header("Location: loginvista.php?error=invalidlogin");
        exit(); // Detener la ejecución del script después de la redirección
    }

    // Liberar el resultado y cerrar la conexión
    mysqli_free_result($resultado);
    mysqli_close($conex);
} else {
    // Si no se enviaron datos del formulario, redireccionar al usuario de vuelta al formulario de inicio de sesión
    header("Location: loginvista.php");
    exit(); // Detener la ejecución del script después de la redirección
}
?>
