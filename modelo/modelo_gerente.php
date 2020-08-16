<?php

require_once "config/conexion.php";


function obtenerGerente ($conexion)
{
    $sql = "SELECT staff_id, first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update FROM staff";

    return $conexion->query($sql)->fetchAll();

}