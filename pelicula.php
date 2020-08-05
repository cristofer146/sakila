<?php


// Aqui se van a incluir los modelos
require_once "funciones/ayudante.php";
include_once "modelo/modelo_idioma.php";
include_once "modelo/modelo_pelicula.php";


$nombrepagina = "Pelicula";


imprimirArray($_POST);


$titulo = $_POST['titulo'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$anolazamiento = $_POST['anolazamiento'] ?? "";
$idioma = $_POST['idioma'] ?? "";
$idiomaoriginal = $_POST[''] ?? "idiomaoriginal";
$duracion = $_POST['duracion'] ?? "";
$tasaArredamiento = $_POST['tasaArredamiento'] ?? "";
$tamano = $_POST['tamano'] ?? "";
$costoreemplazo = $_POST['costoreemplazo'] ?? "";
$clasificacion = $_POST['calificacion'] ?? "";
$caracteristicas = $_POST['caracteristicas'] ?? "";
$atualizacion = $_POST['atualizacion'] ?? "";

try {
    if ( isset($_POST['guardar_datos']) ) {


        //validar datos
        if ( empty($titulo) ) {
            throw new Exception("El titulo no puede estar vacio.");

        }

        $caracteristicas = implode(',', $caracteristicas);


        if ( empty($descripcion) ) {
            throw new Exception("La descripcion no puede estar vacio.");
        }

        if ( empty($anolazamiento) ) {
            throw new Exception(" El Lazamiento no puede estar vacio.");
        }

        if ( empty($idioma) ) {
            throw new Exception(" EL idioma original no puede estar vacio.");
        }

        if ( empty($idiomaoriginal) ) {
            throw new Exception(" El Idioma no puede estar vacio.");
        }

        if ( empty($duracion) ) {
            throw new Exception(" La Duración no puede estar vacio.");
        }

        if ( empty($tasaArredamiento) ) {
            throw new Exception("La Tasa de arredamiento  no puede estar vacio.");
        }

        if ( empty($tamano) ) {
            throw new Exception("EL Tamaño no puede estar vacio.");
        }

        if ( empty($costoreemplazo) ) {
            throw new Exception("EL Costo reemplazo no puede estar vacio.");
        }

        if ( empty($calificacion) ) {
            throw new Exception("La Calificación no puede estar vacio.");
        }

        if ( empty($caracteristicas) ) {
            throw new Exception("EL Telefono no puede estar vacio.");
        }

        if ( empty($atualizacion) ) {
            throw new Exception("EL Telefono no puede estar vacio.");
        }

        // Preparar el arrau con los datos
        $datos = compact('titulo', ' descripcion', 'lazamiento', 'idioma', 'idiomaoriginal', 'duracion', 'tasaArredamiento', 'tamano', 'costoreemplazo', 'calificacion', 'caracteristicas','atualizacion');


        $peliculasinsertar =   insertarpeliculas($conexion, $datos);

        $mensaje = "Ocurrio un error al insertar los datos del actor";




    }
} catch ( Exception $e ) {
    $error = $e->getMessage();

}



$idiomas = obtenerIdiomas($conexion);

$peliculas = obtenerPeliculas($conexion);


include_once "vista/vista_pelicula.php";