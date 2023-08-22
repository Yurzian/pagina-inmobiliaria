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
        <div class="container galeria">
            <?php

            $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
            $bd = new PDO($res[0], $res[1], $res[2]);	
            $sql = "select * from viviendas where tipo ='".$_GET["tipo"]."';";	
            $resul = $bd->query($sql);	

            foreach ($resul as $linea)
            {
                echo "<div class='tarjeta'>";
                echo "<img class='img2' src='".$linea['imagen']."'>";
                echo "<div class='textoTrj'>";
                echo "<h3>".$linea['nombre']."</h2>";
                echo "<h3>Ubicación: ".$linea['ubicacion']."</h3>";
                echo "<h3>Precio: ".$linea['precio']."€</h3>";
                echo "<a class='btn btn-success btnMas' href='viviendasinfo.php?idV=".$linea['id']."&tipo=".$_GET['tipo']."'>Saber más</a>";
                echo "</div></div>";
            }

            ?>
        </div>
        <div class="espacio"></div>
            
    </main>

    <?php require 'footer.php';?>
</body>
</html>