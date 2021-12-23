<!DOCTYPE html>

<html lang="en">

    <head>

        <?php $this->load->view("admin/_partials/head.php") ?>
        
        <style>
			th {
  				border: 1px solid black;
 				border-collapse: collapse;
				text-align:center;
				vertical-align: middle;
    
			}
		/* setting the text-align property to center*/
 			td.tengah{
 				/* padding: 5px; */
  				text-align:center;
				
			}
		</style>

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

									<table  class="table m-table table-sm table-striped table-bordered  table-hover"  id="dataTable" width="100%" cellspacing="0" style="text-align: center;">

										<thead class="thead-dark">

									        <tr>

												<th>No</th>

										        <th>Nama</th>

										        <th>Sto</th>

										        <th>Sektor</th>
										        
										        <!--<th>Order by Nossa</th>-->

										        <th>Order</th>

												<th>Pending</th>

										        <th>Closed</th>
										        
										        <th>Jumlah Tiket</th>

									        </tr>

								        </thead>

								        <tbody>

									        <?php $num = 1; foreach ($crew as $row):

												$nama = $row['nama'];

												$sto = $row['sto'];

												$sektor = $row['sektor'];
												
												// $order_nossa = $row['ordernossa'];

												$order = $row['order'];

												$pending = $row['pending'];

												$closed = $row['closed'];
												
												$jumlah_tiket = $row['jumlahtiket'];
												 ?>

									        <tr>

										        <td width="50">

													<?php echo $num++ ?>

												</td>

										        <td>

											        <?php echo htmlentities($nama);?>

										        </td>

										        <td class="tengah">

													<?php echo htmlentities($sto);?>

										        </td>

										        <td class="tengah">

													<?php echo htmlentities($sektor);?>

										        </td>
										        
										   <!--     <td class="tengah">-->

													<!--<?php echo htmlentities($order_nossa);?>-->

										   <!--     </td>-->

										        <td class="tengah">

													<?php echo htmlentities($order);?>

										        </td>

										        <td class="tengah">

													<?php echo htmlentities($pending);?>

										        </td>

										        <td class="tengah">

													<?php echo htmlentities($closed);?>

										        </td>
										        
										        <td class="tengah">

													<?php echo htmlentities($jumlah_tiket);?>

										        </td>

									        </tr>

									        <?php endforeach; ?>

								        </tbody>

							        </table>

						        </div>

					        </div>

				        </div>

                    </div>
                    
                    	<!-- PERFORMANSI PER BULAN -->
                    <div class="container-fluid">
                        
						<ol class="breadcrumb mb-4">
							
                            <li class="breadcrumb-item active">
                                Progress Tiket Teknisi Per Bulan</li>

                        </ol>

						<form method="post" action="<?php echo base_url("performansi/caribulan");?>">
						    <div class="input-group">
						    <select class="custom-select" data-style="alert-secondary" name="bulan">
  								<option>Bulan</option>
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>

						    <select class="custom-select" data-style="alert-secondary" name="tahun">
							    <option>Tahun</option>
							    <option value="2021">2021</option>
							    <option value="2022">2022</option>
							    <option value="2023">2023</option>
							    <option value="2024">2024</option>
							    <option value="2025">2025</option>
						    </select>
					
					        <div class="input-group-append">
					            <button type="submit" class="btn btn-outline-primary">Tampilkan</button>
					        </div>
						    
						</div>
						</form>
						<hr>

                        <!-- DataTables -->
				        <div class="card mb-4">

                            <div class="card-header">
								
					        </div>
					        <div class="card-body">
						        <div class="table-responsive">
							        <table class="table m-table table-sm table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
								        <thead class="thead-dark">
									        <tr>
												<th rowspan="2">No</th>
										        <th rowspan="2">Nama</th>
										        <th rowspan="2">STO</th>
										        <th colspan="31">Tanggal</th>
												<th rowspan="2">Total</th>
											</tr>
											<tr>
										        <th class="bg-danger">01</th>
										        <th class="bg-danger">02</th>
										        <th class="bg-danger">03</th>
										        <th class="bg-danger">04</th>
										        <th class="bg-danger">05</th>
										        <th class="bg-danger">06</th>
										        <th class="bg-danger">07</th>
										        <th class="bg-danger">08</th>
										        <th class="bg-danger">09</th>
										        <th class="bg-danger">10</th>
										        <th class="bg-danger">11</th>
										        <th class="bg-danger">12</th>
										        <th class="bg-danger">13</th>
										        <th class="bg-danger">14</th>
										        <th class="bg-danger">15</th>
										        <th class="bg-danger">16</th>
										        <th class="bg-danger">17</th>
										        <th class="bg-danger">18</th>
										        <th class="bg-danger">19</th>
										        <th class="bg-danger">20</th>
										        <th class="bg-danger">21</th>
										        <th class="bg-danger">22</th>
										        <th class="bg-danger">23</th>
										        <th class="bg-danger">24</th>
										        <th class="bg-danger">25</th>
										        <th class="bg-danger">26</th>
										        <th class="bg-danger">27</th>
										        <th class="bg-danger">28</th>
										        <th class="bg-danger">29</th>
										        <th class="bg-danger">30</th>
										        <th class="bg-danger">31</th>

										        
									        </tr>
								        </thead>
								        <tbody>
									        <?php $num = 1; foreach ($hasil as $row):
												$nama = $row['nama'];
												$sto = $row['sto'];
												$tanggal01 = $row['tanggal01'];
												$tanggal02 = $row['tanggal02'];
												$tanggal03 = $row['tanggal03'];
												$tanggal04 = $row['tanggal04'];
												$tanggal05 = $row['tanggal05'];
												$tanggal06 = $row['tanggal06'];
												$tanggal07 = $row['tanggal07'];
												$tanggal08 = $row['tanggal08'];
												$tanggal09 = $row['tanggal09'];
												$tanggal10 = $row['tanggal10'];
												$tanggal11 = $row['tanggal11'];
												$tanggal12 = $row['tanggal12'];
												$tanggal13 = $row['tanggal13'];
												$tanggal14 = $row['tanggal14'];
												$tanggal15 = $row['tanggal15'];
												$tanggal16 = $row['tanggal16'];
												$tanggal17 = $row['tanggal17'];
												$tanggal18 = $row['tanggal18'];
												$tanggal19 = $row['tanggal19'];
												$tanggal20 = $row['tanggal20'];
												$tanggal21 = $row['tanggal21'];
												$tanggal22 = $row['tanggal22'];
												$tanggal23 = $row['tanggal23'];
												$tanggal24 = $row['tanggal24'];
												$tanggal25 = $row['tanggal25'];
												$tanggal26 = $row['tanggal26'];
												$tanggal27 = $row['tanggal27'];
												$tanggal28 = $row['tanggal28'];
												$tanggal29 = $row['tanggal29'];
												$tanggal30 = $row['tanggal30'];
												$tanggal31 = $row['tanggal31'];
												$total = $row['total'];
												

												
												 ?>
									        <tr>
										        <td width="50">
													<?php echo $num++ ?>
												</td>
										        <td>
											        <?php echo htmlentities($nama);?>
										        </td>
										        <td class="tengah">
											        <?php echo htmlentities($sto);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal01);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal02);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal03);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal04);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal05);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal06);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal07);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal08);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal09);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal10);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal11);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal12);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal13);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal14);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal15);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal16);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal17);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal18);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal19);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal20);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal21);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal22);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal23);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal24);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal25);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal26);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal27);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal28);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal29);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal30);?>
										        </td>
										        <td class="tengah">
													<?php echo htmlentities($tanggal31);?>
										        </td>
										        <td class="tengah alert-dark" style="font-weight: bold">
													<?php echo htmlentities($total);?>
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