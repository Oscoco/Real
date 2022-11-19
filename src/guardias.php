<?php

    namespace Real;
    
    class guardias{

        private $config;
        private $cn = null;

        public function __construct(){
// dir devuelve la ruta inicial de archivo config que mantiene la conexion
            $this-> config = parse_ini_file(__DIR__ .'/../config.ini');
            // print '<pre>'; ver errores de forma mas ordenada 
            // print_r($this->config);

            $this->cn = new \PDO ($this->config['dns'], $this->config['usuario'], $this->config['clave'],  array (
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                // esto es para una configuracion de tildes con pdo
            ));

        }

        public function registrar (){

        }
        public function actualizar (){

        }
        public function eliminar (){

        }
        public function mostrar (){

        }
        public function mostrarPorId (){

        }
    }

?>