<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Real Brothers</title>
</head>

<body class="body_background px-0 font-bold">
    <section class="w-full h-screen flex justify-center items-center flex-col">

                <div class="text-center pt-10 text-white">
                    <h2 class="text-4xl py-1">Sistema de Registro</h2>
                    <h2 class="text-xl sm:mx-10 mx-5">REAL BROTHERS SECURITY S.A DE C.V</h2>
                </div>

                <form method="POST" action="" class="w-full sm:p-10 p-5 flex justify-center items-center px-10">

                    <div class=" sm:w-2/4 md:w-2/5 max-w-2xl bg-white rounded-2xl space-y-6 p-10 shadow-md">
                        <div class="mb-6">
                            <label id="user" class="block mb-2 text-base text-gray-900">Usuario <?php require "components/require.php"; ?></label>

                            <input type="user" id="user" name="user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-500 block w-full p-2.5" placeholder="Usuario">
                        </div>
                        <!-- <div class="mb-6">
                            <label for="password" class="block mb-2 text-base text-gray-900">Contraseña</label>
                            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring focus:ring-blue-500 block w-full p-2.5 " placeholder="**********">
                        </div> -->

                        <div class="py-2" x-data="{ show: true }">
                            <label class="text-label">Contraseña <?php require "components/require.php"; ?></label>
                            
                            <div class="relative">

                            <input name="password" :type="show ? 'password' : 'text'" class="input-space">

                            <div class="absolute inset-y-0 right-0 flex items-center text-sm leading-5 ">

                                <i class='bx bx-low-vision text-gray-700 icon-show'fill="none" @click="show = !show"
                                :class="{'hidden': !show, 'block':show }" ></i>
                        
                                <i class='bx bx bxs-low-vision text-blue-600 icon-show' fill="none" @click="show = !show"
                                :class="{'block': !show, 'hidden':show }" ></i>
                            </div>
                            </div>
                        </div>

                        <input name="login" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 transition-opacity focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full px-5 py-2.5 text-center" value="Inicia sesión">

                        <!-- lerts  -->
                        <div>
                            <?php
                                require "./auth/authentication.php";
                            ?>
                        </div>


                    </div>
                </form>
    </section>

</body>
</html>