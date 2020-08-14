<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_idioma.php";
require_once "modelo/modelo_direccion.php";

$nombrePagina = "Idioma";

$nombreIdiomas = $_POST ['nombreIdiomas'] ?? "";
// Aseguremonos de que el usuario haya hecho click en el boton




try {



    if ( isset($_POST['guardar_datos']) ) {



        //validar datos
        if ( empty($nombreIdiomas) ) {
            throw new Exception('Debe de seleccionar un idioma.');
        }

        // Preparar el arrau con los datos
        $datos = compact('nombreIdiomas');


        //Insertar los dastos
        $IdiomasInsertado = insertarIdiomas($conexion, $datos);

        $_SESSION['mensaje'] = "LOS DATOS FUERON CREADO CORRECTAMENTE";


        //Lanzar un error si no se inserto correctamente
        if ( ! $IdiomasInsertado ) {
            throw new Exception("Ocurri al insertar los datos del actor");
        }

        //Redirecciona la pagina
        redireccionar("idioma.php");

    }


} catch ( Exception $e ) {
    $error = $e->getMessage();

}


//cargat datos de los modelos
$idioma = obtenerIdiomas($conexion);

//imprimirArray($idiomas);

// Incluir la vista

include_once "vista/vista_idioma.php";