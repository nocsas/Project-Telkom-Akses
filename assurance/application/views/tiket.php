<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
        
        <meta http-equiv="refresh" content="60">
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
                        <h1 class="mt-4">Data Tiket</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tiket</li>
                        </ol>

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
										        <th>Incident</th>
										        <th>Workzone</th>
										        <th>Sektor</th>
												<th>Service Number</th>
												<th>Booking Date</th>
										        <th>Reported Date</th>
										        <th>Status</th>
										        <th>Jenis Tiket</th>
												<th>Teknisi nossa</th>
												<th>Real Teknisi</th>
												<th>Teknisi Myi</th>
										        <th>Kategori</th>
										        <th>Kendala</th>
										        <th>Status Tiket</th>
												<th>Status Manja</th>
												<th>Update Terakhir</th>
												<th>Keterangan</th>
									        </tr>
								        </thead>
								        <tbody>
                                        <?php $num = 1; foreach ($nossa as $nossa): ?>
									        <tr>
										        <td width="50">
													<?php echo $num++ ?>
												</td>
										        <td>
											        <?php echo $nossa->incident ?>
										        </td>
										        <td>
											        <?php echo $nossa->workzone ?>
										        </td>
										        <td>
											        <?php echo $nossa->sektor ?>
										        </td>
										        <td>
											        <?php echo $nossa->service_no ?>
										        </td>
										        <td>
											        <?php echo $nossa->booking_date ?>
										        </td>
										        <td>
											        <?php echo $nossa->reported_date ?>
										        </td>
										        <td>
											        <?php echo $nossa->status ?>
										        </td>
										        <td>
											        <?php echo $nossa->jenis_tiket ?>
										        </td>
										        <td>
											        <?php echo $nossa->teknisi_nossa ?>
										        </td>
										        <td>
											        <?php echo $nossa->real_teknisi ?>
										        </td>
										        <td>
											        <?php echo $nossa->teknisi_myi ?>
										        </td>
										        <td>
											        <?php echo $nossa->kategori ?>
										        </td>
										        <td>
											        <?php echo $nossa->kendala ?>
										        </td>
										        <td>
											        <?php echo $nossa->status_tiket ?>
										        </td>
										        <td>
											        <?php echo $nossa->status_manja ?>
										        </td>
										        <td>
											        <?php echo $nossa->date_update ?>
										        </td>
										        <td>
											        <?php echo $nossa->keterangan ?>
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