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
    $consulta = "SELECT * FROM PRODUCTOS WHERE CÓDIGOARTÍCULO LIKE '%$labusquedad%'";

    
    //obtener los datos de la base de datos
    // $consulta = "SELECT * FROM productos";

    //ejecuta la consulta 
    $result = mysqli_query($conexion, $consulta);

    if(!$result){
      die("error la consulta fallo: " . mysqli_error($consulta));
    } else {
      //echo "<table>";
      // los result se guardan en una $fila
      $fila = mysqli_fetch_assoc($result);
      echo "<form action = 'actualizar.php' method='get'> ";

      echo "codigo de articulo <br>";
      echo "<input type = 'text' name = 'c_art' value ='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
      echo "seccion <br>";
      echo "<input type = 'text' name = 'c_art' value ='" . $fila['SECCIÓN'] . "'><br>";
      echo "nombre de articulo <br>";
      echo "<input type = 'text' name = 'seccion' value ='" . $fila['NOMBREARTÍCULO'] . "'><br>";
      echo "precio <br>";
      echo "<input type = 'text' name = 'importado' value ='" . $fila['PRECIO']. "'><br>";
      echo "fecha <br>";
      echo "<input type = 'text' name = 'precio' value ='" . $fila['FECHA'] . "'><br>";
      echo "importado<br>";
      echo "<input type = 'text' name = 'fecha' value ='" . $fila['IMPORTADO'] . "'><br>";
      echo "pais de origen <br>";
      echo "<input type = 'text' name = 'p_orig' value ='" . $fila['PAÍSDEORIGEN'] . "'><br>";

      echo "<input type ='submit' name='enviando' value='actualizar'>";
      echo "</form>";
    }

    // recorrer los resultados mostrados
    
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