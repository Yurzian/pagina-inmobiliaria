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
            $Tipo =$_REQUEST["Tipo"];
            $Nombre =$_REQUEST['Nombre'];
            $Ubicacion =$_REQUEST['Ubicacion'];
            $Precio =$_REQUEST['Precio'];
            $Habitaciones =$_REQUEST['Habitaciones'];
            $Pisos =$_REQUEST['Pisos'];
            $Baños =$_REQUEST['Baños'];
            $Garage =$_REQUEST['Garage'];
            $Metros =$_REQUEST['Metros'];
            $Imagen = "";
            if (isset($_FILES["Imagen"])){
                $file = $_FILES["Imagen"];
                $nombre = $file["name"];
                $tipo = $file["type"];
                $ruta_provisional = $file["tmp_name"];
                $size = $file["size"];
                $dimensiones = getimagesize($ruta_provisional);
                $carpeta = "fotos/";
                if ($tipo != "image/jpg" && $tipo != "image/JPG" && $tipo != "image/jpeg" && $tipo != "image/png" && $tipo!= "image/gif")
                {
                    echo "Error de archivo";
                }
                else if ($size > 310241024)
                {
                    echo "Error de tamaño";
                }
                else 
                {
                    $src = $carpeta.$nombre;
                    move_uploaded_file($ruta_provisional, $src);
                    $Imagen = "fotos/".$nombre;
                }
            }

            $consulta = "INSERT INTO viviendas ( id, tipo, nombre, ubicacion, precio, metros, habitaciones, pisos, baños, garage, imagen)
				VALUES (NULL, '$Tipo', '$Nombre', '$Ubicacion', '$Precio', '$Metros', '$Habitaciones', '$Pisos', '$Baños', '$Garage', '$Imagen');";
	
	
            $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
            $bd = new PDO($res[0], $res[1], $res[2]);


            $resul = $bd->query($consulta);	
            
            if (!$resul){
                echo'<p> No se ha podido añadir la casa</p>';
            }else{
                header("Location: GestAdmin.php?tipo=".$_GET['tipo']);
            };

            
		?>
	</body>
</html>