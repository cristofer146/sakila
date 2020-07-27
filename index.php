<?php

require_once "funciones/ayudante.php";

// Incluir los modelos
require_once "modelo/modelo_actor.php";


$actores = obtenerActores($conexion);


$nombrepagina = "principal";


//incluir las vistas
include_once "vista/vista_principal.php";



