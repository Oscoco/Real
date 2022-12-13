<?php 
    session_start();
    
    if (empty($_SESSION["id"])) {
        header("location: ../404.php"); //redireccion de seguridad
    }
    
    require '../../config/functions.php';
    require '../../config/config.php';
    require '../../config/conexion.php';
  

    require '../../views/static/head.view.php';
    require '../../views/static/header.view.php';
    require '../../views/static/nav.view.php';
    
    require '../../vendor/autoload.php';
    
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {

        $id = $_GET['id'];

        $user = new Real\Usuarios;

        $resultadoUser = $user->mostrarporid($id);

        if(!$resultadoUser)
            header('Location: ../Users.php');

    }else {

        header("location: ../Users.php");

    }

    require '../../views/admin/auth/ubdate.user.view.php';
    require '../../views/static/footer.view.php';
 
   

    


    

?>