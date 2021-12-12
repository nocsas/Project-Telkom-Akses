<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   include 'koneksi.php';
        include 'index.php'; ?>
<table border="1">
            <tr>
                <th>no</th>
                <th>crew</th>
                <th>nama</th>
                <th>sto</th>
                <th>sektor</th>
            </tr>

            <?php
            $dump=$d['assigned_to'];
            include 'koneksi.php';
            $no1 = 1;
            $data1 = mysqli_query($koneksi, "select * from teknisi WHERE `crew` =$dump");
            while($d1 = mysqli_fetch_array($data1)){
            ?>
            <tr>
             <?php $no1++; ?>
                    <th><?php echo $d1['id']; ?> </th>
                    <th><?php echo $d1['crew']; ?> </th>
                    <th><?php echo $d1['nama']; ?> </th>
                    <th><?php echo $d1['sto']; ?> </th>
                    <th><?php echo $d1['sektor']; ?> </th>
            </tr>
                    <?php
            }
            ?>
</table>  
</body>
</html>