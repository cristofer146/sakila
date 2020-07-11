<?php include_once "partes/parte_head.php"; ?>


<body>

<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy">
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
            <h2> <?php echo $nombrepagina; ?>
        </div>


</body>
</html>