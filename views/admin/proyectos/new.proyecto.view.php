<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo proyecto | Real Brothers</title>
</head>

<body class="bg-gray-200" id="body-pd">

    <div class="pt-20 ">
        <h1 class="mt-4 text-center text-4xl">Nuevo registro</h1>
        <div class="py-2 mb-4">
            <p>Administrador / Proyectos Activo / <span class="text-blue-800">Nuevo registro</span></p>
        </div>
    </div>

    <section class="sm:mx-7">
            <div class="bg-white w-full  rounded-xl shadow-md p-8 mb-5">
                <div>
                    <h1 class="active-text text-2xl mb-4 ">Datos de la Posicion </h1>
                </div>
                <form class="">
                    <div class="grid gap-5 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="text-label">Nombre</label>
                            <input type="text" id="first_name" class="input-space" placeholder="Nombre del puesto" required="">
                        </div>
                        <div>
                            <label for="last_name" class="text-label">Cadidatos</label>
                            <input type="text" id="last_name" class="input-space " placeholder="Personal requerido">
                        </div>
                        <div>
                            <label class="text-label">Telefono</label>
                            <input type="tel" id="phone" class="input-space" placeholder="Cotacto cliente" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                        <div>
                            <label class="text-label">Ubicacion</label>
                            <input type="text" id="first_name" class="input-space" placeholder="Calle del puesto">
                        </div>
                        <div>
                            <label class="text-label">Fecha de inicio</label>
                            <input type="date" id="" class="input-space">
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Fecha de inicio del cargo</p>
                        </div>
                        <div>
                            <label class="text-label">Fecha de retiro</label>
                            <input type="date" id="" class="input-space " placeholder="" required="">
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Fecha de finalización del cargo</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div>
                            <label for="countries" class="text-label">Posicion - Proyecto</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option>Incativo</option>
                                <option>Activo</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex sm:flex-nowrap flex-wrap items-center justify-start sm:justify-center">

                        <button type="submit" class="w-full !my-3">
                            <a href="<?=PATH?>admin/proyectos/" class="cancel_btn w-full "><i class='bx bx-arrow-back px-1'></i> Regresar</a>
                        </button>

                        <button type="submit" class="w-full mx-0 sm:mx-4">
                            <a class="primary_btn w-full ">Enviar Nuevo <i class='bx bx-user-plus px-1'></i></a>
                        </button>
                    </div>

                </form>
            </div>   
    </section>

</body>

</html>