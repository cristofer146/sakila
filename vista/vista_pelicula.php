<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombrepagina; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
<h1>Bienbenidos a la página principal <?php echo $nombrepagina; ?>
    <h1>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="actor.php">Actor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ciudad.php">ciudad</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pelicula.php">pelicula</a>
            </li>
        </ul>

</body>
</html>

