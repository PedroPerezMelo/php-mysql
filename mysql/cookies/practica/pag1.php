<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambia </title>
</head>
<body>
    <?php

    if(isset($_COOKIE["idioma"])){

        if(!$_COOKIE["idioma_selecionado"]){

            header("loaction:pag1.php");
            
        } else if($_COOKIE["idioma_selecionado"] == "es"){
    
            header("location:spanish.php");
    
        } else if($_COOKIE["idioma_selecionado"] == "en"){
    
            header("location:english.php");
       }
    }
    ?>
    <h1>seleciona tu idioma preferido</h1>

    <a href="creaCookie.php?idioma=es" name="english">ingles</a>
    <a href="creaCookie.php?idioma=en" name="spanish">español</a>
    
</body>
</html>