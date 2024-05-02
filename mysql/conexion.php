<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Habilitar reporte de errores (útil para debuggear)
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);
    
    // Credenciales de la base de datos
    require ("datos_conexion.php");
    
    // Conexión a la base de datos
    $conexion = new mysqli($db_host, $db_usuario, $db_contra);
    
    // Verificar si hubo error en la conexión
    if ($conexion->connect_error) {
      die("conexion fallida: " . $conexion->connect_error);  // Usar $conexion->connect_error (propiedad)
    } else {
      echo ("conexion exitosa" . "<br>");
    }

    //validar la base de datos
    mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la bbdd");

    //obtener los datos de la base de datos en la tabla
    $consulta = "SELECT * FROM datospersonales";

    //ejecuta la consulta 
    $result = mysqli_query($conexion, $consulta);

    if(!$result){
       die("error la consulta fallo: " . mysqli_error($consulta));
    }

    // recorrer los resultados mostrados
    while($fila = mysqli_fetch_row($result)){
      echo " Id " . $fila[0] . " nombre: " . $fila[1] . " Apellido: " . $fila[2] . " edad: " . $fila[3] . "<br>";
  }
    
    
    // Cerrar la conexión (opcional, pero buena práctica)
    $conexion->close();
    ?>
    
</body>
</html>