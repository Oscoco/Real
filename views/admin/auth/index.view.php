<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Usuario | Real Brothers</title>
</head>
<body id="body-pd">

    <div class="text-center pb-1 pt-20 m-4">
        <h1 class="text-4xl">Mi usuario</h1>
    </div>

    <div class="pb-2 flex flex-col  sm:items-start md:items-start items-center">
        <p>Administrador / <span class="active-text">Mi usuario</span> </p>
        <a href="<?=PATH?>admin/auth/Users.php" type="" class="primary_btn my-4 m-3"><i class='bx bx-arrow-back px-1'></i>Regresar</a>
    </div>

    <section class="w-full h-auto flex flex-wrap justify-center">

        <div class="bg-white w-max m-4 rounded-xl shadow-md flex flex-col justify-center">
                <div class="container p-5">
                    <img class="w-40 max-w-md mx-3 mt-5 rounded-xl shadow-sm sm:w-60 sm:mx-8 " src="<?=PATH?>assets/img/perfil.jpg" alt="">
                </div>
                <div class="text-center sm:px-4 px-8 pb-8">
                    <p class="text-xl font-black">
                        <?php  echo $_SESSION["name"]." ".$_SESSION["lastname"];  ?>
                    </p>
                    <p class="text-white text-md mt-1 bg-blue-700 p-2 rounded-lg">
                        <?php echo $_SESSION["rolid"]?>
                    </p>
                </div>
        </div>

        <div class="bg-white m-4 rounded-xl shadow-md md:w-2/3 w-full px-4 font-bold">
            <h2 class="p-5 text-2xl text-center active-text">Datos del administrador</h2>
            <form class="">
                <div class="grid gap-6 mb-6 md:grid-cols-2 px-8">
                    <div>
                        <label for="first_name" class="text-label">Nombre</label>
                        <input type="text" id="first_name" class="input-space disabled-bg" value="<?php print $_SESSION["name"] ?>"  disabled>
                    </div>
                    <div>
                        <label for="last_name" class="text-label ">Apellidos</label>
                        <input type="text" id="last_name" class="input-space disabled-bg" value="<?php print $_SESSION["lastname"] ?>"  disabled>
                    </div>
                    <div>
                        <label for="phone" class="text-label ">Numero de telefono</label>
                        <input for="disabled_filled" type="phone" id="" class="input-space disabled-bg" value="<?php print $_SESSION["phone"] ?>" disabled>
                    </div>
                    <div>
                        <label for="twophone" class="text-label ">Numero de telefono (2)</label>
                        <input type="twophone" class="input-space disabled-bg" value="<?php print $_SESSION["twophone"] ?>" disabled>
                    </div>
                    <div>
                        <label for="" class="text-label ">Correo electronico</label>
                        <input type="email" id="email" class="input-space disabled-bg" value="<?php print $_SESSION["email"] ?>"  disabled>
                    </div>
                    <div>
                        <label for="" class="text-label ">Dui</label>
                        <input type="dui" id="dui" class="input-space disabled-bg" value="<?php print $_SESSION["dui"] ?>" disabled>
                    </div>
                </div>

            </form>
        </div>
       
        
    </section>
</body>
</html>