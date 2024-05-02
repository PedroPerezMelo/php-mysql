<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
       // traemos la busquedda de la otra pagina
       $busquedad = $_GET["buscar"];

       ini_set('display_errors', 1);
       ini_set('error_reporting', E_ALL);
       
       // Credenciales de la base de datos
       require ("datos_conexion.php");
       
       // Conexión a la base de datos
       $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre);
       
       // Verificar si hubo error en la conexión
       if ($conexion->connect_error) {
         die("conexion fallida: " . $conexion->connect_error);  // Usar $conexion->connect_error (propiedad)
       } else {
         echo ("conexion exitosa");
       }
   
       //validar la base de datos
       mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la bbdd");
       mysqli_set_charset($conexion, "utf8");
   
       // donde trae  la busquedad de la bbdd
       $stmt = $conexion->prepare("SELECT * FROM PRODUCTOS WHERE PAÍSDEORIGEN = ?");
       $stmt->bind_param("s", $busquedad);
       $stmt->execute();
       $stmt->bind_result($codigoarticulo, $seccion, $nombrearticulo, $precio, $fecha, $importado, $paisdeorigen, $foto);
       while($stmt->fetch()){
           echo "$codigoarticulo - $seccion - $nombrearticulo - $precio - $fecha - $importado - $paisdeorigen - $foto" . "<br>"; 
       }
       // cerramos conexion de busquedad
       $stmt->close();
       
       // Cerrar la conexión (opcional, pero buena práctica)
       $conexion->close();   
    ?>

</body>
</html>