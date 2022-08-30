<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armamento xd</title>
</head>
<body class="bg-gray-200" id="body-pd">
    <div class="text-center py-5 pt-20 m-4">
        <h1 class="text-4xl">Registro de Armamento</h1>
    </div>

    <div class="py-3">
        <p>Administrador /  <span class="text-blue-800">Armamento</span> </p>
    </div>

    <div class="flex py-3 sm:justify-between justify-center items-center flex-wrap">

        <a href="<?=PATH?>admin/personal/new.personal.php" type="" class="primary_btn my-4">Nuevo Registro <i class='bx bx-user-plus px-1'></i></a>

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
</body>
</html>