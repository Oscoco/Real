<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo administrador | Real Brothers</title>
</head>

<body id="body-pd">
    <section>
        <div class="text-center pb-1 pt-20 m-4">
            <h1 class="text-4xl">Crea un nuevo administrador</h1>
        </div>

        <div class="pt-3">
            <p>Administrador / <span class="active-text">Nuevo administrador</span> </p>
            <a href="<?= PATH ?>admin/auth/Users.php" type="" class="primary_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
        </div>

    </section>
    <section class="container">
        <form class="w-full h-auto flex flex-wrap justify-center pb-8" action="<?=PATH?>admin/models/authAction.php" method="POST" enctype="multipart/form-data">
        <!-- action="<PATH?>admin/models/authAction.php" method="POST" enctype="multipart/form-data" 
            tenemos la direccion del metodo, hacemos validos los archivos img y demas, enviando por POST-->
            <div class="bg-white w-max m-2 rounded-xl shadow-md flex flex-col justify-center container ">
                <div class="text-center sm:p-4 p-2 ">
                    <div class="file-upload m-2 rounded-xl shadow-md flex flex-col justify-center container">
                        <div class="image-upload-wrap rounded-xl h-64">
                            <input class="file-upload-input" type='file' name="photo" onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                <i class='bx bxs-file-image text-5xl'></i>
                                <p class="font-semibold hover:text-blue-600">Haga clic para subir</p>
                                <p class="text-xs text-gray-500 mx-10">PNG, JPG (MAX. 800x400px)</p>
                            </div>
                        </div>

                        <div class="file-upload-content rounded-xl shadow-md">
                            <div class="flex justify-center items-center flex-col py-2">
                                <img class="file-upload-image" src="#" alt="your image" />
                            </div>
                            <div class="image-title-wrap p-3 ">
                                <button type="button" onclick="removeUpload()" class="remove-image rounded-xl">Eliminar: <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white m-2 rounded-xl shadow-md md:w-2/3 w-full px-4">
                <h2 class="p-5 text-2xl text-center">Datos del administrador</h2>
                <div class="">
                    <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
                        <div>
                            <label for="name" class="text-label">Nombre <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="name"  class="input-space" placeholder="Nombres" required>
                        </div>
                        <div>
                            <label for="last_name" class="text-label ">Apellidos <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="lastname" class="input-space" placeholder="Apellidos" required>
                        </div>
                    
                        <div>
                            <label for="phone" class="text-label ">Usuario <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="user" class="input-space" placeholder="Nombre de usuario" required>
                        </div>
                        <!-- <div>
                            <label for="phone" class="text-label ">Constraseña</label>
                            <input type="password" name="password" class="input-space" placeholder="Segundo numero de contacto" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div> -->

                        <div x-data="{ show: true }">
                            <label class="text-label">Contraseña <?php require '../../components/require.php'; ?></label>
                
                            <div class="relative">
                                <input name="password" :type="show ? 'password' : 'text'" class="input-space">
                                <div class="absolute inset-y-0 right-0 flex items-center text-sm leading-5 ">
                                    <i class='bx bx-low-vision text-xl h-6 text-gray-700 flex justify-center items-center p-5'fill="none" @click="show = !show"
                                    :class="{'hidden': !show, 'block':show }" ></i>
                            
                                    <i class='bx bx bxs-low-vision text-xl h-6 text-blue-700 flex justify-center items-center p-5' fill="none" @click="show = !show"
                                    :class="{'block': !show, 'hidden':show }" ></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="text-label ">Numero de telefono <?php require '../../components/require.php'; ?></label>
                            <input type="number" name="phone" class="input-space" placeholder="Numero personal" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div>
                        <div>
                            <label for="phone" class="text-label ">Numero de telefono (2)</label>
                            <input type="number" name="twophone" class="input-space" placeholder="Segundo numero de contacto" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                        <div>
                            <label for="" class="text-label ">Correo electronico</label>
                            <input type="email" name="email" class="input-space" placeholder="john.doe@ejemplo.com">
                        </div>
                        <div>
                            <label for="company" class="text-label ">Dui <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="dui" class="input-space" placeholder="00000000-0" required>
                        </div>
                    </div>

                    <div class="mb-6 px-8">
                        <label for="default" class="text-label">Rol del administrador <?php require '../../components/require.php'; ?></label>
                        <select name="rolid" class="input-space">
                            <option>Seleccionar el rol</option>
                            <option value="1">Programador</option>
                        </select>
                    </div>

                    <div class="pb-6 px-9">
                        <input type="submit" name="createUser" class="inputbtn bg-blue-700" value="Agregar nuevo administrador" >
                    </div>

                </div>
            </div>
        </form>
    </section>
</body>

</html>
