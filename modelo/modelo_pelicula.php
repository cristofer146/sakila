<?php

include_once "config/conexion.php";

function obtenerPeliculas(PDO $conexion)
{
  $sql = "select film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update from film";

 return $conexion->query($sql)->fetchAll();

}

function insertarpeliculas($conexion, $datos)
{
    $sql = "INSERT INTO
    film
    (title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features, last_update) 
  VALUES
    (:titulo,  :descripcion, :anolazamiento, :idioma, :idiomaoriginal, :duracion, :tasaArredamiento, :tamano, :costoreemplazo, :calificacion, :caracteristicas, :atualizacion);";

    return $conexion->prepare($sql)->execute($datos);
}
