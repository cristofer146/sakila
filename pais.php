<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_pais.php";





$nombrepagina = "Pais";




$nombrepais = $_POST['nombrepais'] ?? "";




try {


//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor

    if ( isset($_POST['guardar_datos']) ) {




        //validar datos
        if ( empty($nombrepais) ) {
            throw new Exception("Debe dijitar un país.");
        }



        // Preparar el arrau con los datos
        $datos = compact('nombrepais');



        //Insertar los dastos
        $paisesInsertado = insertarpaises($conexion, $datos);

        $_SESSION['mensaje'] = "LOS DATOS FUERON CREADO CORRECTAMENTE";


        //Lanzar un error si no se inserto correctamente
        if ( ! $paisesInsertado ) {
            throw new Exception("Ocurri al insertar los datos del actor");
        }

        //Redirecciona la pagina
        redireccionar("pais.php");

    }

} catch ( Exception  $e ) {
    $error = $e->getMessage();

}




//cargat datos de los modelos
$paises = obtenerPaises($conexion);

include_once "vista/vista_pais.php";