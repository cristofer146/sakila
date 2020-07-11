<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);



$nombrepagina = "Ciudad";

// Incluir la vista
include_once "vista/vista_ciudad.php";