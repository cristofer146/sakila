
<?php include_once "partes/parte_head.php"; ?>

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
            <?php include_once "partes/parte_menu.php"; ?>
        </div>


        <div class="col-md-10">
            <h2> <?php echo $nombrepagina; ?></h2>


            <hr>

            <div class="row">
                <div class="col-md-5">
                    <form action="" method="get">

                        <div class="mb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="direccion">Dirección 2</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="distrito">Distrito</label>
                            <input type="text" name="distrito" id="distrito" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="Ciudad">Ciudad</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                    <option value="">Elige una ciudad</option>

                                <?php

                                foreach ($ciudades as $ciudad) {

                                    echo "<option value=\"{$ciudad["city_id"]}\">{$ciudad["city"]}</option>";
                                }


                                ?>


                            </select>


                        </div>

                        <div class="mb-3">
                            <label for="codigoPostal">Codigo Postal</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Ubicación</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>
                            </div>

                    </form>

                </div>

            </div>
        </div>
</div>


</body>
</html>

