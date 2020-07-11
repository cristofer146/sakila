<?php

require_once "funciones/ayudante.php";


$nombrepagina = "Dirección";

//Incluir los modelos
require_once "modelo/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);

//imprimirArray($ciudades);

//imprimirArray($ciudades);

//imprimirArray($_GET);

$direccion = $_GET['direccion'] ?? "";

$direccion2 =  $_GET['direccion2'] ?? "";

$distrito =  $_GET['distrito'] ?? "";

$ciudad =  $_GET['ciudad'] ?? "";

$codigoPostal =  $_GET['codigoPostal'] ?? "";

$telefono =  $_GET['telefono'] ?? "";

$ubicion =  $_GET['ubicacion'] ?? "";

// Cuando el usuario haga click en el boton guardardireccion
if (isset($_GET['guardandoDireccion'])) {

}


// codigo para la base de datos
echo "guardando datos...";


// Incluir la vista
include_once "vista/vista_direccion.php";


?>


