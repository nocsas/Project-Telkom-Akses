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
                        <h2>PERFORMANSI TEKNISI</h2>
                        <small>Progres Tiket Per Teknisi</small>
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

					        </div>

					        <div class="card-body">

						        <div class="table-responsive">

							        <table  class="table m-table table-sm table-striped table-bordered  table-hover"  id="dataTable" width="100%" cellspacing="0">

								        <thead class="thead-dark">

									        <tr>

												<th>No</th>

										        <th>Nama</th>

										        <th>Sto</th>

										        <th>Sektor</th>

										        <th>Order</th>

												<th>Pending</th>

										        <th>Closed</th>

									        </tr>

								        </thead>

								        <tbody>

									        <?php $num = 1; foreach ($crew as $row):

												$nama = $row['nama'];

												$sto = $row['sto'];

												$sektor = $row['sektor'];

												$order = $row['order'];

												$pending = $row['pending'];

												$closed = $row['closed'];
												 ?>

									        <tr>

										        <td width="50">

													<?php echo $num++ ?>

												</td>

										        <td>

											        <?php echo htmlentities($nama);?>

										        </td>

										        <td>

													<?php echo htmlentities($sto);?>

										        </td>

										        <td>

													<?php echo htmlentities($sektor);?>

										        </td>

										        <td>

													<?php echo htmlentities($order);?>

										        </td>

										        <td>

													<?php echo htmlentities($pending);?>

										        </td>

										        <td>

													<?php echo htmlentities($closed);?>

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