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
                        <h2>MANAJEMEN USER</h2>
                        <small>0 = Administrator <br>1 = Site Manager <br>2 = Team Leader <br>3 = Helpdesk <br>4 = SM/TL HD <br>5 = View</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


                        </ol>



						<?php if ($this->session->flashdata('success_delete')): ?>

				        <div class="alert alert-success" role="alert">

					        <?php echo $this->session->flashdata('success_delete'); ?>

				        </div>

				        <?php endif; ?>



                        <!-- DataTables -->

				        <div class="card mb-4">

                            <div class="card-header">

						        <!--<a href="<?php echo site_url('registration') ?>"><i class="fas fa-plus"></i> Add New</a>-->

					        </div>

					        <div class="card-body">

						        <div class="table-responsive">

							        <table  class="table m-table table-sm table-striped table-bordered  table-hover"  id="dataTable" width="100%" cellspacing="0">

								        <thead class="thead-dark">

									        <tr>

												<th>No</th>

										        <th>Nama</th>

										        <th>Username</th>

										        <th>Area</th>

												<th>Sektor</th>

												<th>Role Id</th>

										        <th>Action</th>

									        </tr>

								        </thead>

								        <tbody>

									        <?php $num = 1; foreach ($userapp as $userapp): ?>

									        <tr>

										        <td width="50">

													<?php echo $num++ ?>

												</td>

										        <td>

											        <?php echo $userapp->name ?>

										        </td>

										        <td>

											        <?php echo $userapp->username ?>

										        </td>

										        <td>

											        <?php echo $userapp->area ?>

										        </td>

										        <td>

											        <?php echo $userapp->sektor ?>

										        </td>

										        <td>

											        <?php echo $userapp->role_id ?>

										        </td>

										        <td width="250">

											        <!-- <a href="<?php echo site_url('crew/edit/'.$userapp->id) ?>"

											        class="btn btn-small"><i class="fas fa-edit"></i>Edit</a> -->

											        <a onclick="deleteConfirm('<?php echo site_url('user/delete/'.$userapp->id) ?>')"

    												href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>

										        </td>

									        </tr>

									        <?php endforeach; ?>

								        </tbody>

							        </table>

						        </div>

					        </div>

				        </div>

                    </div>

                </main>

                <footer class="py-4 bg-light mt-auto">

                    <?php $this->load->view("admin/_partials/footer.php") ?>

                </footer>

            </div>

        </div>

        <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>

		<script>

			function deleteConfirm(url){

				$('#btn-delete').attr('href', url);

				$('#deleteModal').modal();

			}

		</script>

    </body>

</html>