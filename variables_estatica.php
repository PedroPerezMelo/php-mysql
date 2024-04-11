<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatica</title>
</head>
<body>
    <?php

    function incrementaVariable(){

        static $contador = 0; // mantiene el valor cuantas veces llamamos la funcion

        $contador++;

        echo $contador . "<br>";
    }

    incrementaVariable();
    incrementaVariable();
    incrementaVariable();
    
    ?>
    
</body>
</html>