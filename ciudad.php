<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_ciudad.php";
require_once "modelo/modelo_pais.php";

$ciudades = obtenerCiudades($conexion);

$paises = obtenerPaises($conexion);



///imprimirArray($ciudades);

$nombrepagina = "Ciudad";

// Incluir la vista
include_once "vista/vista_ciudad.php";