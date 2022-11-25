<?php 

    // print"<pre>";
    // print_r($_POST); 
    // print_r($_FILES); 
    // // todo lo que se envia del formulario
    // // podemos ver el archivo fotos
    // exit();
    require '../../vendor/autoload.php';

    // $persona = new Real\User;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if ($_POST['createUser'] === 'Agregar nuevo administrador') {

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
                'name'=>$_POST['name'],
                'lastname'=>$_POST['lastname'],
                'user'=>$_POST['user'],
                'password'=>$_POST['password'],
                'phone'=>$_POST['phone'],
                'twophone'=>$_POST['twophone'],
                'email'=>$_POST['email'],
                'dui'=>$_POST['dui'],
                'rolid'=>$_POST['rolid'],
                'photo'=> subirfoto()
            );

            $rpt = $persona->registrar($_params);

            // location para la direccion de reinicio
            
            if($rpt)
                header('Location: ../persona/index.php');
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
            exit("selecciona el color fav");
            // este por si esta vacio

            if (!is_numeric($_POST['rolid']))
            exit("selecciona el rol para el usuario");


            $_params = array(
                // 'nombre'=>$_POST['nombre'],
                // 'apellido'=>$_POST['apellido'],
                // 'nacimiento'=> date('Y-m-d'),
                // 'colorid'=>$_POST['colorid'],
                // 'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'lastname'=>$_POST['lastname'],
                'user'=>$_POST['user'],
                'password'=>$_POST['password'],
                'phone'=>$_POST['phone'],
                'twophone'=>$_POST['twophone'],
                'email'=>$_POST['email'],
                'dui'=>$_POST['dui'],
                'rolid'=>$_POST['rolid'],
                'id'=>$_POST['id'],

            );

            // validar por si no esta vacio
            if (!empty($_POST['foto_temp']))
            $_params['photo'] = $_POST['foto_temp'];

            if (!empty($_FILES['photo']['name']))
            $_params['photo'] = subirfoto();

            $rpt = $persona->Actualizar($_params);
        
            if($rpt)
                header('Location: ../persona/index.php');
                // esto haciendo mencion de la carpeta raiz donde se envian los datos del post
            else
                print 'Error Page al actualizar';
        }

    }
    // funcion para eliminar datos por id de la tabla
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        // lo buscamos por id  por Get de la url
        $id =$_GET['id'];

        $rpt = $persona->eliminar($id);
        
        if($rpt)
            header('Location: ../persona/index.php');
    
        else
            print 'Error Page al eliminar';

    }


// funcion para subir imagenes
function subirfoto(){

    $carpeta = __DIR__.'/../../upload/';
    // carpeta donde se colocan las imagenes

    $archivo = $carpeta.$_FILES['photo']['name'];
    // nombre con el que se sube 


    move_uploaded_file($_FILES['photo']['tmp_name'],$archivo);
    //  temporal mas la ruta 

    return $_FILES['photo']['name'];

}

?>