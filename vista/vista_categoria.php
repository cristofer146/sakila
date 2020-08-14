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


                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="nombreCategoria">Nombre:</label>
                            <input type="text" name="nombreCategoria" id="nombreActor" class="form-control"
                                   placeholder="Digite el nombre">
                        </div>

                        <div class="mb-4">
                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>
                        </div>

                        <?php include_once "componentes/parte_navebar.php"; ?>
                        <div class="row">
                            <div class="col-md-13">

                                <table class="table table-hover">
                                    <thead>

                                    <th scope="col">ID de la categoria</th>
                                    <th scope="col">Nombre del catagoria</th>
                                    <th scope="col">Acciones</th>
                                    </thead>
                                    <tbody>


                                    <?php

                                    foreach ($categorias as $categoria) {

                                        echo "<tr>
                              <th scope=\"row\">{$categoria['category_id']}</th>
                              <td>{$categoria['name']}</td>
                              
                              <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$categoria['category_id']}'> <i class='fas fa-trash'></i></button>
                                            <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$categoria['category_id']}'><i class='fas fa-pen'></i></button>
                              
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
    </div>
</div>


</body>
</html>


