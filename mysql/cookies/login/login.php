<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (isset($_COOKIE["datos"])){

        echo "the cookie is set" . "<br>";
    } else {

        echo "the cookie is not set " . "<br>";
    }
    if (isset($_SESSION["usuario"])){

        echo "inicio seccion";
    } else {

        echo "sesion no iniciada";
    }

    ?>
    <h1> introduce tus datos </h1>

    <form action="comprueba_login.php" method="post" >
        <label> usuario <input type="text" name="login"></label>
        <label> contraseña <input type="password" name="contraseña"> </label>
        <label for="miCheckbox">guardar cookie</label>
        <input type="checkbox" id="recordar" name="recordar" value="on">
        <input type="submit" name="seccion" value="seccion">
    </form>
</body>
</html>