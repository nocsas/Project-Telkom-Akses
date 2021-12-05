<!DOCTYPE html>

<html lang="en">

    <head>
    <title>404 Error</title>

        <?php $this->load->view("admin/_partials/head.php") ?>

    </head>

    <body class="sb-nav-fixed">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                <?php $this->load->view("admin/_partials/sidebar.php") ?>

            </div>

            <div id="layoutSidenav_content">
            <!--<body>-->
                <div id="layoutError">
                    <div id="layoutError_content">
                        <main>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center mt-4">
                                            <img class="mb-4 img-error" src="<?= base_url('assets/');?>img/error-404-monochrome.svg" />
                                            <p class="lead">This requested URL was not found on this server.</p>
                                            <!-- <a href="index.html">
                                                <i class="fas fa-arrow-left me-1"></i>
                                                Return to Dashboard
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    
                </div>
                
    
                <footer class="py-4 bg-light mt-auto">
                    <?php $this->load->view("admin/_partials/footer.php"); ?>
                </footer>

            </div>

        </div>

        <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>


    </body>

</html>