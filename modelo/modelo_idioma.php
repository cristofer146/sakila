<?php


require_once "config/conexion.php";

function obtenerIdiomas($conexion)
{

    $sql = "SELECT * FROM language";

    return $conexion->query($sql)->fetchAll();

}
function insertarIdiomas($conexion, $datos)
{
    $sql = "INSERT INTO language ( name ) VALUES(:nombreIdiomas);";

    return $conexion->prepare($sql)->execute($datos);


}