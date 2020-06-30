<?php include_once "partes/parte_head.php"; ?>

<body>

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
        <div class="col-md-3">
           <?php include_once "partes/parte_menu.php"; ?>
        </div>


        <div class="col-md-9">
          <h2> <?php echo $nombrepagina; ?><di>

                  <div class="row">
                      <div class="col-md-5"
                      <form action="" method="get"
                          <div class="mb-3">
                              <label for="imputNombre" class="form-label">Nombre:  </label>
                              <input type="text" class="form-control" id="imputNombre" placeholder="Escribe tu nombre">
                          </div>

                      <div class="mb-3">
                          <label for="imputCiudad">Ciudad:</label>
                          <input type="text" class="form-control" id="imputCiudad" placeholder="Escribe la ciudad">

                       </div>

                      </form>
                  </div>
              </di>





               <hr>



                  <p>Nombre: <?php echo $nombre; ?> <p>
                  <p>Ciudad: <?php echo $ciudad;  ?> <p>
                  <p>Edad: <?php echo $edad; ?><p>
                  <p>Busqueda: <?php echo  $q; ?><p>
                  <p>Monto: <?php echo $monto; ?><p>
        </div>

    </div>

</div>





</body>
