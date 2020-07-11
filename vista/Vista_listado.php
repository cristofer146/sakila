<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<label for="">Listado de paises</label>
<select name="" id="">

    <option value="1">Rep. Dom</option>
    <option value="2">Haiti </option>>


    <?php
    foreach ($paises as $pais){
        echo "<option value= \"{$pais['country_id']}\">{$pais['country']}</option>";

    }
    ?>




</select>


<p>

    <label for="">Ciudades</label>
    <select name="" id="">
        <option value=""></option>



        <?php
        foreach ($ciudades as $ciudad) {
            echo "<option value= \"{$pais['country_id']}\">{$pais['country']}</option>";

        }

        ?>

    </select>
</p>


</body>
</html>

