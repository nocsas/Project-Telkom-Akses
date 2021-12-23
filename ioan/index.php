<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="refresh" content="0;url=https://rajaistimewa.com/assurance/ImportTiket"></head>

        <title>Import Data Nossa</title>

        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    </head>

    <!-- <body>

        <style type="text/css">

            body{font-family : sans-serif;}

            p{color : green;}

        </style>

        <h2>Import Data Nossa</h2>

       <a target="_blank" href="export.php"><button>DOWNLOAD</button></a> <br></br>



        <?php

        if(isset($_GET['berhasil'])){

            echo "<p".$_GET['berhasil']." Data berhasil di Import </p>";

        }

        ?>


	<a href="https://rajaistimewa.com/assurance/index.php/ImportTiket"><i class="fas fa-plus"></i>Kembali</a>
        </br></br>

        <?php include  "koneksi.php" ?>

        <form method="post" enctype="multipart/form-data" action="upload3.php">

            Pilih File :

            <input name="datanossa" type="file" required="required">

            <input name="upload" type="submit" value="import">

        </form>

        </br></br>



        <table class="table1">

            <tr>

                <th>No</th>

                <th>Incident</th>

                <th>Workzone</th>

                <th>Sektor</th>

                <th>Service Number</th>
		
		<th>Datek</th>

                <th>Assigned To</th>

                <th>Booking Date</th>

                <th>Reported Date</th>

                <th>Status</th>

                <th>Last Work Log</th>

                <th>Jenis Tiket</th>

                <th>Teknisi Nossa</th>

                <th>Real Teknisi</th>

                <th>Teknisi MYI</th>

                <th>Kategori</th> 

                <th>Kendala</th>

                <th>Status Tiket</th>

                <th>Status Manja</th>

                <th>Keterangan</th>

                <th>Date Input</th>

                <th>Date update</th>

            </tr>



            <?php
            header("Content-type: text/html; charset=iso-8859-1");

            include 'koneksi.php';

            $no = 1;

            $data = mysqli_query($koneksi, "select * from nossa");

            while($d = mysqli_fetch_array($data)){

            ?>

                <tr>

                    <td><?php echo $no++; ?></td>

                    <td><?php echo $d['incident']; ?> </td>

                    <td><?php echo $d['workzone']; ?> </td>

                    <td><?php echo $d['sektor']; ?> </td>

                    <td><?php echo $d['service_no']; ?> </td>

		<td><?php echo $d['datek']; ?> </td>

                    <td><?php echo $d['assigned_to']; ?> </td>

                    <td><?php echo $d['booking_date']; ?> </td>

                    <td><?php echo $d['reported_date']; ?> </td>

                    <td><?php echo $d['status']; ?> </td>

                    <td><?php echo $d['last_work_log']; ?> </td>

                    <td><?php echo $d['jenis_tiket']; ?> </td>

                    <td><?php echo $d['teknisi_nossa']; ?> </td>

                    <td><?php echo $d['real_teknisi']; ?> </td>

                    <td><?php echo $d['teknisi_myi']; ?> </td>

                    <td><?php echo $d['kategori']; ?> </td>

                    <td><?php echo $d['kendala']; ?> </td>

                    <td><?php echo $d['status_tiket']; ?> </td>

                    <td><?php echo $d['status_manja']; ?> </td>

                    <td><?php echo $d['keterangan']; ?> </td>

                    <td><?php echo $d['date_inpute']; ?> </td>

                    <td><?php echo $d['date_update']; ?> </td>

                </tr>

            <?php

            }

            ?>

        </table>

    </body> -->

</html>