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
        <h1 class="">Personal activo</h1>
    </div>
    
    <div class="py-3">
        <p>Administrador / <span class="text-blue-800">Personal Activo</span> </p>
    </div>
    
    <div class="flex justify-center sm:justify-start py-3">
        <a href="<?=PATH?>" type="" class="primary_btn">Nuevo Personal <i class='bx bx-user-plus px-1'></i></a>
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
                        <td class="py-4 px-6 text-center">
                            <a href="#" class="text-blue-600 hover:underline">Edit</a>
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