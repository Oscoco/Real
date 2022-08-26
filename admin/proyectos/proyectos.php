<?php 
    session_start();
    
    require '../../config/functions.php';
    require '../../config/config.php';
    
    require '../../views/static/head.view.php';
    require '../../views/static/header.view.php';
    require '../../views/static/nav.view.php';
    require '../../views/admin/proyectos/proyectos.view.php';

    require '../../views/static/footer.view.php';

?>