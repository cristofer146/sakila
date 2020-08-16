<?php include_once "componentes/comp_head.php"; ?>

<body xmlns="http://www.w3.org/1999/html">

<!-- barra superior -->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="static/img/descarga.jpg" width="30" height="30" class="d-inline-block align-top"
             alt="" loading="lazy">
        sakila
    </a>
</nav>


<!-- contenido -->
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2">
            <?php include_once "componentes/comp_menu.php" ?>
        </div>


        <div class="col-md-10">
            <h2> <?php echo $nombrepagina; ?> </h2>


            <hr>


            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label for="nombreTienda">Gerente personal</label>
                            <select name="nombreTienda" id="nombreTienda" class="form-select">
                                <option>Seleccione un gerente:</option>


                                <?php

                                foreach ( $gerentes as $gerente ) {

                                    echo "<option value=\"{$gerente["staff_id"]}\">{$gerente["last_name"]}</option>";
                                }


                                ?>

                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nombreDireccion">Direccion:</label>
                            <select name="nombreDireccion" id="nombreDireccion" class="form-select">
                                <option>Listado de direcciones:</option>

                                <?php

                                foreach ($direcciones as $Direcciones) {

                                    echo "<option value=\"{$Direcciones["address_id"]}\">{$Direcciones["address"]}</option>";
                                }


                                ?>


                            </select>
                        </div>


                        <div class="mb-4">

                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar los datos
                            </button>
                        </div>

                    </form>


                </div>
            </div>


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



</body>





