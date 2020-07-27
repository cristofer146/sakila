<?php

require_once "funciones/ayudante.php";
require_once "modelo/modelo_catergoria.php";


$categorias = obtenerCategorias($conexion);


$nombrepagina = "Categoria";


// Incluir vista
include_once "vista/vista_categoria.php";