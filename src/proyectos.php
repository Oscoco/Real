<?php

    namespace Real;
    
    class proyectos{

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

        public function registrar ($_params){
                // hacemos un envio para la base de datos 
            $sql = "INSERT INTO `proyecto`(`nombre`, `candidatos`, `fechainicio`, `fechafin`, `ubicacion`, `telefono`)
            VALUES (:nombre,:candidatos,:fechainicio,:fechafin,:ubicacion,:telefono)";

            $resultado = $this->cn->prepare($sql);

            $_array = array (
                ":nombre" => $_params['nombre'],
                ":candidatos"=> $_params['candidatos'],
                ":fechainicio"=> $_params['fechainicio'],
                ":fechafin"=> $_params['fechafin'],
                ":ubicacion"=> $_params['ubicacion'],
                ":telefono" => $_params['telefono']
            );

            if ($resultado->execute($_array)) 
                return true;

            return false;
            
        }

        public function actualizar ($_params){
              // actualizamos los datos para la base de datos 
              $sql = "UPDATE `proyecto` SET `nombre`=:nombre,`candidatos`=:candidatos,`fechainicio`=:fechainicio,`fechafin`=:fechafin,`ubicacion`=:ubicacion,`telefono`=:telefono,`estado`=:estado WHERE `id`=:id";
  
              $resultado = $this->cn->prepare($sql);
  
              $_array = array (
                  ":nombre" => $_params['nombre'],
                  ":candidatos"=> $_params['candidatos'],
                  ":fechainicio"=> $_params['fechainicio'],
                  ":fechafin"=> $_params['fechafin'],
                  ":ubicacion"=> $_params['ubicacion'],
                  ":telefono" => $_params['telefono'],
                  ":id" => $_params['id']
              );
  
              if ($resultado->execute($_array)) 
                  return true;
  
              return false;
        }

        public function eliminar($id){

            $sql = "DELETE FROM `proyecto` WHERE `id`=:id ";

            $resultado = $this->cn->prepare($sql);
  
            $_array = array(
                ":id" => ['id']
            );
  
              if ($resultado->execute($_array)) 
                  return true;
  
              return false;
        }

        public function mostrar (){

            $sql = "SELECT FROM `proyecto` 
            INNER JOIN guardias ";

            $resultado = $this->cn->prepare($sql);
  
            $_array = array(
                ":id" => ['id']
            );
  
              if ($resultado->execute($_array)) 
                  return true;
  
              return false;

        }
        public function mostrarPorId (){

        }
    }

?>


