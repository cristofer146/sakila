<?php include_once "partes/parte_head.php"; ?>

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
            <?php include_once "partes/parte_menu.php"; ?>
        </div>


        <div class="col-md-10">
            <h2> <?php echo $nombrepagina; ?></h2>


                <div class="col-md-5">



                        <form action="" method="get">

                            <label class="mt-5" for="personal">personal:<label
                                <select class="form-select" name="personal" id="personal">
                                    <option value="">seleciona un personal</option>







                     <hr>






                    <div class="row">

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



</body>





