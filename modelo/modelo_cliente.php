<?php


require_once "config/conexion.php";


function obtenerCliente($conexion)
{

    $sql = "SELECT * FROM store";


    return $conexion->query($sql)->fetchAll();
}








