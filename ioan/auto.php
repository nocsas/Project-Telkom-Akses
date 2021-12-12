<?php

include 'koneksi.php' ;



date_default_timezone_set('Asia/Jakarta');

$dateauto				= date("Y-m-d");



//mysqli_query($koneksi,"INSERT INTO nossa_save  SELECT * FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') = '$dateauto' AND nossa.status='CLOSED'");

//mysqli_query($koneksi,"DELETE FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') = '$dateauto' AND nossa.status='CLOSED'");



//

//mysqli_query($koneksi,"INSERT INTO nossa_save  SELECT * FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') != '2021-12-07'");

//mysqli_query($koneksi,"DELETE FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') != '2021-12-07'")

mysqli_query($koneksi,"INSERT INTO nossa_save  SELECT * FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') = '$dateauto'");
mysqli_query($koneksi,"DELETE FROM nossa WHERE DATE_FORMAT(date_update,'%Y-%m-%d') = '$dateauto'");

?>

