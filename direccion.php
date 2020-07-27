<?php

//Incluir los modelos
require_once "funciones/ayudante.php";
require_once "modelo/modelo_ciudad.php";
require_once "modelo/modelo_direccion.php";

$nombrepagina = "Dirección";


///imprimirArray($direccion);

//imprimirArray($ciudades);

//imprimirArray($_POST);

$direccion = $_POST['direccion'] ?? "";

$direccion2 = $_POST['direccion2'] ?? "";

$distrito = $_POST['distrito'] ?? "";

$ciudad = $_POST['ciudad'] ?? "";

$codigoPostal = $_POST['codigoPostal'] ?? "";

$telefono = $_POST['telefono'] ?? "";

$ubicion = $_POST['ubicacion'] ?? "";


// Cuando el usuario haga click en el boton guardardireccion
try {
    if ( isset($_POST['guardando_Direccion']) ) {


        //validar datos
        if ( empty($direccionion) ) {
            throw new Exception("El nombre no puede estar vacio.");
        }

        if ( empty($direccion2) ) {
            throw new Exception("La direccion 2 no puede estar vacio.");
        }

        if ( empty($distrito ) ) {
            throw new Exception(" Ditrito no puede estar vacio.");
        }

        if ( empty($ciudad) ) {
            throw new Exception(" Ciudad no puede estar vacio.");
        }

        if ( empty($codigoPostal) ) {
            throw new Exception(" Codigo postal no puede estar vacio.");
        }

        if ( empty($telefono) ) {
            throw new Exception(" Telefono no puede estar vacio.");
        }

        if ( empty($ubicacion) ) {
            throw new Exception(" Telefono no puede estar vacio.");
        }


        // Preparar el arrau con los datos
        $datos = compact('direccion', 'direccion2', 'distrito', 'ciudad', 'codigoPostal', 'telefono');



        $direccioneinsertar =   insertarDireciones($conexion, $datos) ;

        $mensaje = "Ocurrio un error al insertar los datos del actor";




    }
} catch ( Exception $e ) {
 $error = $e->getMessage();

}



// codigo para la base de datos
$direcciones = obtenerDirecciones($conexion);
$ciudades = obtenerCiudades($conexion);

// Incluir la vista
include_once "vista/vista_direccion.php";





