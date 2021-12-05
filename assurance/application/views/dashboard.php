<!DOCTYPE html>

<html lang="en">

    <head>

        <?php $this->load->view("admin/_partials/head.php"); ?>
        
        <meta http-equiv="refresh" content="60">

    </head>

    <body class="sb-nav-fixed">

        <?php $this->load->view("admin/_partials/navbar.php"); ?>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">

                <?php $this->load->view("admin/_partials/sidebar.php"); ?>

            </div>

            <div id="layoutSidenav_content">

                <main>

                    

                        

                            
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table m-table table-sm table-striped table-bordered  table-hover" id="html_table" style="text-align: center; font-size: 68%;">

                                        <thead>

					                        <tr>                    
						
                                                <th colspan="30"  class="text-center cssbody" style="background-color:#dd4b39; font-size: 250%;" >REPORT ASSURANCE JOGJA    <?php echo date('d-m-Y H:i:s'); ?> </th>
					    
					                        </tr>

                                            <tr>
                                                <th rowspan="2" class="table-dark">STO</th>

                                                <th colspan="2" class="table-active">JUMLAH TEKNISI</th>

                                                <th colspan="3" class="table-danger">HVC MANJA</th>

                                                <th colspan="3" class="table-success">HVC NON MANJA</th>

                                                <th colspan="3" class="table-warning">TTR MANJA</th>

                                                <th colspan="3" class="table-info">TTR NON MANJA</th>

                                                <th colspan="3" class="table-primary">SQM</th>

                                                <th colspan="3" >INFRACARE</th>

                                                <th colspan="5" class="table-dark">TOTAL</th>

                                                <th rowspan="2" class="table-active">% CLS/TTL</th>

                                                <th rowspan="2" class="table-success">PROD TKN</th>

                                                <th rowspan="2" class="table-warning">AVG TIKET/TKN</th>

                                                <th rowspan="2" class="table-danger">% SISA TIKET</th>

                                            </tr>

                                            <tr>

                                                <th class="table-active">ACTUAL</th>

                                                <th class="table-active">ASSIGN</th>

                                                <th class="table-danger">ORD</th>

                                                <th class="table-danger">CLSD</th>

                                                <th class="table-danger">PNDG</th>

                                                <th class="table-success">ORD</th>

                                                <th class="table-success">CLSD</th>

                                                <th class="table-success">PNDG</th>

                                                <th class="table-warning">ORD</th>

                                                <th class="table-warning">CLSD</th>

                                                <th class="table-warning">PNDG</th>

                                                <th class="table-info">ORD</th>

                                                <th class="table-info">CLSD</th>

                                                <th class="table-info">PNDG</th>

                                                <th class="table-primary">ORD</th>

                                                <th class="table-primary">CLSD</th>

                                                <th class="table-primary">PNDG</th>

                                                <th>ORD</th>

                                                <th>CLSD</th>

                                                <th>PNDG</th>

                                                <th class="table-dark">ORD</th>

                                                <th class="table-dark">CLSD</th>

                                                <th class="table-dark">PNDG</th>

                                                <th class="table-dark">BLK</th>

                                                <th class="table-dark">TTL</th>

                                            </tr>

                                        </thead>

                                        <tfoot>

                                            <tr class="bg-dark text-white">

                                                <th>TOTAL</th>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: white;" ><?php echo $tknacall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $tknasall; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: white;"><?php echo $hvcmanordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $hvcmanclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $hvcmanpndgall; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: white;"><?php echo $hvcnonmanordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $hvcnonmanclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $hvcnonmanpndgall; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: white;"><?php echo $ttrmanordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $ttrmanclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $ttrmanpndgall; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: white;"><?php echo $ttrnonmanordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $ttrnonmanclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $ttrnonmanpndgall; ?></a></td>


                                                <!--- SQM --> 
                                                <td><a href="#" style="color: white;"><?php echo $sqmordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $sqmclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $sqmpndgall; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: white;"><?php echo $infraordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $infraclsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $infrapndgall; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: white;"><?php echo $ordall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $clsdall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $pndgall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $blnkall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $ttlall; ?></a></td>


                                                <td><a href="#" style="color: white;"><?php echo $clsttlall; ?>%</a></td>

                                                <td><a href="#" style="color: white;"><?php echo $prodtekall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $avgtkttknall; ?></a></td>

                                                <td><a href="#" style="color: white;"><?php echo $sisatiktall; ?>%</a></td>


                                            </tr>

                                            <tr class="bg-dark text-white">

                                                <th>%</th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                                <th></th>

                                            </tr>

                                        </tfoot>

                                        <tbody>

                                            <tr>

                                                <td>KBU</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstokbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstokbu; ?></a></td>

                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgkbu; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgkbu; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgkbu; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgkbu; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgkbu; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgkbu; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlkbu; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlkbu; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknkbu; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktkbu; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>SMN</td>

                                                 <!--- JUMLAH TEKNISI --> 
                                                 <td><a href="#" style="color: black;"><?php echo $tknacstosmn; ?></a></td>

                                                 <td><a href="#" style="color: black;"><?php echo $tknasstosmn; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgsmn; ?></a></td>

                                                 <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgsmn; ?></a></td>

                                                <!--- TTR MANJA  --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgsmn; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgsmn; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgsmn; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgsmn; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnksmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlsmn; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlsmn; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodteksmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknsmn; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktsmn; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>GOD</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstogod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstogod; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndggod; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndggod; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndggod; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndggod; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndggod; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndggod; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndggod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlgod; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlgod; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekgod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttkngod; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktgod; ?>%</a></td>

                                            </tr>

                                            <tr>

                                                <td>PKM</td>
                                                 <!--- JUMLAH TEKNISI --> 
                                                 <td><a href="#" style="color: black;"><?php echo $tknacstopkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstopkm; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgpkm; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgpkm; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgpkm; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgpkm; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgpkm; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgpkm; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlpkm; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlpkm; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknpkm; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktpkm; ?>%</a></td>

                                            </tr>

                                            <tr>

                                                <td>KLS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstokls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstokls; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgkls; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgkls; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgkls; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgkls; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgkls; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgkls; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlkls; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlkls; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknkls; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktkls; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>KGD/BPN</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstokgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstokgd; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgkgd; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgkgd; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgkgd; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgkgd; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgkgd; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgkgd; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlkgd; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlkgd; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknkgd; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktkgd; ?>%</a></td>


                                            </tr>

                                            <tr class="bg-warning">

                                                <th>NORTH</th>
						
                                                <!--- TEKNISI  --> 
                                                <th><a href="#" style="color: black;"><?php echo $tknacnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $tknasnorth; ?></a></th>


                                                <!--- HVC MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $hvcmanordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcmanclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcmanpndgnorth; ?></a></th>

                                                <!--- HVC NON MANJA--> 
                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanpndgnorth; ?></a></th>

                                                <!--- TTR MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $ttrmanordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrmanclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrmanpndgnorth; ?></a></th>

                                                <!--- TTR NON MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanpndgnorth; ?></a></th>

                                                <!--- SQM --> 
                                                <th><a href="#" style="color: black;"><?php echo $sqmordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $sqmclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $sqmpndgnorth; ?></a></th>

                                                <!--- INFRACARE --> 
                                                <th><a href="#" style="color: black;"><?php echo $infraordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $infraclsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $infrapndgnorth; ?></a></th>

                                                <!--- TOTAL --> 
                                                <th><a href="#" style="color: black;"><?php echo $ordnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $clsdnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $pndgnorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $blnknorth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttlnorth; ?></a></th>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlnorth; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodteknorth; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknnorth; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktnorth; ?>%</a></td>

                                                

                                            </tr>

                                            <tr>

                                                <td>BBS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstobbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstobbs; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgbbs; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgbbs; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgbbs; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgbbs; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgbbs; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgbbs; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlbbs; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlbbs; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknbbs; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktbbs; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>KEN</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstoken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstoken; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgken; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgken; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgken; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgken; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgken; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgken; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlken; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlken; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknken; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktken; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>PGR</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstopgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstopgr; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgpgr; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgpgr; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgpgr; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgpgr; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgpgr; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgpgr; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlpgr; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlpgr; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknpgr; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktpgr; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>BTL</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstobtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstobtl; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgbtl; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgbtl; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgbtl; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgbtl; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgbtl; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgbtl; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlbtl; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlbtl; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknbtl; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktbtl; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>WNS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstowns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstowns; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgwns; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgwns; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgwns; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgwns; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgwns; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgwns; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlwns; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlwns; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknwns; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktwns; ?>%</a></td>


                                            </tr>

                                            <tr>

                                                <td>WTS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#" style="color: black;"><?php echo $tknacstowts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $tknasstowts; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcmanordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcmanpndgwts; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $hvcnonmanpndgwts; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrmanordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrmanpndgwts; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttrnonmanpndgwts; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#" style="color: black;"><?php echo $sqmordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sqmpndgwts; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#" style="color: black;"><?php echo $infraordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infraclsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $infrapndgwts; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#" style="color: black;"><?php echo $ordwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $clsdwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $pndgwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $blnkwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlwts; ?></a></td>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlwts; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodtekwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknwts; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktwts; ?>%</a></td>


                                            </tr>

                                            <tr class="bg-warning">

                                                <th>SOUTH</th>

                                                <!--- TEKNISI  --> 
                                                <th><a href="#" style="color: black;"><?php echo $tknacsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $tknassouth; ?></a></th>


                                                <!--- HVC MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $hvcmanordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcmanclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcmanpndgsouth; ?></a></th>

                                                <!--- HVC NON MANJA--> 
                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $hvcnonmanpndgsouth; ?></a></th>

                                                <!--- TTR MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $ttrmanordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrmanclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrmanpndgsouth; ?></a></th>

                                                <!--- TTR NON MANJA --> 
                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttrnonmanpndgsouth; ?></a></th>

                                                <!--- SQM --> 
                                                <th><a href="#" style="color: black;"><?php echo $sqmordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $sqmclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $sqmpndgsouth; ?></a></th>

                                                <!--- INFRACARE --> 
                                                <th><a href="#" style="color: black;"><?php echo $infraordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $infraclsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $infrapndgsouth; ?></a></th>

                                                <!--- TOTAL --> 
                                                <th><a href="#" style="color: black;"><?php echo $ordsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $clsdsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $pndgsouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $blnksouth; ?></a></th>

                                                <th><a href="#" style="color: black;"><?php echo $ttlsouth; ?></a></th>


                                                <td><a href="#" style="color: black;"><?php echo $clsttlsouth; ?>%</a></td>

                                                <td><a href="#" style="color: black;"><?php echo $prodteksouth; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $avgtkttknsouth; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $sisatiktsouth; ?>%</a></td>

                                                

                                            </tr>

					                        <tr>

                                                <td>NAS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td></td>

                                                <td></td>


                                                <!--- HVC MANJA --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- HVC NON MANJA --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- TTR MANJA --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- TTR NON MANJA --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- SQM --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- INFRACARE --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <!--- TOTAL --> 
                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlnas; ?></a></td>

                                                <td><a href="#" style="color: black;"><?php echo $ttlnas; ?></a></td>


                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <td></td>


                                            </tr>


                                        </tbody>

                                    </table>

                                </div>

                            </div>

                 

                

                </main>

                <footer class="py-4 bg-light mt-auto">

                    <?php $this->load->view("admin/_partials/footer.php"); ?>

                </footer>

            </div>

        </div>

        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php"); ?>
       
       
		<script>
			function deleteConfirm(url){
				$('#btn-delete').attr('href', url);
				$('#deleteModal').modal();
			}
		</script>

    </body>

</html>

