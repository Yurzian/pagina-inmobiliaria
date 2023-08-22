<?php
    require_once 'bd.php';
    require "sesiones.php";
    comprobar_sesion();

    $tipo = $_GET["tipo"];

    if ($tipo == "casas") 
    {
        paginaCasas();
    }
    else if ($tipo == "pisos") 
    {
        paginaPisos();
    }

    else 
    {
        paginaRurales();
    }
?>