<?php


$nombrepagina = "Tienda";

require_once "funciones/ayudante.php";


//Incluir modelos

require_once "modelo/modelo_tienda.php";



$informacionTiendas = obtenerInformacionTiendas($conexion);




//incluir la vista
include_once "vista/vista_tienda.php";