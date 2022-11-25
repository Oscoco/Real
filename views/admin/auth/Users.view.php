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
            <h1 class="text-4xl">Nuevo administrador</h1>
        </div>

        <div class="py-3">
            <p>Administrador / <span class="active-text">Nuevo administrador</span> </p>
        </div>

    </section>

    <section>
        <a href="<?= PATH ?>admin/auth/new.user.php" type="" class="primary_btn my-4">Nuevo administrador <i class='bx bx-user-plus px-1'></i></a>
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
                            Apellido
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
                    <?php
                    require '../../config/conexion.php';
                    $sql = $conexion->query("select * from usuario");

                    while ($data = $sql->fetch_object()) { ?>

                        <tr class="bg-white border-b text-black font-bold hover:bg-gray-200">
                            <th scope="col" class="py-3 px-5 border-r w-max text-center">
                                <?= $data->id ?>
                            </th>
                            <th scope="row" class="py-4 px-6 whitespace-nowrap ">
                                <?= $data->name ?>
                            </th>
                            <th scope="row" class="py-4 px-6 whitespace-nowrap ">
                                <?= $data->lastname ?>
                            </th>
                            <td class="py-4 px-6">
                                <?= $data->rolid ?>
                       
                            </td>
                            <td class="py-4 px-6">
                                <?= $data->phone ?>
                            </td>
                            <td class="py-4 bg-gray-50">
                                <div class='flex items-center justify-center'>

                                    <button type="submit">
                                        <a href="" class='bx bx-edit btn_update'></a>
                                    </button>

                                    <a href="<?= PATH ?>components/deteleaccount.php" class="modal-open-delete">
                                        <p class="mx-2 btn_trash"><i class='bx bxs-trash'></i></p>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
              
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>