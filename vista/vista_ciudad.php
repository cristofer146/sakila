
<?php include_once "partes/parte_head.php"; ?>

<body>
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="static/img/descarga.jpg" width="30" height="30" alt="" loading="lazy">
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

            <div class="row">
                <div class="col-md-5">



                <div class="row">
                    <div class="col-md-13">

                        <table class="table table-hover">
                            <thead>

                            <th scope="col">ID de la ciudad</th>
                            <th scope="col">Nombre de la ciuda</th>
                            <th scope="col">Nombre del pais</th>
                            </thead>
                            <tbody>


                            <?php

                            foreach ($ciudades as $ciudad) {

                                echo "<tr>
                              <th scope=\"row\">{$ciudad['city_id']}</th>
                              <td>{$ciudad['city']}</td>
                              <td>{$ciudad['country']}</td>
                        </tr>";

                            }
                            ?>

                            </tbody>
                        </table>

                    </div>


                </div>
        </div>


</body>
</html>
