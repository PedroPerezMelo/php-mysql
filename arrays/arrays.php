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
    echo $nombreUsuario["edad"] . "<br>";
    
    // destruracion de datos
    $datos = [1, 2, 3];

    [$a, $b, $c] = $datos;

    echo $a .$b . $c . "<br>";

    // arrays

    function getCoordenadas(){

        return [12.34, 56.78];
    }

    [$latitud, $longitud] = getCoordenadas();

    echo $latitud . $longitud . "<br>";

    // array asociativo

    $persona = [
        "nombre" => "pedro",
        "edad" => 24,
        "ciudad" => "villavicencio"
    ];

    ["nombre" => $elNombre, "edad" => $laEdad, "ciudad" => $laCiudad] = $persona;

    echo "Nombre: $elNombre edad: $laEdad ciudad: $laCiudad";
    ?>
</body>
</html>