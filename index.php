<?php 

    session_start();
    
    require './config/config.php';
    require "./config/conexion.php";

    require './views/static/head.view.php';

    require './views/index.view.php';
    // font page animate component
    require './components/font-login.php';

    require './views/static/footer.view.php'
    

?>