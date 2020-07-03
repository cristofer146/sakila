<?php

require_once "funciones/ayudante.php";

$nombrepagina = "Actor";



// Declarar las variables
$nombreActor = $_GET['nombreActor'] ?? "";
$apellidoActor = $_GET['apellidoActor'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor
if (isset($_GET['guardar_actor'])) {

  // codigo para guardar en la base de datos
echo "Se van a guardar los datos...";
}



// Incluir la vista
include_once "vista/vista_actor.php";




