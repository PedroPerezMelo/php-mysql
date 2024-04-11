<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constantes</title>
</head>
<body>
    <?php
    // las constantes no se puden modificar
    define("AUTOR", "Pedro", true); // se agrega el true permite poner en minisculas y mayusculas

    echo AUTOR;

    echo "el auto es: ". AUTOR;

    echo "la linea de esta instrucicion es: " . __line__ . "<br>";

    echo "estamos trabajando en el nombre del ficheero es: " . __file__;  

    ?>
    
</body>
</html>