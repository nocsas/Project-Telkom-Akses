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
                        <h2>MANAJEMEN TIKET BLANK</h2>
                        <small>Kawal Tiket Blank</small><br>
                        <small>Update Tiket Terakhir :
                            <?php if( !empty($lastUpdate) ) {
								foreach($lastUpdate as $row) {
									echo $row;
								}
							} ?>
							
							<!--<?php foreach ($lastUpdate as $waktu):?>-->
							<!--	<?php echo $waktu;?></small>-->
							<!--<?php endforeach;?>-->
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

					
					<?php if ($this->session->flashdata('success_update')): ?>

				        <div class="alert alert-success" role="alert">

					        <?php echo $this->session->flashdata('success_update'); ?>

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

										        <th>Incident</th>

										        <th>Workzone</th>
										    
										        <th>Jenis Tiket</th>
										        
										        <!--<th>Teknisi Myi</th>-->

												<th>Real Teknisi</th>

										        <th>Status Tiket</th>

										        <th>Action</th>

									        </tr>

								        </thead>

								        <tbody>

									        <?php $num = 1; foreach ($nossa as $nossa): ?>
                                        


									        <tr>

                                            <form action="<?php echo site_url('nossa/editOrder/'.$nossa->no) ?>" method="post" enctype="multipart/form-data">

										        <td width="35">

													<?php echo $num++ ?>

												</td>

                                                    <div class="form-group">

                                                        <input type="hidden" name="no" value="<?php echo $nossa->no?>" />

                                                    </div>

                                                <td width="150">

                                                    <?php echo $nossa->incident ?>


                                                    <div class="form-group">

                                                        <input type="hidden" name="incident" value="<?php echo $nossa->incident?>" />

                                                    </div>
										        </td>

										        <td>

                                                    <?php echo $nossa->workzone ?>


                                                    <div class="form-group">

                                                        <input type="hidden" name="workzone" value="<?php echo $nossa->workzone?>" />

                                                    </div>	
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="sektor" value="<?php echo $nossa->sektor?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input class="form-control <?php echo form_error('service_no') ? 'is-invalid':'' ?>"

                                                        type="hidden" name="service_no" min="0" placeholder="Service Number" value="<?php echo $nossa->service_no ?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input class="form-control <?php echo form_error('assigned_to') ? 'is-invalid':'' ?>"

                                                        type="hidden" name="assigned_to" min="0" placeholder="Assign To" value="<?php echo $nossa->assigned_to ?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="booking_date" value="<?php echo $nossa->booking_date?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="reported_date" value="<?php echo $nossa->reported_date?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="status" value="<?php echo $nossa->status?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="last_work_log" value="<?php echo $nossa->last_work_log?>" />

                                                    </div>

										        </td>

                                                <td width="200">

                                                    <?php echo $nossa->jenis_tiket ?>

                                                    <div class="form-group">

                                                        <input type="hidden" name="jenis_tiket" value="<?php echo $nossa->jenis_tiket?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="teknisi_nossa" value="<?php echo $nossa->teknisi_nossa?>" />

                                                    </div>

										        </td>

										        <td>

                                                <div class="form-group">

                                                    <select class="form-control" name="real_teknisi" >

                                                        <option value=""></option>

                                                        <?php $role_id = $this->session->userdata('role_id');

                                                                if($this->session->userdata('role_id') == 2 ){
                                                                    $area = $this->session->userdata('area');
                                                                    $real = $this->db->query("SELECT * FROM teknisi WHERE (jadwal = 'MASUK' AND sektor = '$area')")->result();

                                                        
                                                                }else{
                                                                
                                                                    $real = $this->db->query("SELECT * FROM teknisi WHERE (jadwal = 'MASUK')")->result();

                                                                }

							                            foreach($real as $real){?>

                                                            <option value="<?php echo $real->nama ?>">

                                                                <?php echo $real->nama ?> 

                                                            </option>

                                                        <?php }?>

                                                    </select>

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="teknisi_myi" value="<?php echo $nossa->teknisi_myi?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="kategori" value="<?php echo $nossa->kategori?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="kendala" value="<?php echo $nossa->kendala?>" />

                                                    </div>

										        </td>

										        <td width="100">

                                                    <div class="form-group">

                                                        <select class="form-control" name="status_tiket" >

                                                            <option value="ORDER">ORDER</option>

                                                        </select>

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="status_manja" value="<?php echo $nossa->status_manja?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="keterangan" value="<?php echo $nossa->keterangan?>" />

                                                    </div>
                                                
                                                    <div class="form-group">

                                                        <input type="hidden" name="date_inpute" value="<?php echo $nossa->date_inpute?>" />

                                                    </div>

										        </td>

										        <td width="100">

                                                    <input class="btn btn-success" type="submit" name="btn" value="Save" />

										        </td>
                                            </form>


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

                    <?php $this->load->view("admin/_partials/footer.php"); ?>

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