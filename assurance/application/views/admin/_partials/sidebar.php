                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">



                    <div class="sb-sidenav-menu">



                        <div class="nav">



                        



                            <div class="sb-sidenav-menu-heading">Menu</div>

                                



                            <!-- QUERY MENU-->

                            <?php

                            $role_id = $this->session->userdata('role_id');

                            

                            $queryMenu = "SELECT `user_menu`.`id`, `menu` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu`.`role_id` = $role_id ORDER BY `user_access_menu`.`menu_id` ASC" ;



                            $menu = $this->db->query($queryMenu)->result_array();

                            ?>



                            <!-- LOOPING MENU -->

                            <?php foreach ($menu as $m) : ?>

                            <!-- <div class="sb-sidenav-menu-heading">

                                <?= $m['menu']; ?>

                            </div> -->

                            <!-- SIAPKAN SUB-MENU SESUAI MENU-->

                            <?php 

                            $menuId = $m['id'];

                                $querySubMenu = "SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id` WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1";

                            

                            $subMenu = $this->db->query($querySubMenu)->result_array();

                            ?>

                                <?php foreach($subMenu as $sm) : ?>

                                    <a class="nav-link" href="<?php echo site_url($sm['url']); ?>">



                                    <div class="sb-nav-link-icon"><i class="<?= $sm['icon']; ?>"></i></div>

                                    <?= $sm['title'] ;?>



                                    </a>

                                <?php endforeach ?>



                            <?php endforeach; ?>



                            <!-- <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Dashboard



                            </a>



                            <a class="nav-link" href="<?php echo site_url('tiket'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Tiket



                            </a>



                            <div class="sb-sidenav-menu-heading">Team Leader</div>



                            <a class="nav-link" href="<?php echo site_url('nossa'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Kawal Tiket



                            </a>



                            <a class="nav-link" href="<?php echo site_url('performansi'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Performansi Teknisi



                            </a>



                            <a class="nav-link" href="<?php echo site_url('crew2'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Mapping Teknisi



                            </a>



                            <div class="sb-sidenav-menu-heading">Helpdesk</div>



                            <a class="nav-link" href="<?php echo site_url('tiketmatch'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Tiket Not Match



                            </a>



                            <a class="nav-link" href="<?php echo site_url('teknisimatch'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Teknisi Not Match



                            </a>



                            <a class="nav-link" href="<?php echo site_url('ImportTiket'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Import Tiket



                            </a>



                            <div class="sb-sidenav-menu-heading">Administrator</div>



                            <a class="nav-link" href="<?php echo site_url('crew'); ?>">



                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>



                                Data Crew



                            </a> -->



                            



                        </div>



                    </div>



                    <div class="sb-sidenav-footer">



                        <div class="small">Logged in as : <b><?= $loginas['role']; ?></b></div>

                       <span class="mr-2 d-none d-lg-inline text-gray-500"> </span>




                    </div>



                </nav>