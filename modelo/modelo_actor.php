<?php
require_once "config/conexion.php";


function obtenerActores($conexion) {
    $sql = "select * from actor;";


    return $conexion->query($sql)->fetchAll();

}


