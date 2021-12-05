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

						<h1 class="mt-4">Manajemen Crew</h1>

                        <ol class="breadcrumb mb-4">

							<li class="breadcrumb-item active">Crew</li>

                            <li class="breadcrumb-item active">Edit Crew</li>

                        </ol>

						

                        <?php if ($this->session->flashdata('success_update')): ?>

				        <div class="alert alert-success" role="alert">

					        <?php echo $this->session->flashdata('success_update'); ?>

				        </div>

				        <?php endif; ?>



				        <!-- Card  -->

				        <div class="card mb-4">

					        <div class="card-header">

                                <a href="<?php echo site_url('crew') ?>"><i class="fas fa-arrow-left"></i> Back</a>

					    </div>

					    <div class="card-body">



					        <form action="" method="post" enctype="multipart/form-data">

						        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 

							    oleh controller tempat vuew ini digunakan. Yakni index.php/admin/divisi/edit/ID --->



                                    <div class="form-group">

										<input type="hidden" name="id" value="<?php echo $crew->id?>" />

							        </div>



							        <div class="form-group">

								        <label for="crew">Crew</label>

										<input type="hidden" name="crew" value="<?php echo $crew->crew?>" />

								        <input class="form-control <?php echo form_error('crew') ? 'is-invalid':'' ?>"

								        type="text" name="crew" placeholder="Crew" disabled value="<?php echo $crew->crew ?>" />

							        </div>



							        <div class="form-group">

								        <label for="nama">Nama</label>

								        <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"

								         type="text" name="nama" min="0" placeholder="nama" value="<?php echo $crew->nama ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('nama') ?>

								        </div>

							        </div>



                                    <div class="form-group">

								        <label for="sto">Sto</label>

                                        <select class="form-control" name="sto" >

                                            <option value="<?php echo $crew->sto ?>"><?php echo $crew->sto ?></option>

											<option value=""></option>

                                            <option value="PKM">PKM</option>

                                            <option value="KLS">KLS</option>

                                            <option value="GOD">GOD</option>

                                            <option value="SMN">SMN</option>

                                            <option value="KEN">KEN</option>

                                            <option value="BBS">BBS</option>

                                            <option value="KBU">KBU</option>

                                            <option value="KGD">KGD</option>

                                            <option value="PGR">PGR</option>

                                            <option value="BTL">BTL</option>

                                            <option value="WNS">WNS</option>

                                            <option value="WTS">WTS</option>

                  				        </select>

							        </div>



                                    <div class="form-group">

								        <label for="sektor">Sektor</label>

                                        <select class="form-control" name="sektor" >

                                            <option value="<?php echo $crew->sektor ?>"><?php echo $crew->sektor ?></option>

											<option value=""></option>

                                            <option value="PKM">PKM</option>

                                            <option value="KLS">KLS</option>

                                            <option value="GOD">GOD</option>

                                            <option value="SMN">SMN</option>

                                            <option value="KEN">KEN</option>

                                            <option value="BBS">BBS</option>

                                            <option value="KBU">KBU</option>

                                            <option value="KGD">KGD</option>

                                            <option value="PGR">PGR</option>

                                            <option value="BTL">BTL</option>

                                            <option value="WNS">WNS</option>

                                            <option value="WTS">WTS</option>

                  				        </select>

							        </div>



                                    <div class="form-group">

								        <label for="jadwal">Jadwal</label>

                                        <select class="form-control" name="jadwal" >

                                            <option value="<?php echo $crew->jadwal ?>"><?php echo $crew->jadwal ?></option>

											<option value="LIBUR">LIBUR</option>

                                            <option value="MASUK">MASUK</option>

                  				        </select>

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