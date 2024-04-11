<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles recorriendo arrays</title>
</head>
<body>
    <?php
    // arrays asociativo
    $datosUsuario = [
        "nombre" => "pedro",
        "edad" => 24,
        "ciudad" => "villavicencio"
    ];

    $datosUsuario ["apellido"] = "perez"; // agg in a array asociativo

    // comprobando si es un array

    if(is_array($datosUsuario)){
        echo "es un array True" . "<br>";
    } else {
        echo "NO es array false";
    }

    // foreach para recorrer arrays asociatvios
    foreach ($datosUsuario as $key => $value) {
        
        echo "A $key le corresponde $value" . "<br>";
    }

    // array indexado
    $semana = ["lunes", "martes", "miercoles", "jueves"];

    //bucles for normal
    for ($i=0; $i < count($semana) ; $i++) { 
        
        echo $semana[$i] . "<br>";
    }
    
    $semana[] = "viernes"; // aregrando un elemento al array

    for ($i=0; $i < count($semana) ; $i++) { 
        
        echo $semana[$i] . "<br>";
    }

    $semana2= ["lunes", "martes", "miercoles", "jueves"];

    sort($semana2); // ordena de manera a-z

    for ($i=0; $i < count($semana2) ; $i++) { 
        
        echo $semana2[$i] . "<br>";
    }
    ?>
    
</body>
</html>