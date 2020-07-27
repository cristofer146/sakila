<?php
require_once "config/conexion.php";


function obtenerActores($conexion)
{
    $sql = "select actor_id, first_name, last_name, last_update from actor;";


    return $conexion->query($sql)->fetchAll();

}


function insertarActores($conexion, $datos)
{
    $sql = "insert into actor (first_name, last_name) values (:nombreActor, :apellidoActor);";

    return $conexion->prepare($sql)->execute($datos);

}






