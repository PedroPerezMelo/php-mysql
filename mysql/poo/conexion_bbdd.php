<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // credenciales base datos
    $host = "localhost";
    $dbname = "usuarios";
    $username = "root";
    $password = "";

    // consulta 
    $conexion = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
        $conexion->exec("USE usuarios");

        echo "conexion extiosa a bbdd";

    } catch (PDOException $e){
        echo "error de conexion bbdd: " . $e->getMessage();
    }
    ?>
    
</body>
</html>