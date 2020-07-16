<?php include_once "componentes/comp_head.php"; ?>

<body xmlns="http://www.w3.org/1999/html">

<!-- barra superior -->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="../static/img/descarga.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
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
                    <form action="" method="get">

                        <div class="mb-3">
                            <label for="Ciudad">Tienda:</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Seleccione el número de tienda:</option>

                                <?php

                                foreach ($informacionTiendas as $InformacionTiendas){

                                    echo "<option value=\"{$InformacionTiendas["store"]}\">{$InformacionTiendas["store_id"]}</option>";


                                }

                                ?>

                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="direccion">Nombre:</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="distrito">Apellido:</label>
                            <input type="text" name="distrito" id="distrito" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="direccion">Email:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">


                        </div>

                        <div class="mb-3">
                            <label for="codigoPostal">Dirección</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label for="Ciudad">Ciudad</label>
                            <select name="ciudad" id="ciudad" class="form-select" pl>
                                <option value="">Seleccione una direccion:</option>


                                <?php

                                foreach ($direcciones as $Direcciones) {

                                    echo "<option value=\"{$Direcciones["address_id"]}\">{$Direcciones["address"]}</option>";
                                }


                                ?>








                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>

