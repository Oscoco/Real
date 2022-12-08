<?php 

if (!empty($_POST ["login"])){
    if (!empty($_POST ["user"]) and !empty ($_POST ["password"])) {
        $user = $_POST ["user"];
        $password = $_POST ["password"];
        $sql=$conexion->query ("select * from usuario where user = '$user' and password = '$password' ");

        if ($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["name"]=$datos->name;
            $_SESSION["lastname"]=$datos->lastname;
            // datos del usuario
            $_SESSION["phone"]=$datos->phone;
            $_SESSION["twophone"]=$datos->twophone;
            $_SESSION["dui"]=$datos->dui;
            $_SESSION["email"]=$datos->email;
            $_SESSION["rolid"]=$datos->rolid;
            header("location: ./admin/personal/index.php");
        } else{
            // completar los campos
            require "./components/incorrect-data.php";
        }
    } else {
        // Datos vacios
        require "./components/alert-danger.php";
    }
}
?>