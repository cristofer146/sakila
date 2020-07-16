<?php

require_once "Config/conexion.php";

function obtenerDirecciones($conexion){

    $sql = "SELECT * FROM address";

    return $conexion->query($sql)->fetchAll();
}
