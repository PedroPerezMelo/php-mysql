<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cars</title>
</head>
<body>
    <?php

    include ("carros.php");

    //buyCars::$descuento = 1000;
    buycars::descuento();
    $compra_antonio = new buyCars("berlina");
    $compra_antonio->climatizacion("demasiado");
    $compra_antonio->tapiceria("blanco");
    echo $compra_antonio->getPrecio() . "<br>";

    $compra_Pedro = new buyCars("compacto");
    $compra_Pedro->climatizacion("frio");
    $compra_Pedro->navegadorgps("avanzado");
    $compra_Pedro->descuento();
    echo $compra_Pedro->getPrecio();

    
    ?>
    
</body>
</html>