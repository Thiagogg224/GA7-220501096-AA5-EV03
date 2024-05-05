<?php
include("connection/con_db.php");

if(isset($_POST['registrar'])){

	if(strlen($_POST['usuario']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña']) >= 1) {
		$usuario = trim($_POST['usuario']);
		$correo = trim($_POST['correo']);
		$contraseña = trim($_POST['contraseña']);
		$db= new Connection();
		$query = "INSERT INTO cliente (usuario, correo, contraseña) VALUES ('$usuario','$correo','$contraseña')";
		$resultado = $db->query($query);
		if($resultado){
			?>
			<h3 class="ok"> Te has registrado correctamente </h3>
			<?php
		}else{
			?>
			<h3 class="bad">Ha ocurrido un error </h3>
			<?php
		}
	}	else {
		?>
		<h3 class="bad"> Por favor completa los campos </h3>
			<?php
	}
}		
?>
