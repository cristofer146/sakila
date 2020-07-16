
<?php


$paginasMenu = [

    "index"     => ["Inicio", "fas fa-home"],
    "actor"     => ["Actor", "fas fa-user"],
    "direccion" => ["Dirección", "fas fa-compass"],
    "ciudad"    => ["Ciudad", "fas fa-city"],
    "pais"      => ["país", "fas fa-flag"],
    "cliente"   => ["Cliente", "fas fa-users"],
    "personal"  => ["Personal", "fas fa-user-tie"],
    "idioma"    => ["Idioma", "fas fa-language"],
    "pelicula"  => ["Pelicula", "fas fa-film"],
    "categoria" => ["Categoria", "fas fa-tag"],
    "tienda"    => ["Tienda", "fas fa-store"]

];

$url= $_SERVER['REQUEST_URI'];
foreach ($paginasMenu as $nombreArchivo => $item) {
    $paginaActual= '';
    if(strpos($url,$nombreArchivo)){
       $paginaActual= 'activo';
    }

    $icono = $item[1];
    $textoPagina = $item[0];

    echo "<a class=\"nav-link {$paginaActual}\" href=\"{$nombreArchivo}.php\"> <i class=\"{$icono}\"></i> {$textoPagina}</a>";





}

?>








