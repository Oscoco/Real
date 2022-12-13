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
            <h1 class="text-4xl">Actualizar datos del administrador</h1>
        </div>

        <div class="pt-3">
            <p>Administrador / <span class="active-text">Actualizar Datos</span> </p>
            <a href="<?= PATH ?>admin/auth/Users.php" type="" class="primary_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
        </div>
        <input type="hidden" name="id" value="<?php print $resultado['id'] ?>">
    </section>

    <section class="container flex justify-center items-center">
        <form class="w-full h-auto flex flex-wrap justify-center pb-8" action="<?= PATH ?>admin/models/authAction.php" method="POST" enctype="multipart/form-data">

            <div class="bg-white w-max m-2 rounded-xl shadow-md flex flex-col justify-center container ">
                <div class="text-center sm:p-4 p-2 ">
                    <div class="active-text">
                        <span class="text-xl"> Imagen Actual </span>
                    </div>
                    <div class="file-upload m-2 rounded-xl shadow-md flex flex-col justify-center container">
                        <div class="image-upload-wrap rounded-xl h-72 object-cover">
                            <input class="file-upload-input " type='file' name="foto" onchange="readURL(this);" accept="image/*" value="<?php print $resultadoPersona['foto'] ?>" />
                            <?php
                            $foto = "../../upload/" . $resultadoUser['foto'];
                            if (file_exists($foto)) {
                            ?>
                                <img src="<?php print $foto ?>" alt="" class="w-56 h-60 flex justify-center border m-10">
                            <?php } else { ?>
                                SIN FOTO
                            <?php }
                            ?>
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
                <div class="sm:px-10 p-5 grid justify-center">
                    <p class="text-white text-md mt-1 bg-blue-700 p-4 rounded-lg w-auto">
                        <span class="font-bold">Nombre:</span>
                        <?php print $resultadoUser['foto'] ?>
                    </p>
                </div>
            </div>

            <div class="bg-white m-2 rounded-xl shadow-md md:w-2/3 w-full px-4">
                <h2 class="p-5 text-2xl text-center">Actualizar datos</h2>
                <div class="">
                    <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
                        <div>
                            <label class="text-label">Nombre <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="name" class="input-space" placeholder="Nombres" value="<?php print $resultadoUser['name'] ?>">
                        </div>
                        <div>
                            <label class="text-label ">Apellidos <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="lastname" class="input-space" placeholder="Apellidos" required value="<?php print $resultadoUser['lastname'] ?>">
                        </div>

                        <div>
                            <label class="text-label ">Usuario <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="user" class="input-space" placeholder="Nombre de usuario" required value="<?php print $resultadoUser['user'] ?>">
                        </div>

                        <div x-data="{ show: true }">
                            <label class="text-label">Contraseña <?php require '../../components/require.php'; ?></label>

                            <div class="relative">
                                <input name="password" :type="show ? 'password' : 'text'" class="input-space" placeholder="*****" required value="<?php print $resultadoUser['password'] ?>">
                                <div class="absolute inset-y-0 right-0 flex items-center text-sm leading-5 ">
                                    <i class='bx bx-low-vision text-xl h-6 text-gray-700 flex justify-center items-center p-5' fill="none" @click="show = !show" :class="{'hidden': !show, 'block':show }"></i>

                                    <i class='bx bx bxs-low-vision text-xl h-6 text-blue-700 flex justify-center items-center p-5' fill="none" @click="show = !show" :class="{'block': !show, 'hidden':show }"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="text-label ">Numero de telefono <?php require '../../components/require.php'; ?></label>
                            <input type="number" name="phone" class="input-space" placeholder="Numero personal" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required value="<?php print $resultadoUser['phone'] ?>">
                        </div>
                        <div>
                            <label for="phone" class="text-label ">Numero de telefono (2)</label>
                            <input type="number" name="twophone" class="input-space" placeholder="Segundo numero de contacto" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="<?php print $resultadoUser['twophone'] ?>">
                        </div>
                        <div>
                            <label for="" class="text-label ">Correo electronico</label>
                            <input type="email" name="email" class="input-space" placeholder="john.doe@ejemplo.com" value="<?php print $resultadoUser['email'] ?>">
                        </div>
                        <div>
                            <label for="company" class="text-label ">Dui <?php require '../../components/require.php'; ?></label>
                            <input type="text" name="dui" class="input-space" placeholder="00000000-0" required value="<?php print $resultadoUser['dui'] ?>">
                        </div>
                    </div>

                    <div class="mb-6 px-8">
                        <label for="default" class="text-label">Rol del administrador <?php require '../../components/require.php'; ?></label>
                        <select name="rolid" class="input-space" required>
                            <option>Seleccionar el rol</option>
                            
                            <?php
                                $roles = new Real\rolesuser;
                                
                                $info_rol = $roles->mostrar();
                                $cantidad = count($info_rol);
                                    for ($x =0; $x<$cantidad; $x++) { 
                                        $item = $info_rol[$x];
                                ?>
                                    <option value="<?php print $item['id'] ?>"><?php print $item['nombrerol'] ?></option>
                                <?php
                                }
                            ?>

                        </select>
                        </select>
                    </div>

                    <div class="flex sm:flex-nowrap flex-wrap items-center justify-start sm:justify-center px-8">

                        <button type="submit" class="w-full !my-3">
                            <a href="<?= PATH ?>admin/auth/Users.php" class="cancel_btn w-full"><i class='bx bx-arrow-back px-1'></i> Regresar</a>
                        </button>


                        <div class="w-full mx-0 sm:mx-4">
                            <input type="submit" name="actualizar_user" class="primary_btn w-full bg-blue-700" value="Actualizar">
                        </div>

                    <!--<div class="pb-6 px-9">
                            <input type="submit" name="createUser" class="inputbtn bg-blue-700" value="Nuevo administrador" >
                        </div> -->
                    </div>
                </div>
            </div>
        </form>
    </section>


</body>

</html>