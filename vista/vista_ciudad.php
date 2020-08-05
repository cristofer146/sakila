<?php include_once "componentes/comp_head.php"; ?>

<body>
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="static/img/descarga.jpg" width="30" height="30" alt="" loading="lazy">
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

            <div class="row">
                <div class="col-md-5">

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nombreCiudad">Nombre de la ciudad </label>
                            <input type="text" name="nombreCiudad" id="nombreCiudad" class="form-control"
                                   placeholder="Escribe el nombre de tu ciudad">
                        </div>

                        <div class="mb-3">

                            <label for="idPais" class="form-label">Pais</label>


                            <?php if ( empty($paises) ) { ?>
                                <div class="form-label"><i class="fas fa-info-circle"></i> No hay paises registrados
                                </div>
                            <?php } else { ?>
                                <select name="idPais" id="idPais" class="form-select">
                                    <option value="">Seleccione un pais</option>


                                    <?php

                                    foreach ( $paises as $pais ) {

                                        echo "<option value=\"{$pais["country_id"]}\">{$pais["country"]}</option>";
                                    }


                                    ?>
                                </select>
                            <?php } ?>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>


                    <?php

                    if (isset($error)) {
                            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                            {$error}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                    }


                    if (isset($ciudadIncertada)) {
                        echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                Los datos del ciudad se han insertado correctamente.  
                             <button type=\"button\" class=\"close\" data-dismiss=\'alert\' aria-label=\"close\">
                              <span aria-hidden=\"true\">&times;</span>
                             </button>
                              </div>";


                    }


                    ?>



                    <?php

                    if ( empty($ciudades) ) {

                        include_once "componentes/parte_empty.php";


                    } else { ?>

                        <div class="row">
                            <div class="col-md-13">

                                <table class="table table-hover">
                                    <thead>

                                    <th scope="col">ID de la ciudad</th>
                                    <th scope="col">Nombre de la ciuda</th>
                                    <th scope="col">Nombre del pais</th>
                                    </thead>
                                    <tbody>


                                    <?php

                                    foreach ( $ciudades as $ciudad) {

                                        echo "<tr>
                              <th scope=\"row\">{$ciudad['city_id']}</th>
                              <td>{$ciudad['city']}</td>
                              <td>{$ciudad['country']}</td>
                              </tr>";

                                    }
                                    ?>

                                    </tbody>
                                </table>

                            </div>


                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
 </div>

<?php include_once "componentes/parte_foot.php"; ?>

</body>
</html>
