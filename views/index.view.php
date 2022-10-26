<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Real Brothers</title>
</head>
<body class="bg-gray-200 px-0 font-bold">
    <section class="w-full h-screen flex justify-center items-center flex-col">

        <div class="text-center pt-10">
            <h2 class="text-3xl">Sistema de Registro</h2>
            <h2 class="text-xl sm:mx-10 mx-5">REAL BROTHERS SECURITY S.A DE C.V</h2>
        </div>

        <form method="POST" action="" class="w-full sm:p-10 p-5 flex justify-center items-center ">
            
            <div class="p-5 sm:w-2/5 md:w-2/5 max-w-3xl bg-white rounded-lg space-y-6">
                <div>
                    <h1 class="text-center text-2xl text-gray-700">Completa los campos</h1>
                </div>

                <div class="mb-6">
                    <label id="user" class="block mb-2 text-base text-gray-900">Usuario <?php require "components/require.php";?></label>

                    <input type="user" id="user" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Usuario">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-base text-gray-900">Contraseña <?php require "components/require.php";?></label>

                    <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="**********">
                </div>
                
                <input name="login" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full px-5 py-2.5 text-center" value="Iniciar session">

                <!-- lerts  -->
                <div>
                    <?php
                        require "./config/conexion.php";               
                        require "./auth/authentication.php";               
                    ?>
                </div>
                

            </div>  
        </form>
    </section>
</body>
</html>