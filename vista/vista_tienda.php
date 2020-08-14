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
                            <label for="nombregerente">Gerente personal</label>
                            <select name="nombregetente" id="nombregerente" class="form-select">
                                <option value="">Seleccione un gerente:</option>


                                <?php

                                foreach ($gerente as $gerentes) {

                                    echo "<option value=\"{$gerentes["firt_name"]}\">{$gerentes["last_name"]}</option>";
                                }


                                ?>

                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="nombreDireccion">Direccion:</label>
                            <select name="nombreDireccion" id="nombreDireccion" class="form-select">
                                <option value="">Listado de direcciones:</option>

                                <?php

                                foreach ($direcciones as $Direcciones) {

                                    echo "<option value=\"{$Direcciones["address_id"]}\">{$Direcciones["address"]}</option>";
                                }


                                ?>


                            </select>
                        </div>


                        <div class="mb-4">

                            <button type="submit" name="guardar_datos" class="btn btn-primary">Guardar</button>
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

                                </thead>


                                <tbody>

                                <?php

                                foreach ($informacionTiendas as $infotienda) {


                                    echo "
                                           <tr>
            
                                        <td>{$infotienda['store_id']} </td>
            
                                        <td> {$infotienda['first_name']}</td>
            
                                        <td>{$infotienda['address']} </td>
            
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





