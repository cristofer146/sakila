<?php

require_once "config/conexion.php";

function obtenerDirecciones($conexion)
{

    $sql = "SELECT * FROM address";

    return $conexion->query($sql)->fetchAll();
}

function insertarDireciones($conexion, $datos)
{
   $sql = " INSERT INTO address ( address, address2, district, city_id, postal_code, phone)
    VALUES
  (:direccion, :direccion2, :distrito, :ciudad, :codigoPostal, :telefono)";

    return $conexion->prepare($sql)->execute($datos);

}