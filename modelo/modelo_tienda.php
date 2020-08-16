<?php

//icluyo el archivo conexion
require_once "config/conexion.php";


function obtenerTiendas($conexion)
{

    $sql = "SELECT  store_id FROM store";

    return $conexion->query($sql)->fetchAll();
}


function obtenerTienda($conexion)
{
    $sql = "select sto.store_id, sto.manager_staff_id, sto.address_id, sta.first_name, a.address

from store as sto left join staff as sta on sto.manager_staff_id = sta.staff_id
left join address as a on sto.address_id = a.address_id;";

    return $conexion->query($sql)->fetchAll();
}

function insertarTiendas($conexion, $datos)
{
    $sql = "INSERT INTO store ( manager_staff_id, address_id ) VALUES (:nombreTienda, :nombreDireccion);";

    return $conexion->prepare($sql)->execute($datos);


}
