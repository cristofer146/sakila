<?php



$ajustes = [
   19 => 2  // Esta equivale a traer los registros en forma de array asociativo

];

define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD","02200405");
define("DB_NAME", "sakila");

try {

    $conexion = new PDO(DB_DRIVER . ":host=" . DB_HOST .  ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD, $ajustes );

}
catch (PDOException $exception) {

    throw new Exception("Hubo un error al conectarnos a la base de Datos {$exception->getMessage()}");
}











