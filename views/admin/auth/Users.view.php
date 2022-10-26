<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores | Real Brothers</title>
</head>
<body id="body-pd"> 

    <section>
        <div class="text-center pb-1 pt-20 m-4">
            <h1 class="text-4xl">Nuevo usuario</h1>
        </div>

        <div class="py-3">
            <p>Administrador / <span class="active-text">Nuevo usuario</span> </p>
        </div> 

    </section>

    <section>
    <a href="<?=PATH?>admin/auth/new.user.php" type="" class="primary_btn my-4">Nuevo usuario <i class='bx bx-user-plus px-1'></i></a>
    </section>

    <section>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-base text-left text-gray-500">
                <thead class="text-base text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th scope="col" class="py-3 px-5 border-r w-max text-center">
                            N°
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nombres
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Rol de usuario
                        </th>
                        <th scope="col" class="py-3 px-6">
                            numero
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
                            <?php
                                echo $_SESSION["name"]." ". $_SESSION["lastname"];
                            ?>
                        </th>
                        <td class="py-4 px-6">
                            <?php
                                echo $_SESSION["categoryUser"];
                            ?>
                        </td>
                        <td class="py-4 px-6">
                        <?php
                                echo $_SESSION["phone"];
                            ?>
                        </td>
                        <td class="py-4 bg-gray-50">
                        <div class='flex items-center justify-center'>

                            <button type="submit">
                                <a href="<?=PATH?>admin/auth/new.user.php" class='bx bx-edit btn_update'></a>
                            </button>

                            <button type="submit"  data-modal-toggle="popup-modal">
                                <a href="" class="mx-2 btn_trash"> <i class='bx bxs-trash' ></i></a>
                            </button>
                        </div>
                    </td>
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>