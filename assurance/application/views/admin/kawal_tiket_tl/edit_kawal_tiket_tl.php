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
                        <h2>MANAJEMEN TIKET</h2>
                        <small>Update Kawal Tiket HI</small> <br>
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

						

                        <?php if ($this->session->flashdata('success_update')): ?>

				        <div class="alert alert-success" role="alert">

					        <?php echo $this->session->flashdata('success_update'); ?>

				        </div>

				        <?php endif; ?>


						<?php if ($this->session->flashdata('gagal_update')): ?>

						<div class="alert alert-danger" role="alert">

							<?php echo $this->session->flashdata('gagal_update'); ?>

						</div>

						<?php endif; ?>



				        <!-- Card  -->

				        <div class="card mb-4">

					        <div class="card-header">

                                <a href="<?php echo site_url('nossa') ?>"><i class="fas fa-arrow-left"></i> Back</a>

					    </div>

					    <div class="card-body">



					        <form action="" method="post" enctype="multipart/form-data">

						        <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 

							    oleh controller tempat vuew ini digunakan. Yakni index.php/admin/divisi/edit/ID --->



                                    <div class="form-group">

										<input type="hidden" name="no" value="<?php echo $nossa->no?>" />

							        </div>



							        <div class="form-group">

								        <label for="incident">Incident</label>

										<input type="hidden" name="incident" value="<?php echo $nossa->incident?>" />

								        <input class="form-control <?php echo form_error('incident') ? 'is-invalid':'' ?>"

								        type="text" name="incident" placeholder="Incident" disabled value="<?php echo $nossa->incident ?>" />

							        </div>



							        <div class="form-group">

								        <label for="workzone">Workzone</label>

										<input type="hidden" name="workzone" value="<?php echo $nossa->workzone?>" />

								        <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"

								         type="text" name="workzone" min="0" placeholder="Workzone" disabled value="<?php echo $nossa->workzone ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('workzone') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="sektor">Sektor</label>

										<input type="hidden" name="sektor" value="<?php echo $nossa->sektor?>" />

								        <input class="form-control <?php echo form_error('sektor') ? 'is-invalid':'' ?>"

								         type="text" name="sektor" min="0" placeholder="sektor" disabled value="<?php echo $nossa->sektor ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('sektor') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <input class="form-control <?php echo form_error('service_no') ? 'is-invalid':'' ?>"

								         type="hidden" name="service_no" min="0" placeholder="Service Number" value="<?php echo $nossa->service_no ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('service_no') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <input class="form-control <?php echo form_error('assigned_to') ? 'is-invalid':'' ?>"

								         type="hidden" name="assigned_to" min="0" placeholder="Assign To" value="<?php echo $nossa->assigned_to ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('assigned_to') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="booking_date">Booking Date</label>

										<input type="hidden" name="booking_date" value="<?php echo $nossa->booking_date?>" />

								        <input class="form-control <?php echo form_error('booking_date') ? 'is-invalid':'' ?>"

								         type="text" name="booking_date" min="0" placeholder="Booking Date" disabled value="<?php echo $nossa->booking_date ?>" />

								        <div class="invalid-feedback">

									        <?php echo form_error('booking_date') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="reported_date">Report Date</label>

										<input type="hidden" name="reported_date" value="<?php echo $nossa->reported_date?>" />

								        <input class="form-control <?php echo form_error('reported_date') ? 'is-invalid':'' ?>"

								        type="text" name="reported_date" min="0" placeholder="Report Date" disabled value="<?php echo $nossa->reported_date ?>"/>

								        <div class="invalid-feedback">

									        <?php echo form_error('reported_date') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="status">Status</label>

										<input type="hidden" name="status" value="<?php echo $nossa->status?>" />

								        <input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"

								        type="text" name="status" min="0" placeholder="Status" disabled value="<?php echo $nossa->status ?>"/>

								        <div class="invalid-feedback">

									        <?php echo form_error('status') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="last_work_log">Last Work Log</label>

										<input type="hidden" name="last_work_log" value="<?php echo $nossa->last_work_log?>" />

								        <input class="form-control <?php echo form_error('last_work_log') ? 'is-invalid':'' ?>"

								        type="text" name="last_work_log" min="0" placeholder="Last Work Log" disabled value="<?php echo $nossa->last_work_log ?>"/>

								        <div class="invalid-feedback">

									        <?php echo form_error('last_work_log') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="jenis_tiket">Jenis Tiket</label>

										<input type="hidden" name="jenis_tiket" value="<?php echo $nossa->jenis_tiket?>" />

								        <input class="form-control <?php echo form_error('jenis_tiket') ? 'is-invalid':'' ?>"

								        type="text" name="jenis_tiket" min="0" placeholder="Jenis Tiket" disabled value="<?php echo $nossa->jenis_tiket ?>"/>

								        <div class="invalid-feedback">

									        <?php echo form_error('jenis_tiket') ?>

								        </div>

							        </div>



							        <div class="form-group">

								        <label for="teknisi_nossa">Teknisi Nossa</label>

										<input type="hidden" name="teknisi_nossa" value="<?php echo $nossa->teknisi_nossa?>" />

								        <input class="form-control <?php echo form_error('teknisi_nossa') ? 'is-invalid':'' ?>"

								        type="text" name="teknisi_nossa" min="0" placeholder="Teknisi Nossa" disabled value="<?php echo $nossa->teknisi_nossa ?>"/>

								        <div class="invalid-feedback">

									        <?php echo form_error('teknisi_nossa') ?>

								        </div>

							        </div>



                                    <div class="form-group">

								        <label for="real_teknisi">Real Teknisi</label>

                                        <select class="form-control" name="real_teknisi" >

											<option ><?php echo $nossa->real_teknisi ?></option>

											<option value=""></option>

											<?php foreach($real as $real){?>

												<option value="<?php echo $real->nama ?>">

											<?php echo $real->nama ?> 

											</option>

											<?php }?>

										</select>

									</div>



									<div class="form-group">

										<label for="teknisi_myi">Teknisi Myi</label>

										<select class="form-control" name="teknisi_myi">

                                            <option ><?php echo $nossa->teknisi_myi ?></option>

											<option value=""></option>

											<?php foreach($myi as $myi){?>

												<option value="<?php echo $myi->nama ?>">

											<?php echo $myi->nama ?> 

											</option>

											<?php }?>

										</select>

									</div>



                                    <div class="form-group">

								        <label for="kategori">Kategori</label>

                                        <select class="form-control" name="kategori" >

                                            <option value="<?php echo $nossa->kategori ?>"><?php echo $nossa->kategori ?></option>

											<option value=""></option>

                                            <option value="ONPROGRES">ONPROGRES</option>

                                            <option value="PENDING">PENDING</option>

                                            <option value="CPE LOGIC-RESTART ONT/ REBOOT ONT">CPE LOGIC-RESTART ONT/ REBOOT ONT</option>

                                            <option value="CPE LOGIC-SETUL WIFI">CPE LOGIC-SETUL WIFI</option>

                                            <option value="CPE LOGIC-GANTI PASS">CPE LOGIC-GANTI PASS</option>

                                            <option value="CPE LOGIC-HARD RESET ONT">CPE LOGIC-HARD RESET ONT</option>

                                            <option value="CPE LOGIC-SETUL ONT">CPE LOGIC-SETUL ONT</option>

                                            <option value="CPE FISIK-GANTI CPE, GANTI REMOTE STB, UNBIND STB">CPE FISIK-GANTI CPE, GANTI REMOTE STB, UNBIND STB</option>

                                            <option value="CPE FISIK-SETTING LAN, SETTING TAMBAHAN(FIREWALL,FAX,DLL) DI ONT">CPE FISIK-SETTING LAN, SETTING TAMBAHAN(FIREWALL,FAX,DLL) DI ONT</option>

                                            <option value="CPE FISIK-SETTING MODEM">CPE FISIK-SETTING MODEM</option>

                                            <option value="CPE FISIK-SETTING STB, RESTART STB">CPE FISIK-SETTING STB, RESTART STB</option>

                                            <option value="CPE FISIK-ADAPTOR POWER">CPE FISIK-ADAPTOR POWER</option>

                                            <option value="PERANGKAT PLGN-RJ11, RJ45, PESPON, PC, MIKROTIK, AP WIFI, BY PASS ONT, PABX">PERANGKAT PLGN-RJ11, RJ45, PESPON, PC, MIKROTIK, AP WIFI, BY PASS ONT, PABX</option>

                                            <option value="OUTDOOR-DW / DC, KU, OMSET SEKUNDER">OUTDOOR-DW / DC, KU, OMSET SEKUNDER</option>

                                            <option value="INDOOR-RS (ROSET) / PC (PATCH CORD) / IKR, SPLITER, PINDAH CPE">INDOOR-RS (ROSET) / PC (PATCH CORD) / IKR, SPLITER, PINDAH CPE</option>

                                            <option value="PP (PERANGKAT PASIF)-DP / ODP / ODC / RK">PP (PERANGKAT PASIF)-DP / ODP / ODC / RK</option>

                                            <option value="PP (PERANGKAT PASIF)-KURANG KLIK DI ODP">PP (PERANGKAT PASIF)-KURANG KLIK DI ODP</option>

                                            <option value="CONFIG ULANG-CREATE ONT, CREATE DISISI OLT">CONFIG ULANG-CREATE ONT, CREATE DISISI OLT</option>

                                            <option value="CONFIG ULANG-CREATE INET, CREATE TELPON, CREATE USEETV">CONFIG ULANG-CREATE INET, CREATE TELPON, CREATE USEETV</option>

                                            <option value="CONFIG ULANG-RESTORE, UPDATE PROFILE, UNBIND INET">CONFIG ULANG-RESTORE, UPDATE PROFILE, UNBIND INET</option>

                                            <option value="PA (PERANGKAT AKTIF)-MSAN, DSLAM,CHANGE PORT">PA (PERANGKAT AKTIF)-MSAN, DSLAM,CHANGE PORT</option>

                                            <option value="NORMAL-CARING OK, SALAH LAPOR, ALAMAT TDK KETEMU, CEKLOK OK">NORMAL-CARING OK, SALAH LAPOR, ALAMAT TDK KETEMU, CEKLOK OK</option>

                                            <option value="C2F-MIGRASI FO BY SC">C2F-MIGRASI FO BY SC</option>

                                            <option value="C2F-MIGRASI FO MANUAL">C2F-MIGRASI FO MANUAL</option>

                                            <option value="ADMIN-BUKIS, DOUBLE TIKET, PAKET LAYANAN, FUP">ADMIN-BUKIS, DOUBLE TIKET, PAKET LAYANAN, FUP</option>

                                            <option value="Autoclosed SQM Pelanggan sudah Online">Autoclosed SQM Pelanggan sudah Online</option>

                                            <option value="SQM - Status retensi cabut isolir">SQM - Status retensi cabut isolir</option>

                                            <option value="SQM - Nomor Dinas">SQM - Nomor Dinas</option>

                                            <option value="SQM - Rumah Kosong / Rumah Di Renovasi">SQM - Rumah Kosong / Rumah Di Renovasi</option>

                                            <option value="DOUBLE Predictive Ticket SQM and Customer Ticket">DOUBLE Predictive Ticket SQM and Customer Ticket</option>

                                            <option value="SQM - Pelanggan Menolak Didatangi">SQM - Pelanggan Menolak Didatangi</option>

                                            <option value="SQM - Double Ticket (Beda TicketId, Nomor internet sama)">SQM - Double Ticket (Beda TicketId, Nomor internet sama)</option>

                                            <option value="SQM - Status Usage online / underspek (dibawah -30dbm)">SQM - Status Usage online / underspek (dibawah -30dbm)</option>

                                            <option value="SQM - ONT Dimatikan Pelanggan">SQM - ONT Dimatikan Pelanggan</option>

                                            <option value="SQM - Layanan Home Wifi">SQM - Layanan Home Wifi</option>

                                            <option value="SQM - Inprogress Maintenance ODP Loss">SQM - Inprogress Maintenance ODP Loss</option>

                                            <option value="SQM - CP Tidak Bisa Dihubungi">SQM - CP Tidak Bisa Dihubungi</option>

                                            <option value="SQM - Pelanggan Akan Cabut">SQM - Pelanggan Akan Cabut</option>

                  				        </select>

							        </div>



                                    <div class="form-group">

								        <label for="kendala">Kendala</label>

                                        <select class="form-control" name="kendala" >

                                            <option value="<?php echo $nossa->kendala ?>"><?php echo $nossa->kendala ?></option>

											<option value=""></option>

                                            <option value="TIDAK ADA KENDALA">TIDAK ADA KENDALA</option>

                                            <option value="BELUM PROGRES">BELUM PROGRES</option>

                                            <option value="ODP LOS / UNSPEC">ODP LOS / UNSPEC</option>

                                            <option value="GAMAS LAIN (KU, SEKUNDER)">GAMAS LAIN (KU, SEKUNDER)</option>

                                            <option value="GARANSI PSB">GARANSI PSB</option>

                                            <option value="GARANSI MIGRASI">GARANSI MIGRASI</option>

                                            <option value="RUKOS">RUKOS</option>

                                            <option value="RNA / CP TDK AKTIFT">RNA / CP TDK AKTIF</option>

                                            <option value="MANJA PELANGGAN">MANJA PELANGGAN</option>

                                            <option value="LOGIC">LOGIC</option>

                                            <option value="CUACA HUJAN">CUACA HUJAN</option>

                                            <option value="MATERIAL">MATERIAL</option>

                                            <option value="RUTE DROP CORE">RUTE DROP CORE</option>

                                            <option value="PLN DILOKASI MATI">PLN DILOKASI MATI</option>

                                            <option value="UNIT LAIN">UNIT LAIN</option>

                                            <option value="MANJA TTR H+">MANJA TTR H+</option>

                                            <option value="TELAT DORONG CLOSE">TELAT DORONG CLOSE</option>

                                            <option value="PLGN SLOW RESPON">PLGN SLOW RESPON</option>

                                            <option value="OVERLOAD">OVERLOAD</option>

                                            <option value="MOCI - MIG FO [BLM SURVEY]">MOCI - MIG FO [BLM SURVEY]</option>

                                            <option value="MOCI - MIG FO [SDH SURVEY]">MOCI - MIG FO [SDH SURVEY]</option>

                                            <option value="MOCI - MIG FO [PDO]">MOCI - MIG FO [PDO]</option>

                                            <option value="MOCI - MIG FO [PT2/PT2+]">MOCI - MIG FO [PT2/PT2+]</option>

                                            <option value="MOCI - MIG FO [PT3]">MOCI - MIG FO [PT3]</option>

                                            <option value="MOCI - MIG FO [ODP BLM GL]">MOCI - MIG FO [ODP BLM GL]</option>

                                            <option value="SOLGAN - MIG FO [BLM SURVEY]">SOLGAN - MIG FO [BLM SURVEY]</option>

                                            <option value="SOLGAN - MIG FO [SDH SURVEY]">SOLGAN - MIG FO [SDH SURVEY]</option>

                                            <option value="SOLGAN - MIG FO [PDO]">SOLGAN - MIG FO [PDO]</option>

                                            <option value="SOLGAN - MIG FO [PT2/PT2+]">SOLGAN - MIG FO [PT2/PT2+]</option>

                                            <option value="SOLGAN - MIG FO [PT3]">SOLGAN - MIG FO [PT3]</option>

                                            <option value="SOLGAN - MIG FO [ODP BLM GL]">SOLGAN - MIG FO [ODP BLM GL]</option>

                                            <option value="KENDALA NOSSA">KENDALA NOSSA</option>

                                            <option value="REOPEN REJECT/RNA">REOPEN REJECT/RNA</option>

                                            <option value="LAPUL">LAPUL</option>

                  				        </select>

							        </div>



                                    <div class="form-group">

								        <label for="status_tiket">Status Tiket</label>

                                        <select class="form-control" name="status_tiket" >

                                            <option value="<?php echo $nossa->status_tiket ?>"><?php echo $nossa->status_tiket ?></option>

											<option value=""></option>

                                            <option value="CLOSED">CLOSED</option>

                                            <option value="PENDING">PENDING</option>

                                            <option value="ORDER">ORDER</option>


                  				        </select>

							        </div>



                                    <div class="form-group">

								        <label for="status_manja">Status Manja</label>

                                        <select class="form-control" name="status_manja" >

                                            <option value="<?php echo $nossa->status_manja ?>"><?php echo $nossa->status_manja ?></option>

											<option value=""></option>

                                            <option value="ONTIME">ONTIME</option>

                                            <option value="EXPIRED">EXPIRED</option>

                                        </select>

							        </div>



									<div class="form-group">

										<label for="keterangan">Keterangan</label>

										<input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"

										type="text" name="keterangan" min="0" placeholder="Keterangan" value="<?php echo $nossa->keterangan ?>"/>

										<div class="invalid-feedback">

											<?php echo form_error('keterangan') ?>

										</div>

									</div>



									<div class="form-group">

										<input class="form-control <?php echo form_error('date_inpute') ? 'is-invalid':'' ?>"

										type="hidden" name="date_inpute" min="0" placeholder="Date Input" value="<?php echo $nossa->date_inpute ?>"/>

										<div class="invalid-feedback">

											<?php echo form_error('date_inpute') ?>

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

                    <?php $this->load->view("admin/_partials/footer.php") ?>

                </footer>

            </div>

        </div>

        <?php $this->load->view("admin/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>

    </body>

</html>