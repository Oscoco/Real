<?php
// print"<pre>";
// print_r($_POST); 
// print_r($_FILES); // podemos ver el archivo fotos

require '../../vendor/autoload.php';

$user = new Real\Usuarios;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['accion'] === 'Nuevo administrador') {

        if (empty($_POST['name']))
            exit("completa el nombre");

        if (empty($_POST['lastname']))
            exit("completa el apellido");

        if (empty($_POST['user']))
            exit("completa el usuario");

        if (empty($_POST['password']))
            exit("completa el contraseña");

        if (empty($_POST['phone']))
            exit("completa el Telefono");

        if (empty($_POST['dui']))
            exit("completa el Dui");

        if (empty($_POST['rolid']))
            exit("selecciona un Rol de usuario");
        // este por si esta vacio

        if (!is_numeric($_POST['rolid']))
            exit("selecciona un Rol de usuario valido");

        $_params = array(
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'user' => $_POST['user'],
            'password' => $_POST['password'],
            'phone' => $_POST['phone'],
            'twophone' => $_POST['twophone'],
            'email' => $_POST['email'],
            'dui' => $_POST['dui'],
            'rolid' => $_POST['rolid'],
            'foto' => subirfoto()
        );

        $rpt = $user->registrar($_params);

        // location para la direccion de reinicio

        if ($rpt)
            header('Location: ../auth/Users.php');
        // esto haciendo mencion de la carpeta raiz donde se envian los datos del post
        else
            print 'Error Page al registrar';
    }
    // acciones para actualizar registros
    if ($_POST['accion'] === 'Actualizar') {

        if (empty($_POST['name']))
            exit("completa el nombre");

        if (empty($_POST['lastname']))
            exit("completa el apellido");

        if (empty($_POST['rolid']))
            exit("selecciona un Rol de usuari");
        // este por si esta vacio

        if (!is_numeric($_POST['rolid']))
            exit("selecciona el rol para el usuarios");


        $_params = array(
            'user' => $_POST['user'],
            'password' => $_POST['password'],
            'name' => $_POST['name'],
            'lastname' => $_POST['lastname'],
            'phone' => $_POST['phone'],
            'twophone' => $_POST['twophone'],
            'email' => $_POST['email'],
            'dui' => $_POST['dui'],
            'rolid' => $_POST['rolid'],
            'id' => $_POST['id'],
        );

        // validar por si no esta vacio
        if (!empty($_POST['foto_temp']))
            $_params['foto'] = $_POST['foto_temp'];

        if (!empty($_FILES['foto']['name']))
            $_params['foto'] = subirfoto();

        $rpt = $user->actualizar($_params);

        if ($rpt)
            header('Location: ../auth/Users.php');
        else
            print 'Error Page al actualizar';
    }
}
// funcion para eliminar datos por id de la tabla
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // lo buscamos por id  por Get de la url
    $id = $_GET['id'];

    $rpt = $user->eliminar($id);

    if ($rpt)
        header('Location: ../auth/Users.php');

    else
        print 'Error Page al eliminar';
}


// funcion para subir imagenes
function subirfoto()
{

    $carpeta = __DIR__ . '/../../upload/';
    // carpeta donde se colocan las imagenes

    $archivo = $carpeta . $_FILES['foto']['name'];
    // nombre con el que se sube 


    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);
    //  temporal mas la ruta 

    return $_FILES['foto']['name'];
}
