<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parametros por valor y referencia</title>
</head>
<body>
    <?php
/*el paso por referencia & modifica el valor de la varibale o que esta fuera de fucntion 

function incrementar(&$valor1){
    
        $valor1++;

        return $valor1;
    }

    $numero = 5;

    echo incrementar($numero) . "<br>";

    echo $numero;
*/
    function cambia_mayus(&$param){

        $param = strtolower($param);

        $param = ucwords($param);

        return $param;
    }

    $cadena = "hola COmo estas TU";

    echo cambia_mayus($cadena) . "<br>";

    echo $cadena;
    ?>
</body>
</html>