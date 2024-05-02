<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $codigo = $_GET["codigo"];
    $pais = $_GET["pais"];

    try{
        $base = new PDO('mysql:host = localhost dbname = usuarios', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Habilitar excepciones para errores PDO

        //selecionamos la base de datos
        $base->exec("USE usuarios");
        echo "conexion 200 ok";
        echo "$pais" . "$codigo";

        $consulta = "SELECT * FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = :codigo AND PAÍSDEORIGEN = :pais" ;
        $stmt = $base->prepare($consulta);
        $stmt->bindParam(":codigo", $codigo);
        $stmt->bindParam(":pais", $pais);
        $stmt->execute();

        while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){

            echo 'id: ' . $fila['FECHA'] . "<br>";
        }

    } catch(PDOException $e){

        echo ("Se produjo un error: " . $e->getMessage());

    }finally{
        $base->closed();
    }
    ?>
    
</body>
</html>