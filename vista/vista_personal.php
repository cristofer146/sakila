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
            <h2> <?php echo $nombrepagina; ?></h2>


            <hr>

            <div class="row">
                <div class="col-md-5">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="direccion">Nombre:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control"
                                   placeholder="Digite el nombre">
                        </div>

                        <div class="mb-3">
                            <label for="direccion">Apellido</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control"
                                   placeholder="Digite el apellido">
                        </div>


                        <div class="mb-3">
                            <label for="Ciudad">Dirección:</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Seleccione una dirección</option>


                            </select>


                        </div>

                        <div class="mb-3">
                            <label for="codigoPostal">Email:</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control"
                                   placeholder="Correo electronico">
                        </div>

                        <div class="mb-3">
                            <label for="Ciudad">Dirección:</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Seleccione una dirección</option>


                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Nombre de usuario</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control"
                                   placeholder="usuario">
                        </div>

                        <div class="mb-3">
                            <label for="ubicacion">Contraseña</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control"
                                   placeholder="Contraseña">
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

