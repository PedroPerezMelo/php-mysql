<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();

        if(!isset($_SESSION["usuario"])){

            header ("location:login.php");
        }
    ?>
    <h1> bienvenido usuario </h1>

    <?php

    echo "hola: " . $_SESSION["usuario"] . "<br>";
    ?>
    <p> esta zona es solo para usuarios registrados </p>

    <h1>cierra session</h1> <br>

    <a href="cierra.php">cerrar session</a>

    <h1>zona de usuarios registrados</h1>
    <a href="usuarios2.php">pagina 2</a>
    <a href="usuarios3.php">pagina 3</a>
    <a href="usuarios4.php">pagina 4</a>
    
</body>
</html>