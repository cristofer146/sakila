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
                            <label for="direccion">Titulo:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="direccion">Descripción</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="distrito">Año de lanzamiento</label>
                            <input type="text" name="distrito" id="distrito" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="Ciudad">Idioma original:</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Seleccione un idioma:</option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="Ciudad">Idiomas</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Seleccione un idioma:</option>

                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="telefono">Duración de renta:</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Tasa de arrendamiento:</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Tamaño:</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Costo de reemplazo:</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Clasificacion:</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Caracteristicas especiales:</label>
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
</div>


</body>
</html>


