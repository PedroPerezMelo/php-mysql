<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  //$busquedad = $_GET["buscar"];

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
  $consulta = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO) VALUES ('AR44', 'DEPORTES', 'RAQUETA DE PEROL')";
  
  //obtener los datos de la base de datos
  // $consulta = "SELECT * FROM productos";

  //ejecuta la conexion
  $result = mysqli_query($conexion, $consulta);


  
  // Cerrar la conexión (opcional, pero buena práctica)
  $conexion->close();
          
?>  
</body>
</html>