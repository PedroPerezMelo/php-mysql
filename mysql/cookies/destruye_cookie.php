<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // el tiempo es negativo asi la elimina
    setcookie("prueba", "esta es la informacion de la primera cookie", time()-1,"/mysql/cookies/leer_cookie.php");

    ?>
    
</body>
</html>