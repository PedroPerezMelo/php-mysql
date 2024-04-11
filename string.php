<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
    <style>
        .resaltar{
            color: red;
            font-weight:bold;
        }
        </style>
</head>
<body>
    <?php

    $mensaje1 = "casa";
    $mensaje2 = "CASA";
    if(strcmp($mensaje1, $mensaje2 !== 0)){
        echo "$mensaje1 no es igual a mensaje $mensaje2 en una comparacion que considera mayusculas y minisculas <br>";
    }

    $resultado = strcasecmp($mensaje1, $mensaje2);

    if(!$resultado){

        echo "si coinciden";
    } else {

        echo "no coinciden";
    }

// 1 true 0 false

    ?>
</body>
</html>