<?php
require_once 'bd.php';
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
si va mal, mensaje de error */
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	
	if(!comprobar_usuario($_POST['usuario'], $_POST['clave'])){
		$err = true;
		$usuario = $_POST['usuario'];
	}else{
		session_start();
		$_SESSION['usuario'] = comprobar_usuario($_POST['usuario'], $_POST['clave']);
		
        header("Location: index.php");
		return;
	}
		
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>
		<meta charset = "UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        	integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body class="body login">	
		
		<div class="formLogin" >
			<h2>Iniciar sesión</h2>
			<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
				<label for="usuario">Nombre de usuario:</label>
				<input type="text" class="form-control p-2 m-2" placeholder="Usuario" id = "usuario" name = "usuario">
				<br/>
				<label for="clave">Contraseña:</label>
				<input class="form-control p-2 m-2" placeholder="Contraseña" id = "clave" name = "clave" type = "password"><br>

				<input type = "submit" class="btn btn-outline-dark">

				<?php if(isset($_GET["redirigido"])){
						echo "<p class='error'>Haga login para continuar</p>";
					}?>
				<?php if(isset($err) and $err == true){
					echo "<p class='error'> Revise usuario y contraseña</p>";
					echo "<a class='btnRegistrar' href='registrar.php'>No tengo cuenta</a>";
					}?>
			</form>
		</div><br>
		<a class='btnVolver' href='index.php'>← Volver</a>
	</body>
</html>
