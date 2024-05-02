<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zona usuarios</title>
</head>
<body>
    <?php

    session_start();

    if (isset($_COOKIE["datos"])){

        echo "the cookie is set" . "<br>";
    } else {

        echo "the cookie is not set" . "<br>";

        header("location:login.php");
    }

    if (isset($_SESSION["usuario"])){

        echo "inicio seccion";
    } else {

        echo "error al iniciar sesion";

        header("location:login.php");
    }




    ?>
    <h1> bienvenido usuario </h1>

    <?php

    echo "hola: " . $_SESSION["usuario"] . "<br>";

    ?>
    <p> esta zona es solo para usuarios registrados </p>

    <h1>cierra session</h1> <br>

    <a href="cierra.php">cerrar session</a>

    <h1>eliminar cookies</h1>

    <a href="destruye_cookie.php">elimianar cookies</a>


    


    
</body>
</html>