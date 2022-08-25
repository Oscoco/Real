<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia | Real Brothers </title>
</head>
<body class="bg-gray-200 font-bold">

<header class="text-gray-600 bg-yellow-500 body-font">

  <div class="container mx-auto flex justify-around p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center flex-wrap text-gray-900 mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl font-bold">Real Brothers Security</span>
    </a>

    <div class="">
        <a type="button" class="flex justify-center items-center w-24 mx-auto text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg" href="<?= PATH ?>index.php">Salir <i class='bx bx-right-arrow-alt'></i></a>
    </div>

  </div>
</header>



<section class="text-gray-400 body-font relative">
        <div class="container px-5 sm:py-14 py-8 mx-auto ">
            <div class="flex flex-col text-center w-full mb-12 text-black">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4 ">Registro Diario</h1>
                
                <p class="lg:w-2/3 mx-auto leading-relaxed text-xl">Recuerda solo escribir <span class=" text-red-500">"Confirmo"</span>  
                    Cuando estés en la posición asi como donde te encuentras.</p>
                    <p><span class="text-red-600">*</span>Ejemplo: Movical x lugar<span class="text-red-600">*</span></p>
            </div>

            <div class="lg:w-1/3 md:w-2/3 mx-auto bg-white bg-opacity-50 rounded-lg ">
                <div class="flex flex-wrap columns-2 -m-2">

                    <div class="p-2 w-full px-10 pt-10">
                        <div class="relative">
                            <label for="name" class="leading-7 text-base text-black">Confirmacion<span class="text-red-600">*</span> </label>
                            <input type="text" id="name" name="name" class="w-full my-2  bg-opacity-40 rounded border focus:border-yellow-500  text-base outline-none text-black py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Confirmo Elemento" required>
                        </div>
                    </div>

                    <div class="p-2 w-full px-10 ">
                        <div class="relative">
                            <label for="name" class="leading-7 text-base text-black">Posición<span class="text-red-600">*</span> </label>
                            <input type="text" id="name" name="name" class="w-full my-2 bg-opacity-40 rounded border focus:border-yellow-500  text-base outline-none text-black py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="En posición" require="">
                        </div>
                    </div>

                    <div class="p-2 pb-12 w-full">
                        <a type="button" class="flex justify-center items-center w-32 mx-auto text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg" href="<?= PATH ?>pages/ingreso.php">Enviar <i class='bx bx-run text-white'></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>