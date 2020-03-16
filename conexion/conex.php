<?php 

$conexion = new mysqli('localhost', 'root', '', 'erick') or die (mysqli_error($conexion));


	if(isset($_POST['btnGuardar'])){

		$Nom=$_POST['Nombre'];
		$Ape_p=$_POST['Ape_p'];
		$Ape_m=$_POST['Ape_m'];
		$user=$_POST['Usuario'];
		$correo=$_POST['correo'];
		$pass=$_POST['pass'];
		




		$sentencia_sql="insert into usuario (usuario_Nombre, usuario_ApellidoP, usuario_ApellidoM, usuario_NombreU, usuario_Correo, usuario_Contraseña) values ('$Nom', '$Ape_p', '$Ape_m', '$user', '$correo', '$pass')" ;
		$conexion -> query($sentencia_sql) or die ($conexion->error);
	}

 ?>

