        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>">

                <img src="<?= base_url('assets/img/raja-logo-white-1.png');?>" alt="RAJA" height="42">

            </a>

            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            
            
               <!--  <div class="navbar-nav w-100">-->
                
            	<div class="mx-auto order-0">
                    <marquee >
                        <a style="color: white;"><b>Dear Rekan... Telah ditambahkan menu MANAJEMEN LEADER untuk akses user TL dan SM.. Silahkan bagi TL yang terjadwal masuk untuk mengisikan nama disetiap STO yang dikawal.. Terimakasih :)</a>
                    </marquee>
                </div>

            <!-- Navbar Search-->

            <form class="nav navbar-nav ml-auto justify-content-end" style="color:white; width:20%; text-align:right;">
            <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color:white">-->
                <b><?php echo $this->session->userdata('name');?></b>
            </form>

            <!-- Navbar-->

            <ul class="navbar-nav ml-auto ml-md-0">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <!-- <a class="dropdown-item" href="#">Settings</a> -->

                        <!-- <a class="dropdown-item" href="#">Activity Log</a> -->

                        <!-- <div class="dropdown-divider"></div> -->

                        <!-- data-toggle="modal" data-target="#logoutModal"  -->

                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"     >
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>

                    </div>

                </li>

            </ul>

        </nav>