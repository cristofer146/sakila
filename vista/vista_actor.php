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
            <h2> <?php echo $nombrepagina; ?> </h2>


            <hr>


            <div class="row">
                <div class="col-md-5">


                    <form action="" method="post">

                        <input type="hidden" name="idActor" value="<?= $idActor ?>">

                        <div class="mb-4">
                            <label for="nombreActor">Primer nombre del actor</label>
                            <input type="text" name="nombreActor" id="nombreActor" class="form-control   <?php echo isset($validaciones['errorNombre']) ? 'is-invalid' : ''; ?>"
                                   placeholder="Digite el nombre" value="<?= $nombreActor ?>"><div class="invalid-feedback">
                                    <?php
                                    if (isset($validaciones['errorNombre'])) {
                                        echo $validaciones['errorNombre'];

                                    }
                                    ?>

                                </div>
                        </div>


                        <div class="mb-4">
                            <label for="apellidoActor">Apellido del actor</label>
                            <input type="text" id="apellidoActor" name="apellidoActor" class="form-control <?php if (isset($validaciones['errorApellido'])) {
                                echo 'is-invalid';
                                  } ?>"

                                   placeholder="Digite el apellido" value="<?= $apellidoActor?>"><div class="invalid-feedback">
                                <?php
                                if (isset($validaciones['errorApellido'])) {
                                    echo $validaciones['errorApellido'];

                                }
                                ?>

                            </div>

                        </div>

                        <div class="mb-4">
                            <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>

                    <?php include_once "componentes/parte_navebar.php"; ?>


                </div>
            </div>


            <hr>

            <?php

            if ( empty($actores) ) {

                include_once "componentes/parte_empty.php";


            } else { ?>



                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <table class="table"
                            <thead>

                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Acciones</th>
                            </thead>

                            <tbody>


                            <?php

                            foreach ( $actores as $actor ) {

                                echo "<tr>
                                                  <th scope=\"row\">{$actor['actor_id']}</th>
                                                  <td>{$actor['first_name']}</td>
                                                  <td>{$actor['last_name']}</td>
                                                  <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$actor['actor_id']}'> <i class='fas fa-trash'></i></button>
                                                  <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$actor['actor_id']}'><i class='fas fa-pen'></i></button>
                                                  </td>
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

<?php include_once "componentes/parte_foot.php"; ?>

