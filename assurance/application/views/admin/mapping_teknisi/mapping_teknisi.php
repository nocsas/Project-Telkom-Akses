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
                        <h1 class="mt-4">Mapping Teknisi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Mapping Teknisi</li>
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
							        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								        <thead class="thead-light">
									        <tr>
												<th>No</th>
										        <th>Crew</th>
										        <th>Nama</th>
										        <th>Sto</th>
												<th>Sektor</th>
										        <th>Jadwal</th>
										        <th>Action</th>
									        </tr>
								        </thead>
								        <tbody>
									        <?php $num = 1; foreach ($crew as $crew): ?>
									        <tr>
										        <td width="50">
													<?php echo $num++ ?>
												</td>
										        <td>
											        <?php echo $crew->crew ?>
										        </td>
										        <td>
											        <?php echo $crew->nama ?>
										        </td>
										        <td>
											        <?php echo $crew->sto ?>
										        </td>
										        <td>
											        <?php echo $crew->sektor ?>
										        </td>
										        <td>
											        <?php echo $crew->jadwal ?>
										        </td>
										        <td width="250">
											        <a href="<?php echo site_url('crew2/edit/'.$crew->id) ?>"
											        class="btn btn-small"><i class="fas fa-edit"></i>Edit</a>
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