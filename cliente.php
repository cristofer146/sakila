<?php
$nombrepagina = "Cliente";

require_once "funciones/ayudante.php";
require_once "modelo/modelo_cliente.php";
require_once "modelo/modelo_tienda.php";
require_once "modelo/modelo_direccion.php";












$clientes = obtenerCliente($conexion);
$informacionTiendas = obtenerInformacionTiendas($conexion);
$direcciones = obtenerDirecciones($conexion);
include_once "vista/vista_cliente.php";