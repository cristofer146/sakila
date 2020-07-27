<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_idioma.php";
require_once "modelo/modelo_direccion.php";

$nombrePagina = "Idioma";
// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_POST['idioma'])) {

    echo "Se van ha guardar los datos....";
}

$idioma = obtenerIdiomas($conexion);

//imprimirArray($idiomas);

// Incluir la vista

include_once "vista/vista_idioma.php";