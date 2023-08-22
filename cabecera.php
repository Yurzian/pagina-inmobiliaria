<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title> Inmobiliaria Tupu </title>
</head>
<body class="body">

<header>
        <!-- Primer banner % de descuento.  -->
        <div class="banner d-flex justify-content-center align-items-center" style="min-height: 40px;">
            <div class="text-center px-5" style="white-space: nowrap; ">
            <?php
            session_start();
            if(isset($_SESSION['usuario'])){	
		        echo 'Usuario: '.$_SESSION["usuario"]["nombre"].' <a class="nav-link" href="logout.php">Cerrar Sesión</a>';
	        } else {
                echo '<a class="nav-link" href="login.php">Iniciar Sesión</a> <a class="nav-link" href="registrar.php">Regístrate</a>';
            }
            ?> 
            </div>
        </div>
    
        <!-- Navbar  -->
        <div class="navegacion row m-0 d-flex justify-content-center">
            <!-- Logo -->
            <div class="logo col-lg-12 col-xl-2 mb-2 mb-md-2 d-flex align-items-center justify-content-center">
                <a href="index.php"><img class="" src="fotos/logoInmo2.png" alt="..."></a>
            </div>
             <!-- Botones Navegación  -->
            <div class="botones col-lg-12 col-xl-6">
                <a href="index.php"> Inicio </a> <a href=""> Servicios </a> <a href=""> Localización </a> <a href=""> Contacto </a>
            </div>
        </div>
    </header>

</body>
</html>