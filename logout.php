<?php

	//session_start();    // unirse a la sesión
						//comprobar si existe la variable usuario????
	require_once 'sesiones.php';	
	comprobar_sesion("index.php");
	$_SESSION = array();
	session_destroy();	// eliminar la sesion
	setcookie(session_name(), 123, time() - 1000); // eliminar la cookie

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Sesión cerrada</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/login.css">
	</head>
	<body>
		<div class="container text-center bg-info-subtle mt-5 py-5">
			<?php  header('Location: index.php');   ?>
		</div>
	</body>
</html>

