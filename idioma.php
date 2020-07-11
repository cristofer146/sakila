<?php

$nombrepagina = "idioma";


require_once "funciones/ayudante.php";

require_once "modelo/modelo_idioma.php";

$nombrePagina = "Idioma";

// Aseguremonos de que el usuario haya hecho click en el boton
if (isset($_GET['idioma'])){

    echo "Se van ha guardar los datos....";
}

$idiomas = obtenerIdiomas($conexion);

//imprimirArray($idiomas);

// Incluir la vista

include_once "vista/vista_idioma.php";