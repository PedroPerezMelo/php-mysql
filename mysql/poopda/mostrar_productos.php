<?php
    require "devuelve_productos.php";

    $producto = new devuelveProductos();

    $array_productos = $producto->getProductos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    foreach ($array_productos as $producto){

        echo "productos: " . $producto["FECHA"] . "<br>";
    }

    ?>
    
</body>
</html>