<?php


//Incluir modelos
require_once "funciones/ayudante.php";
require_once "modelo/modelo_tienda.php";
require_once  "modelo/modelo_gerente.php";
require_once  "modelo/modelo_direccion.php";

$nombrepagina = "Tienda";



$nombreTienda = $_POST['nombreTienda'] ?? "";

$nombreDireccion = $_POST['nombreDireccion'] ?? "";


imprimirArray($_POST);

try {



    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor
    if ( isset($_POST['guardar_datos']) ) {

        //validar datos
        if ( empty($nombreTienda) ) {
            throw new Exception("selccione un gerente.");

        }


        if ( empty($nombreDireccion) ) {
            throw new Exception("Seleccione una dirección.");

        }



        $datos = compact('nombreTienda', 'nombreDireccion');


        $TiendasInsertada = insertarTiendas($conexion, $datos);
        $_SESSION['mensaje'] = "LOS DATOS FUERON CREADO CORRECTAMENTE";



        if ( ! $TiendasInsertada ) {
            throw new Exception("Ocurrio un error al insertar los datos del actor");
        }


        // Redireccionar la pagina
        redireccionar("tienda.php");


    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}


$direcciones = obtenerDirecciones($conexion);
$informacionTiendas = obtenerInformacion($conexion);
$gerente = obtenerGerente($conexion);

//incluir la vista
include_once "vista/vista_tienda.php";