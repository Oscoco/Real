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
            <a href="<?=PATH?>admin/auth/Users.php" type="" class="primary_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
        </div>

    </section>
    <section class="w-full h-auto flex flex-wrap justify-center pb-8">

        <div class="bg-white w-max m-2 rounded-xl shadow-md flex flex-col justify-center container ">
            <div class="text-center sm:p-4 p-2 ">
            <!-- ARRIBA sm:px-4 px-10 pb-8 -->
            <!-- <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer ">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Haga clic para subir</span></p>
                            <p class="text-xs text-gray-500 mx-10">PNG, JPG (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" onchange="readURL(this);" accept="image/png, image/gif, image/jpeg" type="file" class="hidden" />
                    </label>
                </div> -->

            
                <div class="file-upload m-2 rounded-xl shadow-md flex flex-col justify-center container">
                    <div class="image-upload-wrap rounded-xl h-64">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
            <form class="" method="GET">
                <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
                    <div>
                        <label for="first_name" class="text-label">Nombre <?php require '../../components/require.php'; ?></label>
                        <input type="text" id="first_name" class="input-space" placeholder="Nombres" required>
                    </div>
                    <div>
                        <label for="last_name" class="text-label ">Apellidos <?php require '../../components/require.php'; ?></label>
                        <input type="text" id="last_name" class="input-space" placeholder="Apellidos" required>
                    </div>
                    <div>
                        <label for="phone" class="text-label ">Numero de telefono <?php require '../../components/require.php'; ?></label>
                        <input type="number" id="" class="input-space" placeholder="Numero personal" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                    <div>
                        <label for="phone" class="text-label ">Numero de telefono (2)</label>
                        <input type="number" id="" class="input-space" placeholder="Segundo numero de contacto" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                    <div>
                        <label for="" class="text-label ">Correo electronico</label>
                        <input type="email" id="email" class="input-space" placeholder="john.doe@ejemplo.com" >
                    </div>
                    <div>
                        <label for="company" class="text-label ">Dui <?php require '../../components/require.php'; ?></label>
                        <input type="text" id="company" class="input-space" placeholder="00000000-0" required>
                    </div>
                </div>

                <div class="mb-6 px-8">
                    <label for="default" class="text-label">Rol del administrador <?php require '../../components/require.php'; ?></label>
                    <select id="default" class="input-space">
                        <option >Seleccionar el rol</option>
                        <option value="1">Programador</option>

                       
                    </select>
                </div>


                <div class="pb-6">
                    <input name="createUser" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full px-5 py-2.5 text-center" value="Crear nuevo administrador">
                </div>

            </form>
        </div>

    </section>
</body>

</html>


<!-- ver foto -->
 <!--   se nesecita jquery
        y un poco de js
<div class="col file-upload pt-0">
    <div class="image-upload-wrap">
        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
        <div class="drag-text">
        <i class='bx bxs-file-image display-4 '></i>
        <p>Selecciona la imagen o arrastrala aqui.</p>
        </div>
    </div>

    <div class="file-upload-content">
        <img class="file-upload-image" src="#" alt="your image" />
        <div class="image-title-wrap mt-0">
        <button type="button" onclick="removeUpload()" class="remove-image">Eliminar: <span class="image-title">Uploaded Image</span></button>
        </div>
    </div>
</div> -->
