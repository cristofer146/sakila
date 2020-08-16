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
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dijite su dirección">
                        </div>

                        <div class="mb-3">
                            <label for="direccion">Dirección 2</label>
                            <input type="text" name="direccion2" id="direccion2" class="form-control" placeholder="Tienes otra dirección">
                        </div>

                        <div class="mb-3">
                            <label for="distrito">Distrito</label>
                            <input type="text" name="distrito" id="distrito" class="form-control" placeholder="Distrito de tu ciudad">
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
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control" placeholder="Codigo postal de tu pais">
                        </div>

                        <div class="mb-3">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono" id="telefono" class="form-control"
                                   placeholder="Telefono de tu pais">
                        </div>


                        <div class="mb-3">
                            <button type="submit" name="guardarDireccion" class="btn btn-primary">Guardar datos</button>
                        </div>

                    </form>


                    <?php
                    if ( empty($Direcciones) ) {

                        include_once "componentes/parte_empty.php";


                    } else { ?>


                        <div class="row">
                            <div class="col-md-13">
                                <form action="" method="post">
                                    <table class="table table-hover">
                                        <thead>

                                        <th scope="col">ID de dirección</th>

                                        <th scope="col">Nombre de dirección</th>

                                        <th scope="col">Derección numero 2</th>

                                        <th scope="col">Distrito</th>

                                        <th scope="col">Cuidad</th>

                                        <th scope="col">postal_code</th>

                                        <th scope="col">phone</th>

                                        <th scope="col">Acciones</th>


                                        </thead>
                                        <tbody>


                                        <?php

                                        foreach ( $direcciones as $Direccion) {

                                            echo "<tr>
                                  <th scope=\"row\">{$Direccion['address_id']}</th>
                              
                                    <td>{$Direccion['address']}</td>
                                    <td>{$Direccion['address2']}</td>
                                    <td>{$Direccion['district']}</td>
                                    <td>{$Direccion['city_id']}</td>
                                    <td>{$Direccion['postal_code']}</td>
                                    <td>{$Direccion['phone']}</td>
                                     <td><button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminarActor' value='{$Direccion['address_id']}'> <i class='fas fa-trash'></i></button>
                                     <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editarActor' value='{$Direccion['address_id']}'><i class='fas fa-pen'></i></button>
                                     </td>
                                     
                                    
                                  </tr>";

                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </form>
                            </div>


                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>


</body>
</html>

