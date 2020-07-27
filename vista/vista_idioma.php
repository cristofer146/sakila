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
                    <form action="idioma.php" nethod="get">

                        <div class="mb-3">
                            <label for="idioma">Seleccione su idioma</label>
                            <input type="text" name="idioma" id="idioma" class="form-control" placeholder="Escriba su idioma">

                        </div>


                        <div class="mb-3">

                            <button type="submit" name="idioma" class="btn btn-primary">Guardar datos</button>

                        </div>

                    </form>


                </div>


            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">


                    <table class="table">
                        <thead>

                        <th scope="col">ID</th>
                        <th scope="col">Idiomas</th>
                        <th scope="col">Ultima actualización</th>


                        </thead>

                        <tbody>


                        <?php

                        foreach ($idioma as $idiomas) {
                            echo " <tr>

                                <th scope=\"row\">{$idiomas['language_id']}</th>
                                <td>{$idiomas['name']}</td>
                                <td>{$idiomas['last_update']}</td>
                                

                            </tr>";

                        }


                        ?>


                        </tbody>

                    </table>

                </div>


            </div>


</body>
</html>

