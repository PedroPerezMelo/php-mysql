<?php
    
    require "conexion.php";

    class devuelveProductos extends conexion {

        public function __construct(){

            parent::__construct(); // construct father
        }

        public function getProductos(){

            $conexion = new conexion();

            $pdo = $conexion->getPDO();

            try {
                $sql = "SELECT * FROM PRODUCTOS";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
    
                $productos = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
                return $productos;
            } catch (PDOException $e) {
                
                echo "error al leer la base de datos: " . $e->getMessage();
            } finally {

                $pdo = null;

            }
        }
    }

?>