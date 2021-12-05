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

                    <div class="container-fluid">

                        <div class="card mb-4">

                            
                            <div class="card-body">

                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" style="text-align: center; font-size: 68%;">

                                        <thead>

					    <tr>                    
						
                                                <th colspan="30" class="table-success">REPORT ASSURANCE JOGJA    <?php echo date('d-m-Y H:i:s'); ?> </th>
					    
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
                                                <td><a href="#"><?php echo $tknacall; ?></a></td>

                                                <td><a href="#"><?php echo $tknasall; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordall; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgall; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordall; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgall; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordall; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgall; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordall; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgall; ?></a></td>


                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordall; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgall; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordall; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdall; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgall; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordall; ?></a></td>

                                                <td><a href="#"><?php echo $clsdall; ?></a></td>

                                                <td><a href="#"><?php echo $pndgall; ?></a></td>

                                                <td><a href="#"><?php echo $blnkall; ?></a></td>

                                                <td><a href="#"><?php echo $ttlall; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlall; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekall; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknall; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktall; ?>%</a></td>


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
                                                <td><a href="#"><?php echo $tknacstokbu; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstokbu; ?></a></td>

                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgkbu; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgkbu; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgkbu; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgkbu; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgkbu; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgkbu; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordkbu; ?></a></td>

                                                <td><a href="#"><?php echo $clsdkbu; ?></a></td>

                                                <td><a href="#"><?php echo $pndgkbu; ?></a></td>

                                                <td><a href="#"><?php echo $blnkkbu; ?></a></td>

                                                <td><a href="#"><?php echo $ttlkbu; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlkbu; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekkbu; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknkbu; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktkbu; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>SMN</td>

                                                 <!--- JUMLAH TEKNISI --> 
                                                 <td><a href="#"><?php echo $tknacstosmn; ?></a></td>

                                                 <td><a href="#"><?php echo $tknasstosmn; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgsmn; ?></a></td>

                                                 <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgsmn; ?></a></td>

                                                <!--- TTR MANJA  --> 
                                                <td><a href="#"><?php echo $ttrmanordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgsmn; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgsmn; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgsmn; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgsmn; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordsmn; ?></a></td>

                                                <td><a href="#"><?php echo $clsdsmn; ?></a></td>

                                                <td><a href="#"><?php echo $pndgsmn; ?></a></td>

                                                <td><a href="#"><?php echo $blnksmn; ?></a></td>

                                                <td><a href="#"><?php echo $ttlsmn; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlsmn; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodteksmn; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknsmn; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktsmn; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>GOD</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstogod; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstogod; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordgod; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndggod; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordgod; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndggod; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordgod; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndggod; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordgod; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndggod; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordgod; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndggod; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordgod; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndggod; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordgod; ?></a></td>

                                                <td><a href="#"><?php echo $clsdgod; ?></a></td>

                                                <td><a href="#"><?php echo $pndggod; ?></a></td>

                                                <td><a href="#"><?php echo $blnkgod; ?></a></td>

                                                <td><a href="#"><?php echo $ttlgod; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlgod; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekgod; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttkngod; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktgod; ?>%</a></td>

                                                <td></td>
                                            </tr>

                                            <tr>

                                                <td>PKM</td>
                                                 <!--- JUMLAH TEKNISI --> 
                                                 <td><a href="#"><?php echo $tknacstopkm; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstopkm; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgpkm; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgpkm; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgpkm; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgpkm; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgpkm; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgpkm; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordpkm; ?></a></td>

                                                <td><a href="#"><?php echo $clsdpkm; ?></a></td>

                                                <td><a href="#"><?php echo $pndgpkm; ?></a></td>

                                                <td><a href="#"><?php echo $blnkpkm; ?></a></td>

                                                <td><a href="#"><?php echo $ttlpkm; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlpkm; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekpkm; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknpkm; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktpkm; ?>%</a></td>

                                                <td></td>
                                            </tr>

                                            <tr>

                                                <td>KLS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstokls; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstokls; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordkls; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgkls; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordkls; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgkls; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordkls; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgkls; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordkls; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgkls; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordkls; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgkls; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordkls; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgkls; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordkls; ?></a></td>

                                                <td><a href="#"><?php echo $clsdkls; ?></a></td>

                                                <td><a href="#"><?php echo $pndgkls; ?></a></td>

                                                <td><a href="#"><?php echo $blnkkls; ?></a></td>

                                                <td><a href="#"><?php echo $ttlkls; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlkls; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekkls; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknkls; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktkls; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>KGD/BPN</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstokgd; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstokgd; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgkgd; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgkgd; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgkgd; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgkgd; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgkgd; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgkgd; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordkgd; ?></a></td>

                                                <td><a href="#"><?php echo $clsdkgd; ?></a></td>

                                                <td><a href="#"><?php echo $pndgkgd; ?></a></td>

                                                <td><a href="#"><?php echo $blnkkgd; ?></a></td>

                                                <td><a href="#"><?php echo $ttlkgd; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlkgd; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekkgd; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknkgd; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktkgd; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr class="bg-warning">

                                                <th>NORTH</th>
						
                                                <!--- TEKNISI  --> 
                                                <th><a href="#"><?php echo $tknacnorth; ?></a></th>

                                                <th><a href="#"><?php echo $tknasnorth; ?></a></th>


                                                <!--- HVC MANJA --> 
                                                <th><a href="#"><?php echo $hvcmanordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcmanclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcmanpndgnorth; ?></a></th>

                                                <!--- HVC NON MANJA--> 
                                                <th><a href="#"><?php echo $hvcnonmanordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcnonmanclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcnonmanpndgnorth; ?></a></th>

                                                <!--- TTR MANJA --> 
                                                <th><a href="#"><?php echo $ttrmanordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrmanclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrmanpndgnorth; ?></a></th>

                                                <!--- TTR NON MANJA --> 
                                                <th><a href="#"><?php echo $ttrnonmanordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrnonmanclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrnonmanpndgnorth; ?></a></th>

                                                <!--- SQM --> 
                                                <th><a href="#"><?php echo $sqmordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $sqmclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $sqmpndgnorth; ?></a></th>

                                                <!--- INFRACARE --> 
                                                <th><a href="#"><?php echo $infraordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $infraclsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $infrapndgnorth; ?></a></th>

                                                <!--- TOTAL --> 
                                                <th><a href="#"><?php echo $ordnorth; ?></a></th>

                                                <th><a href="#"><?php echo $clsdnorth; ?></a></th>

                                                <th><a href="#"><?php echo $pndgnorth; ?></a></th>

                                                <th><a href="#"><?php echo $blnknorth; ?></a></th>

                                                <th><a href="#"><?php echo $ttlnorth; ?></a></th>


                                                <td><a href="#"><?php echo $clsttlnorth; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodteknorth; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknnorth; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktnorth; ?>%</a></td>

                                                

                                            </tr>

                                            <tr>

                                                <td>BBS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstobbs; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstobbs; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgbbs; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgbbs; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgbbs; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgbbs; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgbbs; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgbbs; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordbbs; ?></a></td>

                                                <td><a href="#"><?php echo $clsdbbs; ?></a></td>

                                                <td><a href="#"><?php echo $pndgbbs; ?></a></td>

                                                <td><a href="#"><?php echo $blnkbbs; ?></a></td>

                                                <td><a href="#"><?php echo $ttlbbs; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlbbs; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekbbs; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknbbs; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktbbs; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>KEN</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstoken; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstoken; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordken; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgken; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordken; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgken; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordken; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgken; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordken; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgken; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordken; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgken; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordken; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdken; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgken; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordken; ?></a></td>

                                                <td><a href="#"><?php echo $clsdken; ?></a></td>

                                                <td><a href="#"><?php echo $pndgken; ?></a></td>

                                                <td><a href="#"><?php echo $blnkken; ?></a></td>

                                                <td><a href="#"><?php echo $ttlken; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlken; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekken; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknken; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktken; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>PGR</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstopgr; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstopgr; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgpgr; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgpgr; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgpgr; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgpgr; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgpgr; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgpgr; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordpgr; ?></a></td>

                                                <td><a href="#"><?php echo $clsdpgr; ?></a></td>

                                                <td><a href="#"><?php echo $pndgpgr; ?></a></td>

                                                <td><a href="#"><?php echo $blnkpgr; ?></a></td>

                                                <td><a href="#"><?php echo $ttlpgr; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlpgr; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekpgr; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknpgr; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktpgr; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>BTL</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstobtl; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstobtl; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgbtl; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgbtl; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgbtl; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgbtl; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgbtl; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgbtl; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordbtl; ?></a></td>

                                                <td><a href="#"><?php echo $clsdbtl; ?></a></td>

                                                <td><a href="#"><?php echo $pndgbtl; ?></a></td>

                                                <td><a href="#"><?php echo $blnkbtl; ?></a></td>

                                                <td><a href="#"><?php echo $ttlbtl; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlbtl; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekbtl; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknbtl; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktbtl; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>WNS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstowns; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstowns; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordwns; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgwns; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordwns; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgwns; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordwns; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgwns; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordwns; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgwns; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordwns; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgwns; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordwns; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgwns; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordwns; ?></a></td>

                                                <td><a href="#"><?php echo $clsdwns; ?></a></td>

                                                <td><a href="#"><?php echo $pndgwns; ?></a></td>

                                                <td><a href="#"><?php echo $blnkwns; ?></a></td>

                                                <td><a href="#"><?php echo $ttlwns; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlwns; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekwns; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknwns; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktwns; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr>

                                                <td>WTS</td>

                                                <!--- JUMLAH TEKNISI --> 
                                                <td><a href="#"><?php echo $tknacstowts; ?></a></td>

                                                <td><a href="#"><?php echo $tknasstowts; ?></a></td>


                                                <!--- HVC MANJA --> 
                                                <td><a href="#"><?php echo $hvcmanordwts; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $hvcmanpndgwts; ?></a></td>

                                                <!--- HVC NON MANJA --> 
                                                <td><a href="#"><?php echo $hvcnonmanordwts; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $hvcnonmanpndgwts; ?></a></td>

                                                <!--- TTR MANJA --> 
                                                <td><a href="#"><?php echo $ttrmanordwts; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $ttrmanpndgwts; ?></a></td>

                                                <!--- TTR NON MANJA --> 
                                                <td><a href="#"><?php echo $ttrnonmanordwts; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $ttrnonmanpndgwts; ?></a></td>

                                                <!--- SQM --> 
                                                <td><a href="#"><?php echo $sqmordwts; ?></a></td>

                                                <td><a href="#"><?php echo $sqmclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $sqmpndgwts; ?></a></td>

                                                <!--- INFRACARE --> 
                                                <td><a href="#"><?php echo $infraordwts; ?></a></td>

                                                <td><a href="#"><?php echo $infraclsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $infrapndgwts; ?></a></td>

                                                <!--- TOTAL --> 
                                                <td><a href="#"><?php echo $ordwts; ?></a></td>

                                                <td><a href="#"><?php echo $clsdwts; ?></a></td>

                                                <td><a href="#"><?php echo $pndgwts; ?></a></td>

                                                <td><a href="#"><?php echo $blnkwts; ?></a></td>

                                                <td><a href="#"><?php echo $ttlwts; ?></a></td>


                                                <td><a href="#"><?php echo $clsttlwts; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodtekwts; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknwts; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktwts; ?>%</a></td>

                                                <td></td>

                                            </tr>

                                            <tr class="bg-warning">

                                                <th>SOUTH</th>

                                                <!--- TEKNISI  --> 
                                                <th><a href="#"><?php echo $tknacsouth; ?></a></th>

                                                <th><a href="#"><?php echo $tknassouth; ?></a></th>


                                                <!--- HVC MANJA --> 
                                                <th><a href="#"><?php echo $hvcmanordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcmanclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcmanpndgsouth; ?></a></th>

                                                <!--- HVC NON MANJA--> 
                                                <th><a href="#"><?php echo $hvcnonmanordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcnonmanclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $hvcnonmanpndgsouth; ?></a></th>

                                                <!--- TTR MANJA --> 
                                                <th><a href="#"><?php echo $ttrmanordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrmanclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrmanpndgsouth; ?></a></th>

                                                <!--- TTR NON MANJA --> 
                                                <th><a href="#"><?php echo $ttrnonmanordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrnonmanclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $ttrnonmanpndgsouth; ?></a></th>

                                                <!--- SQM --> 
                                                <th><a href="#"><?php echo $sqmordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $sqmclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $sqmpndgsouth; ?></a></th>

                                                <!--- INFRACARE --> 
                                                <th><a href="#"><?php echo $infraordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $infraclsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $infrapndgsouth; ?></a></th>

                                                <!--- TOTAL --> 
                                                <th><a href="#"><?php echo $ordsouth; ?></a></th>

                                                <th><a href="#"><?php echo $clsdsouth; ?></a></th>

                                                <th><a href="#"><?php echo $pndgsouth; ?></a></th>

                                                <th><a href="#"><?php echo $blnksouth; ?></a></th>

                                                <th><a href="#"><?php echo $ttlsouth; ?></a></th>


                                                <td><a href="#"><?php echo $clsttlsouth; ?>%</a></td>

                                                <td><a href="#"><?php echo $prodteksouth; ?></a></td>

                                                <td><a href="#"><?php echo $avgtkttknsouth; ?></a></td>

                                                <td><a href="#"><?php echo $sisatiktsouth; ?>%</a></td>

                                                

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

                                                <td><a href="#"><?php echo $ttlnas; ?></a></td>

                                                <td><a href="#"><?php echo $ttlnas; ?></a></td>


                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <td></td>

                                                <td></td>

                                            </tr>


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
        <?php $this->load->view("admin/_partials/js.php"); ?>
       
       
		<script>
			function deleteConfirm(url){
				$('#btn-delete').attr('href', url);
				$('#deleteModal').modal();
			}
		</script>

    </body>

</html>

