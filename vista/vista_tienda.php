<?php include_once "componentes/comp_head.php"; ?>

<body xmlns="http://www.w3.org/1999/html">

<!-- barra superior -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
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
                    <form action="" method="get">

                      <div class="mb-3">
                        <label for="Ciudad">Gerente personal</label>
                        <select name="ciudad" id="ciudad" class="form-select">
                            <option value="">Seleccione un gerente:</option>

                                 </select>
                           </div>

                        <div class="mb-4">
                            <label for="Ciudad">Direccion:</label>
                            <select name="ciudad" id="ciudad" class="form-select">
                                <option value="">Listado de direcciones:</option>

                            </select>
                        </div>


                        <div class="mb-4">

                            <button type="submit" name="guardar_actor" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>






                </div>
            </div>

            <hr>
            <div class="row"
              <div class="col-md-12">

                    <table class="table">

                        <thead>
                        <th>ID de la tienda</th>
                        <th>Gerente de la tienda</th>
                        <th>Direccion de la tienda</th>

                        </thead>


                        <tbody>

                           <?php

                           foreach ($informacionTiendas as $infotienda){



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





