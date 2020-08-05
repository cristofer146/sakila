<?php include_once "componentes/comp_head.php"; ?>

<body xmlns="http://www.w3.org/1999/html">

<!-- barra superior -->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="static/img/descarga.jpg" width="30" height="30" class="d-inline-block align-top" alt=""
             loading="lazy">
        sakila
    </a>
</nav>

<!-- contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <?php include_once "componentes/comp_menu.php"; ?>
        </div>


        <div class="col-md-10">
            <h2> <?php echo $nombrepagina; ?></h2>


            <hr>

            <div class="row">
                <div class="col-md-5">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="titulo">Titulo:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="anolanzamiento" class="form-label">Año de lanzmiento</label>
                            <input class="form-control" list="listadoAnios" name="anoLanzamiento" id="anolanzamiento"
                                   placeholder="Elige el año de lazamiento">
                            <datalist id="listadoAnios">

                                <?php

                                for ( $year = date("Y"); $year >= 1980; $year-- ) {
                                    echo "<option value=\"{$year}\">";
                                }


                                ?>


                            </datalist>

                        </div>


                        <div class="mb-3">
                            <label for="idiomaoriginal">Idioma original:</label>
                            <select name="idiomaoriginal" id="idiomaoriginal" class="form-select">
                                <option value="">Seleccione un idioma:</option>


                                <?php

                                foreach ($idiomas as $idioma) {

                                    echo "<option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                }


                                ?>



                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="idioma">Idiomas</label>
                            <select name="idioma" id="idioma" class="form-select">
                                <option value="">Seleccione un idioma:</option>


                                <?php

                                foreach ($idiomas as $idioma) {

                                    echo "<option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                }


                                ?>


                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="duracion">Duración de renta:</label>
                            <input type="tel" name="duracion" id="duracion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="tasaArredamiento">Tasa de arrendamiento:</label>
                            <input type="text" name="tasaArredamiento" id="tasaArredamiento" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="tamano">Tamaño:</label>
                            <input type="text" name="tamano" id="tamano" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="costoreemplazo">Costo de reemplazo:</label>
                            <input type="text" name="" id="costoreemplazo" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="clasificacion">Clasificacion:</label>
                            <select name="clasificacion" id="clasificacion" class="form-select">
                                <option value="">Elige un rating</option>
                                <?php


                                $clasificaciones = ['G', 'PG', 'PG-13', 'R', 'NC-17'];


                                foreach ( $clasificaciones as $clasificacion ) {
                                    echo "<option value=\"{$clasificacion}\">{$clasificacion}</option>";

                                }

                                ?>
                            </select>


                        </div>

                        <div class="mb-3">
                            <label for="caracteristicas" class="form-label">Caracteristicas especiales</label>


                            <select name="caracteristicas[]" id="caracteristicas" class="form-select" multiple>
                                <option value="">Elige una o mas caracteristicas especiales</option>
                                <?php


                                $caracteristicas = ['Trailers', 'Commentaries', 'Deleted Scenes', 'Behind the Scenes'];


                                foreach ( $caracteristicas as $caracteristica ) {
                                    echo "<option value=\"{$caracteristica}\">{$caracteristica}</option>";

                                }

                                ?>
                            </select>


                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>
                    <table class="table table-hover">
                        <thead>

                        <th scope="col">ID de pelicula</th>
                        <th scope="col">Nombre del titulo</th>
                        <th scope="col">Nombre de la descripcion</th>
                        <th scope="col">Nombre del año de lazamiento</th>
                        <th scope="col">ID de idioma</th>
                        <th scope="col">Idioma original</th>
                        <th scope="col">Duracion del alquiler</th>
                        <th scope="col">Tasa de renta</th>
                        <th scope="col">Longitud de la pelicula</th>
                        <th scope="col">Remplazo de costo</th>
                        <th scope="col">Clasificación de la pelicula </th>
                        <th scope="col">Carateristicas especiales</th>
                        <th scope="col">última actualización</th>
                        </thead>
                        <tbody>


                        <?php

                        foreach ($peliculas as $pelicula) {

                            echo "<tr>
                             <th scope=\"row\">{$pelicula['film_id']}</th>
                             <td>{$pelicula['title']}</td>
                             <td>{$pelicula['description']}</td>
                             <td>{$pelicula['release_year']}</td>
                             <td>{$pelicula['language_id']}</td>
                             <td>{$pelicula['original_language_id']}</td>
                             <td>{$pelicula['rental_duration']}</td>
                             <td>{$pelicula['rental_rate']}</td>
                             <td>{$pelicula['length']}</td>
                             <td>{$pelicula['replacement_cost']}</td>
                             <td>{$pelicula['rating']}</td>
                             <td>{$pelicula['special_features']}</td>
                             <td>{$pelicula['last_update']}</td>
                              </tr>";

                        }
                        ?>

                        </tbody>
                    </table>


                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>


