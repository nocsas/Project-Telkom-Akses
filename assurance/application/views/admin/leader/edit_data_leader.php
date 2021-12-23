<!DOCTYPE html>

<html lang="en">

    <head>

        <?php $this->load->view("admin/_partials/head.php") ?>

    </head>

    <body class="sb-nav-fixed">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                <?php $this->load->view("admin/_partials/sidebar.php") ?>

            </div>

            <div id="layoutSidenav_content">

                <main>

                    <div class="container-fluid">

						<h1 class="mt-4"></h1>

                        <ol class="breadcrumb mb-4">

    <div class="col-xl-12 col-lg-12 col-md-12 col-12 pb-2 ">
        <div class="statbox widget box box-shadow ">
            <div class="widget-header p-3 bggradasi">
                <div class="row ">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                        <h2>MANAJEMEN LEADER</h2>
                        <small>Edit Data Leader</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

                        </ol>

						

                        <?php if ($this->session->flashdata('success_update')): ?>

				        <div class="alert alert-success" role="alert">

					        <?php echo $this->session->flashdata('success_update'); ?>

				        </div>

				        <?php endif; ?>



				        <!-- Card  -->

				        <div class="card mb-4">

					        <div class="card-header">

                                <a href="<?php echo site_url('leader') ?>"><i class="fas fa-arrow-left"></i> Back</a>

					    </div>

					    <div class="card-body">



					        <form action="" method="post" enctype="multipart/form-data">

						        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 

							    oleh controller tempat vuew ini digunakan. Yakni index.php/admin/divisi/edit/ID --->



                                    <div class="form-group">

										<input type="hidden" name="id" value="<?php echo $leader->id?>" />

							        </div>



                                    <div class="form-group">

								        <label for="sto">Sto</label>

								        <input class="form-control <?php echo form_error('sektor') ? 'is-invalid':'' ?>"

								         type="hidden" name="sto" min="0" placeholder="sektor" value="<?php echo $leader->sto ?>" />

                                         <input class="form-control <?php echo form_error('sto') ? 'is-invalid':'' ?>"

								         type="text" name="sto" min="0" placeholder="sto" disabled value="<?php echo $leader->sto ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('sto') ?>

								        </div>

							        </div>



                                    <div class="form-group">

								        <label for="sektor">Sektor</label>

								        <input class="form-control <?php echo form_error('sektor') ? 'is-invalid':'' ?>"

								         type="hidden" name="sektor" min="0" placeholder="sektor" value="<?php echo $leader->sektor ?>" />

                                         <input class="form-control <?php echo form_error('sektor') ? 'is-invalid':'' ?>"

								         type="text" name="sektor" min="0" placeholder="sektor" disabled value="<?php echo $leader->sektor ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('sektor') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="nama">Nama</label>

								        <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"

								         type="text" name="nama" min="0" placeholder="nama" value="<?php echo $leader->nama ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('nama') ?>

								        </div>

							        </div>



							    <input class="btn btn-success" type="submit" name="btn" value="Save" />

						    </form>



					    </div>



					    <div class="card-footer small text-muted">

						    

					    </div>

				    </div>

                </main>

                <footer class="py-4 bg-light mt-auto">

                    <?php $this->load->view("admin/_partials/footer.php"); ?>

                </footer>

            </div>

        </div>

        <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>

    </body>

</html>