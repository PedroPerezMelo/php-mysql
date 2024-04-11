<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>
<body>
    <?php

    // clase padre(superclase)
    class Vehiculo{

        //propiedaes
        protected string $marca;
        private string $color;
        protected int $modelo;
        protected float $motor;

        // constructor
        public function __construct( string $marca, string $color, int $modelo, float $motor){

            $this->marca = $marca;
            $this->color = $color;
            $this->modelo = $modelo;
            $this->motor = $motor;
        }

        // metodos o funciones
        // funcion publica para obtener el color
        public function getColor(string $color): string{

            return $this->color;
        }
        
        //funcion privada para cambiar el color
        public function setColor(string $color): void{

            $this->color = $color;
        }

        public function mostrarInformacion(): void{

            echo "marca: " . $this->marca . PHP_EOL;
            echo "color: " . $this->color . PHP_EOL;
            echo "modelo: " . $this->modelo . PHP_EOL;
            echo "motor: " . $this->motor . PHP_EOL;

        }
    }
    // clase hija (subclase)
    class Coche extends Vehiculo{
        
        private int $ruedas;
        private int $ejes;

        //constructor
        public function __construct(string $marca, string $color, int $modelo, float $motor, int $ruedas, int $ejes){

            parent::__construct($marca, $color, $modelo, $motor); // llamada al contruct father
            $this->ruedas = $ruedas;
            $this->ejes = $ejes;
        }

        // metodos o funciones

        public function mostrarInformacion(): void {

            parent::mostrarInformacion(); // llama el metodo del father
            echo "Ruedas: " . $this->ruedas . PHP_EOL;
            echo "Ejes: " . $this->ejes . PHP_EOL;
        }
    }

    // creamos un objecto de la clase
    $kia = new Vehiculo("kia", "rojo", 2024, 1.6);
    $kia->setColor("azul");
    $kia->mostrarInformacion();

    $camion = new Coche("renaul", "rojo", 2025, 1.8, 6, 3);

    $camion->mostrarInformacion();

    ?>
    
</body>
</html>