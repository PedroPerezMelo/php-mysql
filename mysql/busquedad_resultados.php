<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    // hace que se ejecuta cuando se llama
    function ejecuta_consulta($labusquedad){

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
    $consulta = "SELECT * FROM PRODUCTOS WHERE NOMBREARTÍCULO LIKE '%$labusquedad%'";
    
    //obtener los datos de la base de datos
    // $consulta = "SELECT * FROM productos";

    //ejecuta la consulta 
    $result = mysqli_query($conexion, $consulta);

    if(!$result){
      die("error la consulta fallo: " . mysqli_error($consulta));
    } else {
      echo "<table>";
      echo "<tr>";
      // obtiene la cabezza de la prima fila
      $fila = mysqli_fetch_assoc($result);
      if ($fila){
        foreach ($fila as $heading) {
           echo "<th>" . $heading . "</th>";
        }
      }
    }

    // recorrer los resultados mostrados
    echo "</tr>";

    while ($fila = mysqli_fetch_assoc($result)) {
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
    
    // Cerrar la conexión (opcional, pero buena práctica)
    $conexion->close();

}
    
    ?>
</head>
<body>

    <?php
    
    @$mibusquedad = $_GET["buscar"];

    //llama a ella misma
    $mipag = $_SERVER["PHP_SELF"];

    if($mibusquedad != null){

        ejecuta_consulta($mibusquedad);
    } else {

        echo("<form action='" . $mipag . "' method='get'>

        <label>Buscar<input type='text' name='buscar'></label>

        <input type='submit' name='enviando' value='buscar'>

        </form>");


    }
    ?>

</body>
</html>