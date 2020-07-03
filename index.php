<?php

require_once "funciones/ayudante.php";


$nombrepagina = "principal";


//imprimirArray($_GET);






$monto = $_GET['monto'] ?? "1000";

$nombre = $_GET['nombre'] ?? "";

$edad = $_GET['edad'] ?? "";

$ciudad =$_GET['ciudad'] ?? "";

$q =$_GET['q'] ?? "";



//incluir las vistas
include "vista/vista_principal.php";




