<?php

require_once "funciones/ayudante.php";

require_once "modelo/modelo_pais.php";

$paises = obtenerPaises($conexion);



$nombrepagina = "Pais";





include_once "vista/vista_pais.php";