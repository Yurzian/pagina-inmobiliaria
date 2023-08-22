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

            echo '<form class="text-center rounded formulario" action = "GuardarAltaViviendas.php?tipo='.$_GET["tipo"].'" method = "POST" enctype="multipart/form-data">';
                echo '<table class="table table-warning table-striped table-bordered text-center">'; //abrir la tabla
                echo '<tr><th colspan="2">Añadir Vivienda</th></tr>';
                echo '<tr><td>Tipo</td>';
                echo '<td><input class="form-control" name="Tipo" value="'.$_GET["tipo"].'" type="text"></td></tr>';
                echo '<tr><td>Nombre</td>';
                echo '<td><input class="form-control" name="Nombre" type="text"></td></tr>';
                echo '<tr><td>Ubicación</td>';
                echo '<td><input class="form-control" name="Ubicacion" type="text"></td></tr>';
                echo '<tr><td>Precio</td>';
                echo '<td><input class="form-control" name="Precio" type="number"></td></tr>';
                echo '<tr><td>Metros</td>';
                echo '<td><input class="form-control" name="Metros" type="number"></td></tr>';
                echo '<tr><td>Habitaciones</td>';
                echo '<td><input class="form-control" name="Habitaciones" type="number"></td></tr>';
                echo '<tr><td>Pisos</td>';
                echo '<td><input class="form-control" name="Pisos" type="number"></td></tr>';
                echo '<tr><td>Baños</td>';
                echo '<td><input class="form-control" name="Baños" type="number"></td></tr>';
                echo '<tr><td>Garage</td>';
                echo '<td><input class="form-control" name="Garage" min="0" max="1" type="number"></td></tr>';
                echo '<tr><td>Imagen</td>';
                echo '<td><input class="form-control" name="Imagen" type="file"></td></tr>';
                echo '<tr><td colspan = "2">';
                echo "<input class='btn btn-warning' type = 'submit' name='enviar' value='Añadir Vivienda'></td></tr></table>";
        echo '</form>';
		?>
        </div>
    
	</body>
</html>