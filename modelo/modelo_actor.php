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

function eliminarActores($conexion, $datos)
{

    $sql = "  DELETE from film_actor where actor_id = :idActor;

delete from actor where  actor_id = :idActor;";

    return $conexion->prepare($sql)->execute($datos);
}


function otenerActorPorId($conexion, $datos)
{
    $sql = "select  * from actor where actor_id = :idActor;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();
}

function editarActores($conexion, $datos)
{
    $sql = "update actor set first_name = :nombreActor, last_name = :apellidoActor where actor_id = :idActor;";

    return $conexion->prepare($sql)->execute($datos);

}








