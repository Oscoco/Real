<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-200" id="body-pd">

    <div class="text-center pb-1 pt-20 m-4">
        <h1 class="text-4xl">Actualizar usuario</h1>
    </div>

    <div class="py-3 pt-0">
        <p>Administrador / Personal / <span class="active-text">Perfil de usuario</span> </p>
    </div>
    <div class="flex sm:justify-between justify-center flex-wrap">    
        <a href="<?=PATH?>admin/personal/new.personal.php" type="" class="cancel_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
            
        <a href="<?=PATH?>admin/personal/new.personal.php" type="" class="primary_btn my-4 m-3">Actualizar Perfil <i class='bx bx-user-plus px-1'></i></a>
    </div>

    <section class="w-full h-auto p-8 py-1 flex flex-wrap sm:justify-start sm:flex-nowrap justify-center">

        <div class="bg-white w-max h-max m-4 rounded-xl shadow-md">
                <div class="container p-5">
                    <img class="w-40 max-w-md mx-3 mt-5 rounded-xl shadow-sm sm:w-60 sm:mx-8 " src="<?=PATH?>assets/img/perfil.jpg" alt="">
                </div>
                <div class="text-center sm:px-4 px-8 pb-8">
                    <p class="text-xl font-black">Oscar Ordoñez</p>
                    <p>example@gmail.com</p>
                    <p>7777-7777</p>
                    <p class="active-text">Administrador</p>
                </div>
        </div>

        <div class="bg-white w-full m-4 rounded-xl shadow-md p-8">
            <div>
                <h1 class="active-text text-lg">Datos del perfil</h1>
            </div>
            
        <form>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">First name</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Last name</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">Company</label>
                    <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required="">
                </div>  
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone number</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                </div>
                <div>
                    <label for="Proyecto" class="block mb-2 text-sm font-medium text-gray-900 ">Proyecto</label>
                    <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required="">
                </div>
                <div>
                    <label for="Municion" class="block mb-2 text-sm font-medium text-gray-900 ">Municion</label>
                    <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required="">
            </div> 
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required="">
            </div> 
            <div class="mb-6">
                <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required="">
            </div> 
            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300" required="">
                </div>
                <label for="remember" class="ml-2 text-sm font-mediu">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
            </div>
        </form>

        </div>
    </section>
</body>
</html>