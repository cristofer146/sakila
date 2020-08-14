<?php include_once "componentes/comp_head.php"; ?>


<body>

<!-- Barra superior -->

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="static/img/descarga.jpg" width="30" height="30" class="d-inline-block align-top"
             alt="">
        Sakila
    </a>
</nav>

<!-- Contenido -->

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2">
            <?php include_once "componentes/comp_menu.php"; ?>

        </div>

        <div class="col-md-10">
            <h3><?php echo $nombrePagina; ?></h3>


            <div class="row">
                <div class="col-md-5">
                    <form action="" method="post">


                        <div class="mb-3">
                            <label for="nombreIdiomas">Seleccione su idioma</label>
                            <input type="text" name="nombreIdiomas" id="nombreIdiomas" class="form-control" placeholder="Escriba su idioma">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                    <?php include_once "componentes/parte_navebar.php"; ?>



                </div>


            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>

                        <th scope="col">ID</th>
                        <th scope="col">Idiomas</th>
                        <th scope="col">Ultima fecha de actualizacion</th>
                        <th scope="col">Acciones</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($idioma as $idiomas) {
                            echo " <tr>

                                <th scope=\"row\">{$idiomas['language_id']}</th>
                                <td>{$idiomas['name']}</td>
                                <td>{$idiomas['last_update']}</td>
                                <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$idiomas['language_id']}'> <i class='fas fa-trash'></i></button>
                                            <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$idiomas['language_id']}'><i class='fas fa-pen'></i></button>
                                          

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

