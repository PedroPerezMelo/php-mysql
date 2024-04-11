<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
   
   $num1 = rand(10, 50);

   $num2 = pow(20, 5);

   $num3 = 5.25987;

   echo "El numero aleatorio generado es: ". $num1;
   echo "la potencia de 20 y exponete 5 es: ". $num2;
   echo "redondeando un numero con round 5.25987: ". round($num3, 2);

   $num4 = "5";

   $resultado = (int)$num4; // convierte a ese tipo
   ?>
</body>
</html>