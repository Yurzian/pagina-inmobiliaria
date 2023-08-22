<?php 
	require_once 'bd.php';
?>
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
    <?php require 'cabecera.php';?>

    <main class="main">
        <div class="espacio"></div>

        <div class="container galeria d-flex justify-content-center align-items-center">
            <?php

            error_reporting(0);

            $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
            $bd = new PDO($res[0], $res[1], $res[2]);	
            $sql = "select * from casas where id ='".$_REQUEST['id']."'";	
            $resul = $bd->query($sql);	
            
            foreach ($resul as $linea)
            {
                echo '<form class="text-center rounded formulario" action = "GuardarModCasas.php?id='.$_REQUEST['id'].'" method = "POST" enctype="multipart/form-data">';
                    echo '<table class="table table-warning table-striped table-bordered text-center">'; //abrir la tabla
                    echo '<tr><th colspan="2">Modificar Casa</th></tr>';
                    echo '<tr><td>Nombre</td>';
                    echo '<td><input class="form-control" name="Nombre" type="text" value="'.$linea["nombre"].'"></td></tr>';
                    echo '<tr><td>Ubicación</td>';
                    echo '<td><input class="form-control" name="Ubicacion" type="text" value="'.$linea["ubicacion"].'"></td></tr>';
                    echo '<tr><td>Precio</td>';
                    echo '<td><input class="form-control" name="Precio" type="number" value="'.$linea["precio"].'"></td></tr>';
                    echo '<tr><td>Metros</td>';
                    echo '<td><input class="form-control" name="Metros" type="number" value="'.$linea["metros"].'"></td></tr>';
                    echo '<tr><td>Habitaciones</td>';
                    echo '<td><input class="form-control" name="Habitaciones" type="number" value="'.$linea["habitaciones"].'"></td></tr>';
                    echo '<tr><td>Pisos</td>';
                    echo '<td><input class="form-control" name="Pisos" type="number" value="'.$linea["pisos"].'"></td></tr>';
                    echo '<tr><td>Baños</td>';
                    echo '<td><input class="form-control" name="Baños" type="number" value="'.$linea["baños"].'"></td></tr>';
                    echo '<tr><td>Garage</td>';
                    echo '<td><input class="form-control" name="Garage" min="0" max="1" type="number" value="'.$linea["garage"].'"></td></tr>';
                    echo '<tr><td>Imagen</td>';
                    echo '<td><input class="form-control" name="Imagen" type="file"></td></tr>';
                    echo '<input name="ImagenAnterior" type="hidden" value="'.$linea["imagen"].'">';
                    echo '<tr><td colspan = "2">';
                    echo "<input class='btn btn-warning' type = 'submit' name='enviar' value='Modificar'></td></tr></table>";
            echo '</form>';
            }
		?>
        </div>
    
	</body>
</html>