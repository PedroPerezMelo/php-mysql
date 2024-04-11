<?php

function calcular($calculo){

    if(!strcmp("Suma", $calculo)){

        global $num1;
        global $num2;

        $resultado = $num1 + $num2;

        echo " <p class = 'resultado'> el resultado es: $resultado </p>";
    }

    if(!strcmp("Resta", $calculo)){

        global $num1;
        global $num2;

        $resultado = $num1 - $num2;

        echo " <p class = 'resultado' > el resultado es: $resultado </p>";
    }
    if(!strcmp("Multiplicacion", $calculo)){

        global $num1;
        global $num2;

        $resultado = $num1 * $num2;

        echo " <p class = 'resultado'> el resultado es:  $resultado </p>";
    }
    if(!strcmp("Dividir", $calculo)){

        global $num1;
        global $num2;

        $resultado = $num1 / $num2;

        echo " <p class = 'resultado'> el resultado es: $resultado </p>";
    }
    if(!strcmp("Modulo", $calculo)){

        global $num1;
        global $num2;

        $resultado = $num1 % $num2;
        
        echo " <p class = 'resultado'> el resultado es: $resultado </p>";
    }
    if(!strcmp("Incremento", $calculo)){

        global $num1;
        
        $num1++;

        $resultado = $num1;

        echo " <p class = 'resultado'> el resultado es: $resultado </p>";
    }
    if(!strcmp("Decremento", $calculo)){

        global $num1;

        $num1 --;
        $resultado = $num1 ;

        echo " <p class = 'resultado'> el resultado es: $resultado </p>";
    }

    
}
    ?>