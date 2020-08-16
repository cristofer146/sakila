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
                <div class="col-md-6">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="nombrePersonal">Nombre:</label>
                            <input type="text" name="nombrePersonal" id="nombrePersonal"
                                   class="form-control <?php echo isset($validaciones['errorPersonal']) ? 'is-invalid' : ''; ?>"
                                   placeholder="Digite el nombre" value="<?= $nombrePersonal ?>">
                            <div class="invalid-feedback">
                                <?php
                                if ( isset($validaciones['errorPersonal']) ) {
                                    echo $validaciones['errorPersonal'];

                                }
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreApellido">Apellido</label>
                            <input type="text" name="nombreApellido" id="nombreApellido"
                                   class="form-control <?php echo isset($validaciones['errorNombre']) ? 'is-invalid' : ''; ?>"
                                   placeholder="Digite el apellido" value="<?= $nombreApellido ?>">
                            <div class="invalid-feedback">
                                <?php
                                if ( isset($validaciones['errorApellido']) ) {
                                    echo $validaciones['errorApellido'];

                                }
                                ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombreDireccion">Dirección:</label>
                            <select name="nombreDireccion" id="nombreDireccion" class="form-select">
                                <option value="">Seleccione una dirección</option>


                                <?php

                                foreach ( $direcciones as $Direcciones ) {

                                    echo "<option value=\"{$Direcciones["address_id"]}\">{$Direcciones["address"]}</option>";
                                }


                                ?>


                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="nombreImagenes">Imagen:</label>
                            <input type="hidden" name="nombreImagenes" value="nombreImagenes"/>

                            <input type="file"/>
                        </div>

                        <div class="mb-3">
                            <label for="nombreCorreo">Email:</label>
                            <input type="text" name="nombreCorreo" id="nombreCorreo"
                                   class="form-control <?php echo isset($validaciones['errorCorreo']) ? 'is-invalid' : ''; ?>"
                                   placeholder="Correo electronico" value="<?= $nombreCorreo ?>">
                            <div class="invalid-feedback">
                                <?php
                                if ( isset($validaciones['errorCorreo']) ) {
                                    echo $validaciones['errorCorreo'];

                                }
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreTienda">Tienda:</label>
                            <select name="nombreTienda" id="nombreTienda" class="form-select">
                                <option value="">Seleccione una Tienda</option>


                                <?php

                                foreach ( $gerentes as $gerente ) {

                                    echo "<option value=\"{$gerente["staff_id"]}\">{$gerente["last_name"]}</option>";
                                }


                                ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nombreUsuario">Nombre de usuario</label>
                            <input type="text" name="nombreUsuario" id="nombreUsuario"
                                   class="form-control <?php echo isset($validaciones['errorUsuario']) ? 'is-invalid' : ''; ?>"
                                   placeholder="usuario" value="<?= $nombreUsuario ?>">
                            <div class="invalid-feedback">
                                <?php
                                if ( isset($validaciones['errorUsuario']) ) {
                                    echo $validaciones['errorUsuario'];

                                }
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreContrana">Contraseña</label>
                            <input type="text" name="nombreContrana" id="nombreContrana"
                                   class="form-control <?php echo isset($validaciones['errorContrana']) ? 'is-invalid' : ''; ?>"
                                   placeholder="Contraseña" value="<?= $nombreContrana ?>">
                            <div class="invalid-feedback">
                                <?php
                                if ( isset($validaciones['errorContrana']) ) {
                                    echo $validaciones['errorContrana'];

                                }
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>
                    <?php include_once "componentes/parte_navebar.php"; ?>


                    <hr>


                    <div class="col-md-12">

                        <table class="table">

                            <thead>
                            <th>ID de la tienda</th>
                            <th>Gerente de la tienda</th>
                            <th>Direccion de la tienda</th>
                            <th>Acciones</th>


                            </thead>


                            <tbody>

                            <?php

                            foreach ( $tiendas as $tienda ) {


                                echo "
                                           <tr>
            
                                        <td>{$tienda['store_id']} </td>
            
                                        <td> {$tienda['first_name']}</td>
            
                                        <td>{$tienda['address']} </td>
                                        <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$tienda['store_id']}'> <i class='fas fa-trash'></i></button>
                                        <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$tienda['store_id']}'><i class='fas fa-pen'></i></button>
                                         </td>
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


</body>
</html>

