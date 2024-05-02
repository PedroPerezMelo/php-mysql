<?php
        
    // habilitar errores
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

     class conexion {
         private $db_tipo = 'mysql';
         private $db_host = 'localhost';
         private $db_nombre = 'usuarios';
         private $db_usuario = 'root';
         private $db_contraseña = '';
         
         private $pdo;

        
        public function __construct() {

            try {

                $conexion = "{$this->db_tipo}:host={$this->db_host};dbname={$this->db_nombre}; charset=utf8";
                $opciones = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $this->pdo = new PDO($conexion, $this->db_usuario, $this->db_contraseña, $opciones);
                
            } catch (PDOException $e) {
                die("error al conectar a la bbdd". $e->getMessage());
            }
            
            
        }
        public function getPDO(){

            return $this->pdo;

        }
     }
     

?>