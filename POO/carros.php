<?php
    class buyCars{

        private int $precio_final;
        public string $carro;
        private static $descuento = 0;

        public function __construct(string $carro){

            $this->carro = $carro;
            
            if($carro == "urbano"){
                $this->precio_final = 50000;
            }
            else if($carro == "compacto"){
                $this->precio_final = 30000;
            }
            else if($carro == "berlina"){
                $this->precio_final = 80000;
            }
            $this->setPrecio($this->precio_final);
        } // finaliza el constructor

        //metodos o funciones
        public function climatizacion(string $clase){
            
            if($clase == "frio"){
                $this->precio_final += 1000;
            }
            else if($clase == "demasiado"){
                $this->precio_final += 3000;
            }
            else if($clase == "normal"){
                $this->precio_final += 5000;
            } else{
                $this->precio_final = 2000;
            }
        }

        public function navegadorgps(string $gps){

            if($gps == "avanzado"){
                $this->precio_final += 2000;
            }
            else if($gps == "normal"){
                $this->precio_final += 1000;
            }
            else{
                $this->precio_final += 500;
            }
        }

        public function tapiceria($color){

            if($color == "blanco"){
                $this->precio_final += 5000;
            }
            else if($color == "negor"){
                $this->precio_final += 5000;
            }
            else{
                $this->precio_final += 3000;
            }
        }

        static function descuento(){

            if(date("m-d-y") > "10-01-24"){

                self::$descuento = 4500;
            }
        }

        public function setPrecio(int $precio_final): void{

            $this->precio_final = $precio_final - self::$descuento;
        }

        public function getPrecio(): string{

            return $this->precio_final;
        }
    }
    
?>