
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


foreach ($paginasMenu as $nombreArchivo => $pagina) {

    $icono = $pagina[1];
    $textoPagina = $pagina[0];

    echo " <a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"{$nombreArchivo}.php\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">
                 <i class=\"{$icono}\"></i>
                 {$textoPagina}   
        </a>";

}

?>








