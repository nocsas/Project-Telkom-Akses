<!DOCTYPE html>
<html>
    <head>
        <title>Import Data Nossa</title>
    </head>
    <body>
        <style type="text/css">
            body{font-family : sans-serif;}
            p{color : green;}
        </style>
        <h2>Import Data Nossa</h2>

        <?php
        if(isset($_GET['berhasil'])){
            echo "<p".$_GET['berhasil']." Data berhasil di Import </p>";
        }
        ?>

        </br></br>
        <?php include  "koneksi.php" ?>
        <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
            Pilih File :
            <input name="datanossa" type="file" required="required">
            <input name="upload" type="submit" value="import">
        </form>
        </br></br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Incident</th>
                <th>Workzone</th>
                <th>Sektor</th>
                <th>Service Number</th>
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
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from nossa");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr>
                    <th><?php echo $no++; ?></th>
                    <th><?php echo $d['incident']; ?> </th>
                    <th><?php echo $d['workzone']; ?> </th>
                    <th><?php echo $d['sektor']; ?> </th>
                    <th><?php echo $d['service_no']; ?> </th>
                    <th><?php echo $d['assigned_to']; ?> </th>
                    <th><?php echo $d['booking_date']; ?> </th>
                    <th><?php echo $d['reported_date']; ?> </th>
                    <th><?php echo $d['status']; ?> </th>
                    <th><?php echo $d['last_work_log']; ?> </th>
                    <th><?php echo $d['jenis_tiket']; ?> </th>
                    <th><?php echo $d['teknisi_nossa']; ?> </th>
                    <th><?php echo $d['real_teknisi']; ?> </th>
                    <th><?php echo $d['teknisi_myi']; ?> </th>
                    <th><?php echo $d['kategori']; ?> </th>
                    <th><?php echo $d['kendala']; ?> </th>
                    <th><?php echo $d['status_tiket']; ?> </th>
                    <th><?php echo $d['status_manja']; ?> </th>
                    <th><?php echo $d['keterangan']; ?> </th>
                    <th><?php echo $d['date_inpute']; ?> </th>
                    <th><?php echo $d['date_update']; ?> </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>