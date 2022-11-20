<?php
// este es el apartado para hacer los metodos del crud

namespace Real;

// Admin nombre definido para las funciones 
class Admin{

    private $config;
    private $cn = null;

    // public function __construct(){ funcion de php para trabajar con programacion orientada a objetos
    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini'); //dis es la ruta actualial el directorio
        
        $this->cn = new \PDO($this->config['dns'], $this->config['usuario'],$this->config
        ['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            // esto es con pdo para las tildes para usar el cotejamiento
        ));
        // esto es la ruta a la base de datos de la configuracion
    }

    // creacion de funciones

    public function registrar($_params){
        $sql = "INSERT INTO `persona`(`nombre`, `apellido`, `nacimiento`, `colorid`, `foto`) 
        VALUES (:nombre, :apellido, :nacimiento, :colorid, :foto)";

        $resultado = $this->cn->prepare($sql);

        $_array= array(
          ":nombre" => $_params['nombre'], 
          ":apellido" => $_params['apellido'], 
          ":nacimiento" => $_params['nacimiento'], 
          ":colorid" => $_params['colorid'], 
          ":foto"=> $_params['foto']
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function actualizar($_params){
         $sql = "UPDATE `persona` SET `nombre`=:nombre,`apellido`=:apellido,`nacimiento`=:nacimiento,`colorid`=:colorid
         ,`foto`=:foto WHERE `id`=:id";
         

        $resultado = $this->cn->prepare($sql);

        $_array= array(
          ":nombre" => $_params['nombre'], 
          ":apellido" => $_params['apellido'], 
          ":nacimiento" => $_params['nacimiento'], 
          ":colorid" => $_params['colorid'], 
          ":foto"=> $_params['foto'],
          ":id"=> $_params['id'],
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function eliminar($id){
        $sql = "DELETE FROM `persona` WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);

        $_array= array(
          ":id"=> $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        $sql = "SELECT persona.id, nombre,apellido,nacimiento,color,foto,estado FROM persona
        INNER JOIN colores
        ON persona.colorid = colores.id ORDER BY persona.id DESC
        ";
        // union para colores en personas para la union de tablas y tomar el id de ese mismo

        $resultado = $this->cn->prepare($sql);


        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    // funcion para mostrar individual
    public function mostrarporId($id){
        $sql = "SELECT * FROM `persona` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);
        $_array= array(
            ":id"=> $id
          );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }
    
}





