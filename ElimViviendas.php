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
    <?php require 'cabecera.php';
            error_reporting(0);

            $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
            $bd = new PDO($res[0], $res[1], $res[2]);
            $id = $_REQUEST['id'];

            $consulta = "DELETE FROM viviendas WHERE id='".$id."';";
            
            $resul = $bd->query($consulta);	
            
            if (!$resul){
                echo('<p> No se ha podido eliminar la casa </p>');
            }else{
                header("Location: GestViviendas.php?tipo=".$_GET['tipo']);
            };

            
		?>
	</body>
</html>