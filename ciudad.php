<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_pais.php";
require_once "modelo/modelo_ciudad.php";




    //Declarar las variables
    $nombrepagina = "Ciudad";


    $nombreCiudad = $_POST['nombreCiudad'] ?? "";

    $idPais = $_POST['idPais'] ?? "";

     imprimirArray($_POST);

try {
    if (isset($_POST['guardar_datos'])) {




        //validar datos
        if (empty($nombreCiudad)) {
            throw new Exception("El nombre Esta vacio.");

        }

        if (empty($idPais)) {
            throw new Exception("Debe de seleccionar un pais");
        }

        $datos = compact('nombreCiudad', 'idPais');


        $ciudadIncertada = insertarCiudades($conexion, $datos);

        if (!$ciudadIncertada) {
            throw new Exception("Ocurrio un error al insertar los datos del actor");
        }



        // Redireccionar la pagina
        redireccionar("ciudad.php");


    }
} catch (Exception $e) {
    $error = $e->getMessage();

}



//traer los datos de los modelos
$paises = obtenerPaises($conexion);
    $ciudades = obtenerCiudades($conexion);


// Incluir la vista
    include_once "vista/vista_ciudad.php";