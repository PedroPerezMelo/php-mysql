
<?php
    
    if(isset($_POST["enviando"])){

        $contra = $_POST["contra"]; // atributo name contra
        $nombre = $_POST["nombre_usuario"];

       /* 

       * operador ternario
       * operadores logicos
       
       if($edad < 18){

            echo "eres menor de edad";
        }else {

            echo "eres mayor de edad puedes acceder";
        }
        */
        $resultado = $nombre == "pedro" && $contra == 1234 ? "puedes acceder al programa " : "NO puedes acceder nombre o contraseña incorrectos";
        
        echo $resultado;
    }
?>