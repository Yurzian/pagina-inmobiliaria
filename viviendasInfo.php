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
            <?php

            $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
            $bd = new PDO($res[0], $res[1], $res[2]);	
            $sql = "select * from viviendas WHERE id =".$_GET['idV']." and tipo ='".$_GET['tipo']."'";
            $resul = $bd->query($sql);	

            foreach ($resul as $vivienda)
            {
                echo '<div class="row1 mt-5 text-center">';
                echo '<div class="img3 mx-5">';
                echo '<img src="'.$vivienda["imagen"].'" alt="..."></div>';
                echo '<div class="m-5 texto1">';
                echo '<h1>'.$vivienda["nombre"].'</h1>';
                echo '<p class="txtViviendas ">
                <b>Ubicación:</b> '.$vivienda["ubicacion"].' <br>
                <b>Precio:</b> '.$vivienda["precio"].' € <br>
                <b>Metros cuadrados:</b> '.$vivienda["metros"].' m² <br>
                <b>Número de habitaciones:</b> '.$vivienda["habitaciones"].' <br>
                <b>Número de pisos:</b> '.$vivienda["pisos"].' <br>
                <b>Número de baños:</b> '.$vivienda["baños"].' <br>';
                if ($vivienda["garage"]) echo "Garage";
                echo '</p></div></div>';
            }

            ?>
        <div class="espacio"></div>
            
    </main>

    <?php require 'footer.php';?>
</body>
</html>