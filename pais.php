<?php

require_once "funciones/ayudante.php";

require_once "modelo/modelo_pais.php";

require_once  "modelo/modelo_ciudad.php";





$nombrepagina = "Pais";

$nombrepais = "nombrepais" ?? "";


try {


//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor

    if ( isset($_POST['guardar_datos']) ) {


        //validar datos
        if ( empty($nombre) ) {
            throw new Exception("El nombre no puede estar vacio.");
        }



        // Preparar el arrau con los datos
        $datos = compact('nombrepais');


        //Insertar los dastos
        $actorInsertado = insertarActores($conexion, $datos);

        $mensaje = "Ocurrio un error al insertar los datos del actor";


        //Lanzar un error si no se inserto correctamente
        if ( ! $actorInsertado ) {
            throw new Exception("Ocurri al insertar los datos del actor");
        }

        //Redirecciona la pagina
        redireccionar("pais.php");

    }

} catch ( Exception  $e ) {
    $error = $e->getMessage();
}





$paises = obtenerPaises($conexion);

include_once "vista/vista_pais.php";