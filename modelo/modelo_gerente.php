<?php

require_once "config/conexion.php";


function obtenerGerente ($conexion)
{
    $sql = "SELECT * FROM staff";

    return $conexion->query($sql)->fetchAll();

}