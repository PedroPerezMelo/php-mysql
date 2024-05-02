<?php 

require ("conexion.php");

class devuelveProducto extends Conexion{
    
    public function __construct(){
        
        parent::__construct(); // construct father

        }
        
        public function getProductos(){

            $resultados = $this->conexion_db->query("SELECT FECHA FROM PRODUCTOS");

            $productos = $resultados->fetch_all(MYSQLI_ASSOC);

            return $productos;
        }

    }

?>