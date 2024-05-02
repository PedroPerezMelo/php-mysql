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
  $cod = $_GET["c_art"];
  $sec = $_GET["seccion"];
  $nom = $_GET["n_art"];
  $pre = $_GET["precio"];
  $fec = $_GET["fecha"];
  $imp = $_GET["importado"];
  $por = $_GET["p_orig"];

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
  $consulta = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO = '$cod'";
  
  //obtener los datos de la base de datos
  // $consulta = "SELECT * FROM productos";

  //ejecuta la conexion
  $result = mysqli_query($conexion, $consulta);

  // validamos si todo salio bien
  if($result == false){

    echo "error en la consulta";
  } else{

    //echo "registro eliminado<br>";

    if(mysqli_affected_rows($conexion) == 0){

        echo "no ha registros que eliminar con ese criterio";
    } else if(mysqli_affected_rows($conexion) == 1){

        echo "se han eliminado: " . mysql_affected_rows($conexion) . "registro";
    } else {

        echo "se han eliminado: " . mysqli_affected_rows($conexion) . "registros";
    }
  }


  
  // Cerrar la conexión (opcional, pero buena práctica)
  $conexion->close();
          
?>  
</body>
</html>