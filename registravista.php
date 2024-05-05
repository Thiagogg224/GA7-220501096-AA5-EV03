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
	<form method="POST" class="formulario">
		<h1>Registrate</h1>
		<div class="contenedor">
			<div class="input-contenedor">
				<i class="fa-solid fa-user-large icon"></i>
				<input type="text" name="usuario" required placeholder="Nombre Completo">
			</div>
			
			<div class="input-contenedor">
				<i class="fa-solid fa-envelope-open-text icon"></i>
				<input type="text"  name="correo" required placeholder="Correo Electronico">
			</div>

			<div class="input-contenedor">
				<i class="fa-solid fa-lock icon"></i>
				<input type="password" name="contraseña" required placeholder="Contraseña">
			</div>
			 <button type="submit" name="registrar" class="button">Registrar</button> 
			<p>Al registrarte, aceptas nuestras condiciones de uso y politicas de privacidad</p>
			<p>¿Ya tienes cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
		</div>
	</form>
	<?php
	include("registrar.php");
	?>	
</body>
</html>