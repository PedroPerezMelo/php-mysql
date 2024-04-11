<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>
<body>
    <?php

    $alimentos = ["fruta"=>["tropical"=>"kiwi",
                            "citrico" => "mandarina",
                            "otros" => "manzanas"],

                  "leche" => ["animal" => "vaca",
                              "vegetal" => "coco"],

                  "carne" => ["vacuno" => "lomo",
                              "porcino" => "pata"]];
                            
    echo $alimentos["carne"]["vacuno"] . "<br>";

    // bucles

    foreach ($alimentos as $key_alim => $subcategorias) {
        echo "categoria $key_alim: <br>";

        foreach ($subcategorias as $subcategoria => $value) {
            echo "subcategorias: $subcategoria = $value <br>";
        }

        echo "<br>";
    }
    ?>
    
</body>
</html>