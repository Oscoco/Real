<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal | Real Brothers</title>
</head>
<body class="bg-gray-200" id="body-pd">

    
    <div class="text-center py-5 pt-20 text-4xl ">
        <h1 class="mt-4">Personal Activo</h1>
    </div>
    
    <div class="py-3">
        <p>Administrador / <span class="text-blue-800">Personal Activo</span> </p>
    </div>
    
    <div class="flex py-3 sm:justify-between justify-center items-center flex-wrap">

        <a href="<?=PATH?>admin/personal/new.personal.php" type="" class="primary_btn my-4">Nuevo Personal <i class='bx bx-user-plus px-1'></i></a>

            <form class="flex items-center my-4 mx-2">   
                <label for="simple-search" class="sr-only">Buscar</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class='bx bx-search w-5 h-5 text-gray-500' ></i>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Buscar" required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <i class='bx bx-search text-base' ></i>
                    <span class="sr-only">Search</span>
                </button>
            </form>

    </div>
    
    <section>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-base text-left text-gray-500">
                <thead class="text-base text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th scope="col" class="py-3 px-5 border-r w-max text-center">
                            N°
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombre completo
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Codigo
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Proyecto
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b text-black font-bold hover:bg-gray-200">
                        <th scope="col" class="py-3 px-5 border-r w-max text-center">
                            1
                        </th>
                        <th scope="row" class="py-4 px-6 whitespace-nowrap ">
                            Name example
                        </th>
                        <td class="py-4 px-6">
                            Sliver
                        </td>
                        <td class="py-4 px-6">
                            MOVIKAL CASA MATRIZ   
                        </td>
                        <td class="py-4 bg-gray-50">
                        <div class='flex items-center justify-center'>
                            <button class="btn_update">
                            <a href="<?=PATH?>admin/personal/actualizar.php" class='bx bx-edit' ></a>
                            </button>
                            <button class="mx-2 btn_trash" data-modal-toggle="popup-modal">
                            <i class='bx bxs-trash' ></i>
                            </button>
                        </div>
                    </td>
                    </tr>
                    <tr class="bg-white border-b text-black hover:bg-gray-200">
                        <th scope="col" class="py-3 px-5 border-r w-max text-center">
                            2
                        </th>
                        <th scope="row" class="py-4 px-6 whitespace-nowrap ">
                            Name example
                        </th>
                        <td class="py-4 px-6">
                            White
                        </td>
                        <td class="py-4 px-6">
                            MOVIKAL CASA MATRIZ   
                        </td>
                        <td class="py-4 px-6 text-center">
                            <a href="#" class="font-medium text-blue-600 ">Edit</a>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>