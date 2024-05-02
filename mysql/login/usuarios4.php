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

        header("location:login.php");
    }
    ?>

    <h1>binevenido</h1>

    <?php

    echo "usuario:" . $_SESSION["usuario"] . "<br>";
    ?>
    <h1>cierra session</h1> <br>

    <a href="cierra.php">cerrar session</a>

    <p> pagina 4</p>

    <a href="usuarios.php">volver</a>
    
</body>
</html>