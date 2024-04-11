<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //recomendado
    $semanasDays = ["lunes", "martes", "miercoles"];

    //menos comun
    $colores = array("rojo", "negro", "azul");

    //asociativos para almacenar datos personales
    $nombreUsuario = [
        "nombre" => "pedro",
        "apellido" => "perez",
        "edad" => 24,
        "ciudad" => "villavicencio"
    ];

    echo $semanasDays[1] . "<br>";
    echo $colores[0] . "<br>";
    echo $nombreUsuario["edad"];

    ?>
</body>
</html>