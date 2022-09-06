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
    <section class="w-full flex flex-wrap justify-center items-start ">

        <div class="bg-white w-full sm:w-3/5 sm:mx-10 rounded-xl shadow-md p-8 mb-5">
            <div>
                <h1 class="active-text text-2xl mb-4 ">Datos del perfil</h1>
            </div>
            <form class="">
                <div class="grid gap-5 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="text-label">Nombres</label>
                        <input type="text" id="first_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label for="last_name" class="text-label">Apellidos</label>
                        <input type="text" id="last_name" class="input-space " placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">Telefono</label>
                        <input type="tel" id="phone" class="input-space" placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                    </div>
                    <div>
                        <label class="text-label">Dui</label>
                        <input type="text" id="first_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">NIT</label>
                        <input type="text" id="last_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">ISSS</label>
                        <input type="" id="" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">Nº Licencia</label>
                        <input type="" id="" class="input-space " placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">Fecha Vencimiento</label>
                        <input type="date" id="" class="input-space " placeholder="" required="">
                    </div>
                    <div>
                        <label class="text-label">Fecha de Ingreso</label>
                        <input type="date" id="" class="input-space " placeholder="" required="">
                    </div>
                    <div >
                        <label class="text-label">Fecha de baja</label>
                        <input type="date" id="" class="input-space " placeholder="" required="">
                    </div>
                </div>
                <div class="mb-6">
                    <div>
                        <label for="countries" class="text-label">Posicion - Proyecto</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Proyecto activo</option>
                            <option>Movical</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-start sm:justify-center">

                    <button type="submit" class="sm:!w-72 w-full !my-3">
                        <a href="<?=PATH?>admin/personal/" class="cancel_btn sm:!w-72 w-full "><i class='bx bx-arrow-back px-1'></i> Regresar</a>
                    </button>
                    
                    <button type="submit" class="sm:!w-72 w-full mx-0 sm:mx-4">
                        <a class="primary_btn sm:!w-72 w-full ">Enviar Nuevo <i class='bx bx-user-plus px-1'></i></a>
                    </button>
                </div>

            </form>
        </div>

        <div class="bg-white h-auto w-max m-4 rounded-xl shadow-md">

                <div class="container p-5 flex justify-center">
                    <img class="w-40 max-w-md mx-3 my-5 rounded-xl shadow-sm sm:w-60" src="<?=PATH?>assets/img/perfil.jpg" alt="">
                </div>

                <div class="text-center sm:px-4 px-8 mb-5">

                    <button type="submit" class="">
                        <a class="primary_btn ">Añade una imagen<i class='bx bx-user-plus px-1'></i></a>
                    </button>
                </div>
        </div>

    </section>


</body>

</html>
