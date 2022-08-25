<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Real Brothers </title>
</head>

<body class=" bg-gray-900 ">

    <section class="text-gray-400 body-font relative ">
        <div class="container px-5 sm:py-24 py-20 mx-auto ">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4 text-white">Inicia Sesión</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-xl">Sistema de asistencia.</p>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-md">Real brothers Security.</p>
            </div>

            <div class="lg:w-1/3 md:w-2/3 mx-auto bg-gray-800 bg-opacity-50 rounded-lg ">
                <div class="flex flex-wrap columns-2 -m-2">

                    <div class="p-2 w-full px-10 pt-10">
                        <div class="relative">
                            <label for="name" class="leading-7 text-base text-white">Usuario <span class="text-red-600">*</span> </label>
                            <input type="text" id="name" name="name" class="w-full my-2 bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Nombre de usuario">
                        </div>
                    </div>

                    <div class="p-2 w-full px-10">
                        <div class="relative">
                            <label for="password" class="leading-7 text-base text-white">Contraseña <span class="text-red-600">*</span> </label>
                            <input type="password" id="password" name="password" class="w-full my-2 bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Contraseña asignada">
                        </div>
                    </div>

                    <div class="p-2 pb-12 w-full">
                        <a type="button" class="flex justify-center items-center w-32 mx-auto font-bold text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="<?= PATH ?>pages/ingreso.php">Ingresar <i class='bx bx-run'></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>

</html>