<?php
		
	require_once('../controlador/conexion.php');

	$sql = "SELECT *from usuarios where usuario = '".$_POST['usuarioIni']."' and contrasenia='".$_POST['contraseniaIni']."'";


	$result = mysqli_query(conexion(), $sql);


	 if(mysqli_num_rows($result)){
	 	$fila = $result->fetch_assoc();
	 	session_start();
	 	$_SESSION['valido']='si';
	 	$_SESSION['usuario'] = $fila['usuario'];
	 	$_SESSION['id'] = $fila['id'];
	 	header('location:../principal.php');
	 }else{
	 	echo '<script>alert("Datos incorrectos")</script>';
	 	echo '<script>window.location.href="index.php"</script>';


	 }
?>
