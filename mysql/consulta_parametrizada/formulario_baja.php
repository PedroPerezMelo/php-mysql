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

  // consultas parametrizadas
  $stmt = $conexion->prepare("DELETE FROM datosusuarios WHERE usuario = ? AND contraseña = ?");
  $stmt->bind_param("ss", $usu, $con);
  $stmt->execute();
  // check for errors
  if($stmt->error){
    echo "error deleting user: " . $stmt->error;
  } else{
    echo "user delete succesfully";
  }
  
  // Cerrar la conexión (opcional, pero buena práctica)
  $conexion->close();
          
?>  
</body>
</html>