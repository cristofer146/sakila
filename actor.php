<?php

require_once "funciones/ayudante.php";
require_once  "modelo/modelo_actor.php";

$nombrepagina = "Actor";



// Declarar las variables
$nombreActor = $_GET['nombreActor'] ?? "";
$apellidoActor = $_GET['apellidoActor'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor
if (isset($_GET['guardar_actor'])) {

  // codigo para guardar en la base de datos
echo "Se van a guardar los datos...";
}


$actores = obtenerActores($conexion);





// Incluir la vista
include_once "vista/vista_actor.php";




