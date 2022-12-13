<?php 
    session_start();
    
    if (empty($_SESSION["id"])) {
        header("location: ../404.php"); //redireccion de seguridad
    }
    
    require '../../config/functions.php';
    require '../../config/config.php';

    require '../../views/static/head.view.php';
    require '../../views/static/header.view.php';
    require '../../views/static/nav.view.php';

    require '../../vendor/autoload.php';
    

    require '../../views/admin/auth/index.view.php';
 
    require '../../views/static/footer.view.php';

?>