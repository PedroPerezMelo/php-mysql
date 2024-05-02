<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // traemos desde main pag
    $c_art = $_POST["c_articulo"];
    $sec = $_POST["seccion"];
    $n_art = $_POST["n_articulo"];
    $pre = $_POST["precio"];
    $fec = $_POST["fecha"];
    $imp = $_POST["importado"];
    $p_ori = $_POST["p_origen"];

    //usamos la conexion
    include("conexion_bbdd.php");
    
    try{
        $sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (:c_art, :sec, :n_art, :pre, :fec, :imp, :p_ori)";

        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(":c_art", $c_art);
        $stmt->bindParam(":sec", $sec);
        $stmt->bindParam(":n_art", $n_art);
        $stmt->bindParam(":pre", $pre);
        $stmt->bindParam(":fec", $fec);
        $stmt->bindParam(":imp", $imp);
        $stmt->bindParam(":p_ori", $p_ori);

        $stmt->execute();

        /*if($stmt->errorCode() == 0){
            $errorinfo = $stmt->errorInfo();
            echo "Error: SQLSTATE: " . $errorInfo[0] . " Código de error: " . $errorInfo[1] . " Mensaje: " . $errorInfo[2];
        }else {
            echo "Registro insertado exitosamente";
        } */

        echo "Registro enviado exitosamemte";
    }catch (PDOException $e){

        echo "Error de envio a bbdd" . $e->getMessage();
    } finally {

        $conexion->close();
    }

    $conexion = null;
    ?>
    
</body>
</html>