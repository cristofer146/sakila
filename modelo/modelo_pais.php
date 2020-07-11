<?php

//Incluir la conexion
require_once "config/conexion.php";


function obtenerPaises($conexion) {
    //Paises
    $sql = "select * from country;";

    return  $conexion->query(($sql))->fetchAll();
}

