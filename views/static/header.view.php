<header class="header" id="header">
    <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>

    <div id="dropdown-wrapper" class="bg-gray-200 w-max my-2 rounded hover:bg-gray-300 transition hover:transition" >
        <button onclick="toggleMenu()" class="w-max flex content-center items-center ">
            <p class="p-3 text-blue-800">Oscar Ordoñez</p>

            <div class="header__img">
                <img class="p-1  rounded-full" src="<?= PATH ?>assets/img/perfil.jpg" alt="">
            </div>
            
            <div class="p-2 pl-2  text-xl text-center text-blue-600 ">
                <i class='bx bx-chevron-down' ></i>
            </div>
        </button>

        <div id="menu" class="hidden absolute z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow ">
            <ul class="py-1 text-sm text-gray-700">
                <li>
                    <a href="<?=PATH?>admin/auth/" class="block py-2 px-4 hover:bg-gray-100">Nuevo usuario</a>
                </li>
                <li>
                    <a href="<?= PATH ?>" class=" flex content-center items-center py-2 px-4 hover:bg-red-500 hover:text-white p-1">Salir <i class='bx bx-log-out text-base p-1'></i></a>
                </li>
            </ul>
        </div>

    </div>
</header>