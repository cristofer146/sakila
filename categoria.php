<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_catergoria.php";



$nombrepagina = "Categoria";


$nombreCategoria = $_POST['nombreCategoria'] ?? "";


try {
    if ( isset($_POST['guardar_datos']) ) {


        //validar datos
        if ( empty($nombreCategoria) ) {
            throw new Exception('El nombre no puede estar vacio.');
        }

        // Preparar el arrau con los datos
        $datos = compact('nombreCategoria');


        //Insertar los dastos
        $CategoriaInsertado = insertarCategoria($conexion, $datos);

        $_SESSION['mensaje'] = "LOS DATOS FUERON CREADO CORRECTAMENTE";


        //Lanzar un error si no se inserto correctamente
        if ( ! $CategoriaInsertado ) {
            throw new Exception("Ocurri al insertar los datos del actor");
        }

        //Redirecciona la pagina
        redireccionar("Categoria.php");


    }
} catch ( Exception $e ) {

    $error = $e->getMessage();
}


//Cargando los modelos
$categorias = obtenerCategorias($conexion);


// Incluir vista
include_once "vista/vista_categoria.php";