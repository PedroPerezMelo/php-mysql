<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $c_art_el = $_GET["eliminar"];

    include("conexion_bbdd.php");

    try {
        $sql = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = :c_art";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":c_art", $c_art_el);
        $stmt->execute();
        echo "Registro elimando exitosamente";
    } catch (PDOException $e) {
        
        echo "error al eliminar: " . $e->getMessage();
    } finally {

        $conexion->close();
    }

    $conexion = null;
    ?>
    
</body>
</html>