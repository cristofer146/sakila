<?php


// valores de mi base de datos local (mi pc)
$host = "localhost";

$dbname = "sakila";

$usuario = "root";

$contrasena = "02200405";

//imprimirArray($_SERVER);
// Valores de la base de datos 00webhost

if ($_SERVER['SERVER_NAME'] == 'tedivina.000webhostapp.com') {
    $host = "localhost";
    $dbname = "id12551035_sakila";
    $usuario = "id12551035_christopher_000webhost";
    $contrasena = ")AD^ZrPQnD6~VwTX";
}


$ajustes = [
    19 => 2,  // Esta equivale a traer los registros en forma de array asociativo
    3  => 2,
];

try {

    $conexion = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $contrasena, $ajustes);

} catch (PDOException $exception) {

    throw new Exception("Hubo un error al conectarnos a la base de Datos {$exception->getMessage()}");
}











