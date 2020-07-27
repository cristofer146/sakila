<?php

//Incluir la conexion
require_once "config/conexion.php";


function obtenerPaises($conexion)
{
    //Paises
    $sql = "select * from country;";

    return $conexion->query($sql)->fetchAll();
}

function insertarDireciones($conexion, $datos)
{
 $sql = "INSERT INTO country (country_id, country, last_update) VALUE (:countryId,:country,:lastUpdate);";

    return $conexion->prepare($sql)->execute($datos);
}


