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

  // donde manda el registro parametrizado a la bbdd
  $consulta = $conexion->prepare("INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
  $consulta->bind_param("sssssss", $cod, $sec, $nom, $pre, $fec, $imp, $por);
  $result = $consulta->execute();
  
  //obtener los datos de la base de datos
  // $consulta = "SELECT * FROM productos";

  // validamos si todo salio bien
  if($result == false){

    echo "error en la consulta";
  } else{

    echo "registro guardado<br>";

    //imprimimos el resultado guardado
    echo"<table><tr><td>$cod</td></tr>";

    echo"<tr><td>$sec</td><tr>";

    echo "<tr><td>$nom</td></tr>";

    echo "<tr><td>$pre</td></tr>";

    echo "<tr><td>$fec</td></tr>";

    echo "<tr><td>$imp</td></tr>";

    echo "<tr><td>$por</td></tr></table>";

  }


  
  // Cerrar la conexión (opcional, pero buena práctica)
  $conexion->close();
          
?>  
</body>
</html>