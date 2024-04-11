<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambitos</title>
</head>
<body>
    <?php

    $nombre = "juan";

    function dameNombre(){

        global $nombre;
        
        $nombre = "El nombre es " . $nombre;
    }

    dameNombre();
    
    echo $nombre;

    ?>
    
</body>
</html>