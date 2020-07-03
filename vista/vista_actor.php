<?php include_once "partes/parte_head.php"; ?>

<body xmlns="http://www.w3.org/1999/html">

<!-- barra superior -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        sakila
    </a>
</nav>

<!-- contenido -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <?php include_once "partes/parte_menu.php"; ?>
        </div>


        <div class="col-md-10">
            <h2> <?php echo $nombrepagina; ?> </h2>
                <hr>

                <div class="row">
                    <div class="col-md-5">


                        <form action="actor.php" method="get">
                            <div class="mb-4">
                                <label for="nombreActor">Primer nombre del actor</label>
                                <input type="text"  name="nombreActor" id="nombreActor" class="form-control">
                            </div>


                            <div class="mb-4">
                                <label for="apellidoActor">Apellido del Actor</label>
                                <input type="text" id="apellidoActor" name="apellidoActor" class="form-control">

                            </div>

                            <div class="mb-4">
                                <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>
                            </div>

                        </form>

                        <hr>

                        <?php

                        echo $nombreActor;
                        echo $apellidoActor;


                        ?>

                    </div>
                </div>
        </div>

    </div>
</div>
