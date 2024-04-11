<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
/* los bucles son iguales a los de javascript, css, python */
    <?php

    for($i = 0; $i < 10; $i++){

        echo "<p> hemos entrado en el bucle las veces son </p>" . $i;

        if($i == 6){
            echo "<p> bucle interrupido </p>";
            break;
        }
    }
    ?>
</body>
</html>