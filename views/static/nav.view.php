<div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-leaf nav__logo-icon'></i>
                       
                        <span class="nav__logo-name">Real Brothers</span>
                    </a>

                    <div class="nav__list">
                        <!-- <a href="<?=PATH?>admin/" class="nav__link  ">
                        <i class='bx bx-grid-alt nav__icon ' ></i> Solucionar error del modal en esta vista
                            <span class="nav__name">Administrador</span>
                        </a> -->

                        <a href="<?=PATH?>admin/personal/" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Personal</span>
                        </a>
                        

                        <a href="<?=PATH?>admin/proyectos/" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">Proyectos</span>
                        </a>

                        <a href="<?=PATH?>admin/armament/" class="nav__link">
                         
                            <i class='bx bx-collection nav__icon'></i>
                            <span class="nav__name ">Armamento</span>
                        </a>
                    </div>
                </div>
                
                    <a href="<?=PATH?>components/longout.php" class="modal-open nav__link">
                        <i class='bx bx-log-out nav__icon' ></i>
                        <div class="nav__name">Salir</div>
                    </a>
                    <!-- modal de session -->
                    <?php
                        require '../../components/longout.php';
                    ?>
                
            </nav>
        </div>

