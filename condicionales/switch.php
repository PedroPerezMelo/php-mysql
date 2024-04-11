
<?php
     
     if(isset($_POST["enviando"])){

        $nombre = $_POST["nombre_usuario"];
        $contra = $_POST["contra"];

        switch (true) {
            case $nombre == "juan" && $contra == "1234";
                
                echo "el nombre juan esta validado en el sistema";
                
                break;
            case $nombre == "maria" && $contra == "123";
                
                echo "el nombre maria esta validado en el sistema";

                break;
            case $nombre == "pedro" && $contra == "12";
                
                echo "el nombre pedro esta validado en el sistema";

                break;
            
            default:
                # code...
                echo "el nombre introducido se encuentra no registrado en sistema";

                break;
        }
     }


?>