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
                        <div class="mb-4">
                            <label for="nombreActor">Primer nombre del actor</label>
                            <input type="text" name="nombreActor" id="nombreActor" class="form-control"
                                   placeholder="Digite el nombre" value="<?= $nombreActor ?>">
                        </div>


                        <div class="mb-4">
                            <label for="apellidoActor">Apellido del actor</label>
                            <input type="text" id="apellidoActor" name="apellidoActor" class="form-control"
                                   placeholder="Digite el apellido" value="<?= $apellidoActor?>">

                        </div>

                        <div class="mb-4">
                            <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>

                    <?php  include_once "componentes/parte_navebar.php";?>


                </div>
            </div>


            <hr>

            <div class="row">
                <div class="col-md-12">

                    <table class="table">
                        <thead>

                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        </thead>
                        <tbody>


                        <?php

                        foreach ($actores as $actor) {

                            echo "<tr>
                              <th scope=\"row\">{$actor['actor_id']}</th>
                              <td>{$actor['first_name']}</td>
                              <td>{$actor['last_name']}</td>
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

<?php  include_once "componentes/parte_foot.php";?>

