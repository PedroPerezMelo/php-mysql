<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $var1 = True;

    $var2 = False;

    $resultado = $var1 && $var2; // estamos almacenando a false

    $resultadoand = $var1 and $var2; // tiene prioriodad $var1

    if($resultado === True){

        echo "es correcto";

    } else{

        echo "es incorrecto";
    }

    if($resultadoand === True){

        echo "es correcto";
    } else{

        echo "es incorrecto";
    }
    
    ?>
</body>
</html>