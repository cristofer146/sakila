<?php


function incluir_vista($nombre){
    include_once "vista/vista_{$nombre}.php";

}

function reportarErrores($numero, $mensage,$archivo,$linea) {

    $codigos = [
      1 => "Error fatal",
      2 => "Advertencia",
      8 => "Aviso",





    ];

    echo "<div class=\"alert alert-warning\" role=\"alert\">
        <h4 class=\"alert-heading\">{$codigos[$numero]}</h4>
        <p>{$mensage}</p>
        <hr>
        <span> En la linea <b> {$linea}</b> del archivo <b>{$archivo}</b></span>
        </div>";


}







set_error_handler( 'reportarErrores');


function reportarExcepciones($exception) {
 echo "<link rel=\"stylesheet\" href= \"static/css/bootstrap.min.css\">";

 echo  "<div class=\"alert alert-danger\" role=\"alert\">
         
         <h4 class=\"alert-heading\">Ha ocurrido una excepcion</h4>
         
         <p>{$exception->getMessage()}</p>
         <hr>
         <span>En la linea <b>{$exception->getMessage()}</b> del archivo <b>{$exception->getFile()}</b></span>

         </div>";
    
}

set_exception_handler('reportarExcepciones');

function imprimirArray($array) {
    echo  "<pre>";
    print_r($array);
    echo "</pre>";
}