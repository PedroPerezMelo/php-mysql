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

        header("location: login.php");
    }
    ?>

    <h1>bienvenido</h1>

    <?php

    echo "usuario" . $_SESSION["usuario"] . "<br>";

    ?>
    <h1>cierra session</h1> <br>

    <a href="cierra.php">cerrar session</a>

    <p>pagina de productos </P>

    <a href="usuarios.php">volver</a>
    
</body>
</html>