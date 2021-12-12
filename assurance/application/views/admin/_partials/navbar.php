        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <a class="navbar-brand" href="<?php echo site_url('dashboard') ?>">

                <img src="<?= base_url('assets/img/raja-m.png');?>" alt="RAJA" height="42">

            </a>

            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

<div ><marquee class="py-3">
        <a href="#" style="color: white;" >SELAMAT DATANG DI WEBSITE RAJA CREATE BY TELKOM AKSES YOGYAKARTA ( ADHITYA, RIZKY, AHMAD, SASONGKO )</a>
</marquee></div>

            <!-- Navbar Search-->

            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color:white">
                <?php echo $this->session->userdata('name');?>
            </form>

            <!-- Navbar-->

            <ul class="navbar-nav ml-auto ml-md-0">

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <!-- <a class="dropdown-item" href="#">Settings</a> -->

                        <!-- <a class="dropdown-item" href="#">Activity Log</a> -->

                        <!-- <div class="dropdown-divider"></div> -->

                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"  data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>

                    </div>

                </li>

            </ul>

        </nav>