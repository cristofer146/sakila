<?php


require_once "config/conexion.php";

function obtenerPersonal($conexion)
{

    $sql = "SELECT store_id FROM store";

    return $conexion->query($sql)->fetchAll();

}

function insertarPersonal($conexion, $datos)
{


    $sql = "INSERT INTO staff ( first_name, last_name, address_id, email, store_id, picture, username, password) VALUES (:nombrePersonal, :nombreApellido, :nombreDireccion, :'nombreimagenes', :nombreCorreo, :nombreTienda, :nombreUsuario, :nombreContrana);";
    return $conexion->prepare($sql)->execute($datos);


}


