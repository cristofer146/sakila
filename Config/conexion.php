<?php




$usuario = "root";

$contrasena = "02200405";

$ajustes = [
   19 => 2  // Esta equivale a traer los registros en forma de array asociativo

];

try {

    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena, $ajustes);

} catch (PDOException $exception) {

    throw new Exception("Hubo un error al conectarnos a la base de datos: {$exception->getMessage()}");
}











