<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conexion = new mysqli("localhost", "root", "", "usuarios");

    if($conexion->connect_error){

        echo "fallo la conexion" . $conexion->connect_error;
    }

    $conexion->set_charset("utf8");

    $sql = "SELECT * FROM PRODUCTOS";

    $resultados = $conexion->query($sql);

    if($conexion->connect_error){

        die($conexion->error);
    }

    echo "<table>";
    while($fila = $resultados->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $fila["CÓDIGOARTÍCULO"] . "</td>";
        echo "<td>" . $fila["SECCIÓN"] . "</td>";
        echo "<td>" . $fila["NOMBREARTÍCULO"] . "</td>";
        echo "<td>" . $fila["PRECIO"] . "</td>";
        echo "<td>" . $fila["FECHA"] . "</td>";
        echo "<td>" . $fila["IMPORTADO"] . "</td>";
        echo "<td>" . $fila["PAÍSDEORIGEN"] . "</td>";
        echo "<td>" . $fila["FOTO"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    $conexion->close();
    ?>
    
</body>
</html>