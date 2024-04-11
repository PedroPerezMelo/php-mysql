<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clases en php</title>
</head>
<body>
    <?php

    class Coche{
        /* 
        public int $ruedas;
        private string $color;
        public float $motor;

        // contructor
        public function __construct(int $ruedas, string $color, float $motor){

            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;
        }
        */
        // nuevo constructor
        private int $ruedas;
        private string $color;
        private float $motor;

        public function __construct(int $ruedas, string $color, float $motor){

            $this->ruedas = $ruedas;
            $this->color = $color;
            $this->motor = $motor;
        }

        // funcion publica para obtener el color
        public function getColor(): string{

            return $this->color;
        }

        // funcion privada para cambiar el color
        public function setColor(string $color): void{

            $this->color = $color;
        }

        // funcion protegida para encender el motor
        public function mostrarInformacion(): void{

            echo "ruedas: " . $this->ruedas . PHP_EOL;
            echo "color: " . $this->color .PHP_EOL;
            echo "Motor: " . $this->motor . PHP_EOL;
            
        }

        
    }
    
    // creamos los objectos
    $kia = new Coche(4, "rojo", 1.6);
    $kia->mostrarInformacion();

    ?>
    
</body>
</html>