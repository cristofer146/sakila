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


            <hr>




            <div class="row">
                <div class="col-md-5">


                    <form action="ca.php" method="get">
                        <div class="mb-4">
                            <label for="nombreActor">Nombre:</label>
                            <input type="text"  name="nombreActor" id="nombreActor" class="form-control" placeholder="Digite el nombre">
                        </div>

                        <div class="mb-4">
                            <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar datos</button>
                        </div>




                    <div class="row">
                        <div class="col-md-13">

                            <table class="table table-hover">
                                <thead>

                                <th scope="col">ID de la categoria</th>
                                <th scope="col">Nombre del catagoria </th>
                                </thead>
                                <tbody>


                                <?php

                                foreach ($categorias as $categoria) {

                                    echo "<tr>
                              <th scope=\"row\">{$categoria['category_id']}</th>
                              <td>{$categoria['name']}</td>
                        </tr>";

                                }
                                ?>

                                </tbody>
                            </table>

                        </div>


                    </div>
                </div>


</body>
</html>


