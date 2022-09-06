<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-200 font-bold" id="body-pd">

    <div class="text-center pb-1 pt-20 m-4">
        <h1 class="text-4xl">Actualizar usuario</h1>
    </div>

    <div class="py-3 pt-0">
        <p>Administrador / Personal / <span class="active-text">Perfil de usuario</span> </p>
    </div>
    <div class="flex sm:justify-between justify-center flex-wrap">    
        <a href="<?=PATH?>admin/personal/" type="" class="cancel_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
            
        <a href="<?=PATH?>" type="" class="primary_btn my-4 m-3">Actualizar Perfil <i class='bx bx-user-plus px-1'></i></a>
    </div>






    <section class="w-full h-auto py-1 flex flex-wrap justify-center ">

        <div class="bg-white w-max h-max m-4 rounded-xl shadow-md order-1">
                <div class="container p-5 w-64 h-64 mx-4 mb-4">
                    <img class="object-cover w-full h-full my-5 rounded-xl shadow-sm" src="<?=PATH?>assets/img/perfil.jpg" alt="">
                </div>
                <div class="text-center sm:px-4 px-8 pb-8">
                    <p class="text-xl font-black">Oscar Ordoñez</p>
                    <p>cod:01</p>
                    <p>7777-7777</p>
                </div>
                <!-- btn  -->
                <div class="flex justify-center sm:hidden"> 
                    <a href="<?=PATH?>" type="" class="primary_btn mb-3">Actualizar Foto <i class='bx bx-user-plus px-1'></i></a>
                </div>
        </div>

        <div class="bg-white w-full sm:w-2/3 max-w-4xl m-4 rounded-xl shadow-md p-8 ">
            <div>
                <h1 class="active-text text-2xl mb-2 ">Datos del perfil</h1>
            </div>
            
            <form class="">
                <div class="grid gap-5 mb-6 md:grid-cols-2">
                    <div class="">
                        <label for="first_name"class="text-label">Nombres</label>
                        <input type="text" id="first_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label for="last_name" class="text-label mx-5">Apellidos</label>
                        <input type="text" id="last_name" class="input-space " placeholder="" required="">
                    </div>
                    <div>
                    <label for="countries" class="text-label">Proyecto</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Proyecto activo</option>
                            <option value="US">Movical</option>
                        </select>  
                    </div>  
                    <div>
                        <label for="phone" class="text-label">Telefono</label>
                        <input type="tel" id="phone" class="input-space" placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                    </div>
                    <div>
                        <label for="first_name" class="text-label">Dui</label>
                        <input type="text" id="first_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label for="last_name" class="text-label">Nit</label>
                        <input type="text" id="last_name" class="input-space" placeholder="" required="">
                    </div>
                    <div>
                        <label for="Proyecto" class="text-label">Nº Licencia</label>
                        <input type="url" id="website" class="input-space " placeholder="" required="">
                    </div>
                    <div>
                        <label for="Proyecto" class="text-label">Licencia de veiculo</label>
                        <input type="url" id="website" class="input-space" placeholder="" required="">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>