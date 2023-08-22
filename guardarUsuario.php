<HTML>
  <HEAD>
   <TITLE>ALTA DE USUARIOS</TITLE>
  </HEAD>
  <BODY>

<?php
    require_once 'bd.php';
    require_once 'sesiones.php';
    comprobar_sesion();

    require_once 'bd.php';
    
	
    $usuario =$_REQUEST["usuario"];
    $clave = $_REQUEST["clave"];
    $consulta = "INSERT INTO usuarios VALUES ( '$usuario', '$clave', 0);";
	
    $res = leer_config(dirname(__FILE__)."/configuracion.xml", dirname(__FILE__)."/configuracion.xsd");
    $bd = new PDO($res[0], $res[1], $res[2]);

   
	$resul = $bd->query($consulta);	
	if (!$resul) 
    {
		echo "No se ha podido dar de alta al nuevo usuario";
	}
    else
    {
		header('Location: login.php?redirigido=true');
	}
		

		
?>
