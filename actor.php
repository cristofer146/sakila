<?php



require_once "funciones/ayudante.php";
require_once "modelo/modelo_actor.php";



// Declarar las variables
$nombrepagina = "Actor";



$idActor = $_POST['idActor'] ?? "";
$nombreActor = $_POST['nombreActor'] ?? "";
$apellidoActor = $_POST['apellidoActor'] ?? "";


//imprimirArray($_POST);


try {

// Asegurarnos de que el usuario haya hecho click en el boton Guardar
    if ( isset($_POST['guardar_actor']) ) {

        $validaciones = [];

        //validar datos
        if ( empty($nombreActor) ) {
            $validaciones ['errorNombre'] = ("El nombre no puede estar vacio.");
        }

        if ( empty($apellidoActor) ) {
            $validaciones ['errorApellido'] = ("El apellido no puede estar vacio.");
        }


        if (!empty($validaciones)) {
            throw new Exception("Verifique los mensajes de errores");
        }

        // Preparar el arrau con los datos
        $datos = compact('nombreActor', 'apellidoActor');

        if ( empty($idActor) ) {
            //Insertar los dastos
            $actorInsertado = insertarActores($conexion, $datos);

            $_SESSION ['mensaje'] = "Los datos fueron creados correctamente.";


            //Lanzar un error si no se inserto correctamente
            if ( ! $actorInsertado ) {
                throw new Exception("Ocurrio un error al datos del actor");
            }

        } else {
            //Agregar el id al array datos
            $datos['idActor'] = $idActor;

            //actualizar datos
          $actorEditado = editarActores($conexion, $datos);

            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

          if (!$actorEditado) {
          throw new Exception("ocurrio un error al editar los datos");
          }

        }


        //Redirecciona la pagina
         redireccionar("actor.php");
    }


    // Asegurarnos que el usuario haya hecho click en el boton eliminar

    if ( isset($_POST['eliminarActor']) ) {
        $idActor = $_POST['eliminarActor'] ?? "";

        //validar
        if ( empty($idActor) ) {
            throw new Exception("El id del actor no puede estar vacio.");
        }



        // Preparar el arrau con los datos
        $datos = compact('idActor');


        //Insertar los dastos
        $eliminado = eliminarActores($conexion, $datos);

        $_SESSION['mensaje'] =  "Los datos fueron eliminados correctamente";


        //Lanzar un error si no se inserto correctamente
        if ( ! $eliminado ) {
            throw new Exception("Los datos no se eliminaron correctamente.");
        }


        //Re-direccionar
        // redireccionar("actor.php");

    }


    if ( isset($_POST['editarActor']) ) {
        $idActor = $_POST['editarActor'] ?? '';


        if ( empty($idActor) ) {

            throw new Exception("El valor del id del Actor esta vacio.");
        }

        $datos = compact('idActor');
        $resultado = otenerActorPorId($conexion, $datos);


        $nombreActor = $resultado ['first_name'];
        $apellidoActor = $resultado ['last_name'];


    }


} catch ( Exception $e ) {
    $error = $e->getMessage();
}


$actores = obtenerActores($conexion);


// Incluir la vista
include_once "vista/vista_actor.php";




