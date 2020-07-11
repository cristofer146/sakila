<?php


require_once "modelo/modelo_pais.php";
require_once "modelo/modelo_ciudad.php";


// paises

$paises = obtenerPaises($conexion);



// Ciudades
$ciudades = obtenerCiudades($conexion);


//echo "<pre>";
//print_r($paises);
//echo "</pre>";

foreach ($paises as $pais){
    echo "El pais #{$pais['country_id']} es {$pais['country']}";
    echo "<br>";
}


include_once "vista/vista_listado.php";






