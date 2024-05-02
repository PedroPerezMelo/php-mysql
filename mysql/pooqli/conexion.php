<?php
    
    require ("config.php");

    // habilitar errores
    
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class Conexion{

        protected $conexion_db;

        public function __construct(){

            $this->conexion_db = new mysqli(db_host, db_usuario, db_contra, db_nombre);

            if($this->conexion_db->connect_error){

                echo "fallo de conexion a la bbdd: " . $this->conexion_db->connect_error;

                return;
            }
            $this->conexion_db->set_charset(db_charset);
        }

    }
?>