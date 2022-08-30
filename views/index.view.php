<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Real Brothers </title>
</head>

<body class=" bg-gray-200 font-bold px-0">

        <div class="text-center py-10">
            <h2 class="text-3xl">Sistema de Registro</h2>
            <h2 class="text-xl pb-5 sm:mx-10 mx-5">REAL BROTHERS SECURITY S.A DE C.V</h2>
        </div>

<section class="flex justify-center">

    <div class="sm:mx-5 mx-5 p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 md:p-8 font-bold">
        <form class="space-y-6 text-black" action="#">
            <h5 class="text-3xl mx-5 text-center text-black">Inicio de Sesión</h5>
            <div>
                <label for="name" class="block mb-2 text-2xl">Nombre de usuario<span class="text-red-500">*</span></label>
                <input type="name" name="email" id="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tu nombre" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-2xl">Contraseña<span class="text-red-500">*</span></label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Entrar</button>
        </form> 
    </div>
</section>

<a class="m-8 text-white bg-blue-700 p-5 text-lg" href="<?=PATH?>admin/"> example admin</a>

    
</body>

</html>