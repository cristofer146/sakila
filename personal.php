<?php

include_once "modelo/modelo_personal.php";
include_once "modelo/modelo_direccion.php";
include_once "modelo/modelo_tienda.php";
include_once "modelo/modelo_gerente.php";


$nombrepagina = "personal";


$nombrePersonal = $_POST ['nombrePersonal'] ?? "";

$nombreApellido = $_POST ['nombreApellido'] ?? "";

$nombreDireccion = $_POST ['nombreDireccion'] ?? "";

$nombreImagenes = $_POST['nombreImagenes'] ?? "";

$nombreCorreo = $_POST['nombreCorreo'] ?? "";

$nombreTienda = $_POST['nombreTienda'] ?? "";

$nombreUsuario = $_POST['nombreUsuario'] ?? "";

$nombreContrana = $_POST['nombreContrseña'] ?? "";


//Asegurarnos de que el usuario haya hecho click en el boton Guardar Actor
try {
    if ( isset($_POST['guardar_datos']) ) {

        $validaciones = [];

        //validar datos
        if ( empty($nombrePersonal) ) {
            $validaciones ['errorPersonal'] = ("El nombre no puede estar vacio.");
        }

        if ( empty($nombreApellido) ) {
            $validaciones ['errorApellido'] = ("Campo apellido vacio.");
        }

        if ( empty($nombreDireccion) ) {
            $validaciones ['errorDireccion'] = ("Campo direccion vacio.");
        }

        if ( empty($nombreCorreo) ) {
            $validaciones ['errorCorreo'] = (" Campo correo vacio.");
        }

        if ( empty($nombreUsuario) ) {
            $validaciones ['errorUsuario'] = ("Campo de usuario vacio.");
        }

        if ( empty($nombreContrana) ) {
            $validaciones ['errorContrana'] = ("Campo de contraseña vacio.");
        }

        if ( ! empty($validaciones) ) {
            throw new Exception("Verifique los mensajes de errores");
        }


        // Preparar el arrau con los datos
        $datos = compact('nombrePersonal', 'nombreApellido', 'nombreDireccion', 'nombreImagenes', 'nombreCorreo', 'nombreTienda', 'nombreUsuario', 'nombreContrana');


        $direccioneinsertar = insertarPersonal($conexion, $datos);
        $_SESSION['mensaje'] = "LOS DATOS FUERON CREADO CORRECTAMENTE";

        if ( ! $direccioneinsertar ) {
            throw new Exception("Ocurrio un error al datos del actor");
        }


        //Redirecciona la pagina
        redireccionar("personal.php");

    }
} catch ( Exception $e ) {
    $error = $e->getMessage();
}

$Personales = obtenerPersonal($conexion);

$tiendas = obtenerTienda($conexion);

$gerentes = obtenerGerente($conexion);

$direcciones = obtenerDirecciones($conexion);

include_once "vista/vista_personal.php";