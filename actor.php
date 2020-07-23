<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_actor.php";

$nombrepagina = "Actor";

imprimirArray($_POST);
// Declarar las variables
$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";
try {


//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor

    if ( isset($_POST['guardar_actor']) ) {


        //validar datos
        if ( empty($nombreActor) ) {
            throw new Exception("El nombre no puede estar vacio.");
        }

        if ( empty($apellidoActor) ) {
            throw new Exception("El apellido no puede estar vacio.");
        }

        // Preparar el arrau con los datos
        $datos = compact('nombreActor', 'apellidoActor');


        //Insertar los dastos
        $actorInsertado = insertarActores($conexion, $datos);

        $mensaje = "Ocurrio un error al insertar los datos del actor";


        //Lanzar un error si no se inserto correctamente
        if ( ! $actorInsertado ) {
            throw new Exception("Ocurri al insertar los datos del actor");
        }

        //Redirecciona la pagina
        redireccionar("actor.php");

    }

} catch ( Exception  $e ) {
    $error = $e->getMessage();


}


$actores = obtenerActores($conexion);


// Incluir la vista
include_once "vista/vista_actor.php";




