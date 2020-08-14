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
                            <label for="idioma">Escriba su pais:</label>
                            <input type="text" name="nombrepais" id="nombrepais" class="form-control" placeholder="Introducir su pais">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>

                    <?php include_once "componentes/parte_navebar.php"; ?>




                    <?php

                    if ( empty($actores) ) {

                        //include_once "componentes/parte_empty.php";


                   // } else { ?>

                                <div class="row">
                                    <div class="col-md-13">
                                        <form action="" method="post">
                                        <table class="table table-hover">
                                            <thead>

                                            <th scope="col">ID de pais</th>

                                            <th scope="col">Nombre del pais</th>

                                            <th scope="col">Ultima Actualizacion</th>

                                            <th scope="col">Acciones</th>
                                            </thead>
                                            <tbody>


                                            <?php

                                            foreach ($paises as $pais) {

                                                echo "<tr>
                                          <th scope=\"row\">{$pais['country_id']}</th>
                                          
                                            <td>{$pais['country']}</td>
                                            <td>{$pais['last_update']}</td>
                                            <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$pais['country_id']}'> <i class='fas fa-trash'></i></button>
                                            <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$pais['country_id']}'><i class='fas fa-pen'></i></button>
                                          </tr>";

                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                        </form>
                                    </div>


                                </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div
</div>


<?php include_once "componentes/parte_foot.php" ?>

</body>
</html>
