<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flujo de ejecucion</title>
</head>
<body>

    <?php

    echo "este es el primer mensaje <br>";


    require ("proporciona_datos.php");

    echo "este es el segundo mensaje <br>";

    dameDatos("pedro");


    ?>
// required no ejecuta nada si sale error, include es mas flexible

</body>
</html>