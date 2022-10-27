<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro | Real Brothers</title>
</head>

<body class="bg-gray-200" id="body-pd">

    <div class="py-5 pt-20 ">
        <h1 class="mt-4 text-center text-4xl">Nuevo registro</h1>
        <div class="py-2">
            <p>Administrador / Personal Activo / <span class="text-blue-800">Nuevo registro</span></p>
        </div>
    </div>

    
<!-- 
    <div class="flex sm:justify-between justify-center flex-wrap my-3">
        <a href="<?= PATH ?>admin/personal/" type="" class="cancel_btn mx-5"><i class='bx bx-arrow-back px-1'></i>Volver</a>
    </div>
     -->
    <section>
        <form method="GET" class="w-full flex flex-wrap justify-center items-start ">
            <div class="bg-white w-full sm:w-3/5 sm:mx-10 rounded-xl shadow-md p-8 mb-5">
                <div>
                    <h1 class="active-text text-2xl mb-4 ">Datos del perfil</h1>
                </div>
                <div>
                    <div class="grid gap-5 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="text-label">Nombres <?php require '../../components/require.php';?></label>
                            <input type="text" id="first_name" class="input-space" placeholder="" required="">
                        </div>
                        <div>
                            <label for="last_name" class="text-label">Apellidos <?php require '../../components/require.php';?></label>
                            <input type="text" id="last_name" class="input-space " placeholder="" required="">
                        </div>
                        <div>
                            <label class="text-label">Telefono <?php require '../../components/require.php';?></label>
                            <input type="tel" id="phone" class="input-space" placeholder="" required="">
                        </div>
                        <div>
                            <label class="text-label">Dui <?php require '../../components/require.php';?></label>
                            <input type="text" id="first_name" class="input-space" placeholder="" required="">
                        </div>
                        <div>
                            <label class="text-label">NIT</label>
                            <input type="text" id="last_name" class="input-space" placeholder="">
                        </div>
                        <div>
                            <label class="text-label">ISSS</label>
                            <input type="" id="" class="input-space" placeholder="" >
                        </div>
                        <div>
                            <label class="text-label">Nº Licencia</label>
                            <input type="" id="" class="input-space " placeholder="" >
                        </div>
                        <div>
                            <label class="text-label">Fecha Vencimiento</label>
                            <input type="date" id="" class="input-space " placeholder="" >
                        </div>
                        <div>
                            <label class="text-label">Fecha de Ingreso <?php require '../../components/require.php';?></label>
                            <input type="date" id="" class="input-space " placeholder="" required="">
                        </div>
                        <div>
                            <label class="text-label">Fecha de salida </label>
                            <input type="date" id="" class="input-space " placeholder="">
                        
                        </div>
                        <div>
                            <label class="text-label">Numero de cuenta</label>
                            <input type="number" id="" class="input-space " placeholder="" >
                        </div>
                        <div>
                            <label class="text-label">Banco</label>
                            <select id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option>Selecciona</option>
                                    <option>AGRICOLA</option>
                                    <option>ATLANTIDA</option>
                                    <option>DAVIVENDA</option>
                                    <option>HIPOTECARIO</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div>
                            <label class="text-label">Posicion - Proyecto</label>
                            <select id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Proyecto activo</option>
                                <option>Movical</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center justify-start sm:justify-center">
                        
                        <input name="createguardia" type="submit" class="primary_btn sm:!w-72 w-full bg-blue-700 mx-0 sm:mx-4 order-1 sm:order-2" value="Enviar Nuevo">

                        <button type="submit" class="sm:!w-72 w-full !my-3 order-2 sm:order-2">
                            <a href="<?=PATH?>admin/personal/" class="cancel_btn sm:!w-72 w-full "><i class='bx bx-arrow-back px-1'></i> Regresar</a>
                        </button>
                        
                    </div>
                </div>
            </div>

            <div class="bg-white w-max m-2 rounded-xl shadow-md flex flex-col justify-center container p-8">
                <div class="text-center sm:px-4 px-10 pb-8">
                    <div class="flex justify-center items-center w-full">
                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer ">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Haga clic para subir</span></p>
                                <p class="text-xs text-gray-500 mx-10">PNG, JPG (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" accept="image/png, image/gif, image/jpeg" type="file" class="hidden" />
                        </label>
                    </div>
                    <div class="py-4">
                        <p>Agregar una imagen</p>
                    </div>
                    <div class="active-text text-xl">
                        <p>name img </p>
                    </div>

                </div>
            </div>
        </form>
    </section>


</body>

</html>
