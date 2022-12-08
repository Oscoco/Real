<?php


namespace Real;
    
class Usuarios{


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
    $sql = "INSERT INTO `usuario`(`user`, `password`, `name`, `lastname`, `phone`, `twophone`, `email`, `dui`, `rolid`, `foto`) 
    VALUES (:user,:password,:name,:lastname,:phone,:twophone,:email,:dui,:rolid,:foto)";

    $resultado = $this->cn->prepare($sql);

    $_array = array (
        ":user" => $_params['user'],
        ":password"=> $_params['password'],
        ":name"=> $_params['name'],
        ":lastname"=> $_params['lastname'],
        ":phone" => $_params['phone'],
        ":twophone" => $_params['twophone'],
        ":email" => $_params['email'],
        ":dui" => $_params['dui'],
        ":rolid" => $_params['rolid'],
        ":foto" => $_params['foto']
    );

    if ($resultado->execute($_array)) 
        return true;

    return false;
    
}

    public function actualizar ($_params){
        // actualizamos los datos para la base de datos 
    $sql ="UPDATE `usuario` SET `user`=':user',`password`=':password',`name`=':name',
    `lastname`=':lastname',`phone`=':phone',`twophone`=':twophone',`email`=':email',`dui`=':dui',`rolid`=':rolid',`foto`=':foto' WHERE `id`=':id";

    $resultado = $this->cn->prepare($sql);
    $_array = array (
        ":user" => $_params['user'],
        ":password"=> $_params['password'],
        ":name"=> $_params['name'],
        ":lastname"=> $_params['lastname'],
        ":phone" => $_params['phone'],
        ":twophone" => $_params['twophone'],
        ":email" => $_params['email'],
        ":dui" => $_params['dui'],
        ":rolid" => $_params['rolid'],
        ":foto" => $_params['foto']
    );

    if ($resultado->execute($_array)) 
        return true;

    return false;
}

    public function eliminar($id){
        $sql = "DELETE FROM `usuario` WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);

        $_array= array(
        ":id"=> $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }

    public function mostrar(){
        // union para colores en personas para la union de tablas y tomar el id de ese mismo
        $sql = "SELECT usuario.id, name, lastname, phone, nombrerol, foto 
        FROM usuario
        INNER JOIN roles
        ON usuario.rolid = roles.id ORDER BY usuario.id ASC
        ";

        $resultado = $this->cn->prepare($sql);


        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }

    // funcion para mostrar individual
    public function mostrarporId($id){
        $sql = "SELECT * FROM `usuario` WHERE `id`=:id ";

        $resultado = $this->cn->prepare($sql);

        $_array= array(
            ":id"=> $id
          );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }
}
?>