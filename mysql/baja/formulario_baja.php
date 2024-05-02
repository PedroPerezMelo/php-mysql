<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // *traemos los valores del html
  //$busquedad = $_GET["buscar"];
  $usu = $_GET["usu"];
  $con = $_GET["con"];

  $nueva_fecha = date("Y-m-d", strtotime($fec));

  ini_set('display_errors', 1);
  ini_set('error_reporting', E_ALL);
  
  // Credenciales de la base de datos
  require ("datos_conexion.php");
  
  // Conexión a la base de datos
  $conexion = new mysqli($db_host, $db_usuario, $db_contra, $db_nombre); // viene de datos_conexion
  
  // Verificar si hubo error en la conexión
  if ($conexion->connect_error) {
    die("conexion fallida: " . $conexion->connect_error);  // Usar $conexion->connect_error (propiedad)
  } else {
    echo ("conexion exitosa");
  }

  //validar la base de datos
  mysqli_select_db($conexion, $db_nombre) or die ("no se encuentra la bbdd");
  mysqli_set_charset($conexion, "utf8");

  // donde manda el registro a la bbdd
  $consulta = "DELETE FROM datosusuarios WHERE usuario = '$usu' AND contraseña = '$con'";

  echo "$consulta";
  
  //obtener los datos de la base de datos
  // $consulta = "SELECT * FROM productos";

  //ejecuta la conexion
  //$result = mysqli_query($conexion, $consulta);

  // validamos si todo salio bien
  if(mysqli_query($conexion, $consulta)){

    echo "baja procesada";
  }
  
  // Cerrar la conexión (opcional, pero buena práctica)
  $conexion->close();
          
?>  
</body>
</html>