<!-- import excel ke mysql -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
include 'teknisi.php';
?>

<?php
// upload file xls
$target = basename($_FILES['datanossa']['name']) ;
move_uploaded_file($_FILES['datanossa']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['datanossa']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['datanossa']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$incident     		= $data->val($i, 1);
	$workzone   		= $data->val($i, 54);
	$service_no  		= $data->val($i, 28);
    $assigned_to  		= $data->val($i, 13);
	$booking_date  	 	= $data->val($i, 14);
	$reported_date  	= $data->val($i, 37);
    $status  			= $data->val($i, 48);
	$last_work_log   	= $data->val($i, 10);
	$customer_type		= $data->val($i, 24);
	$assigned_by		= $data->val($i, 15);
	$summary			= $data->val($i, 6);
	$summary1 = substr($summary,0,5);
	$source 			= $data->val($i, 17);
	$waktu_booking = strtotime($booking_date);
	$waktu_report = strtotime($reported_date);
	$waktu = $waktu_booking-$waktu_report;

	$teknisi =  mysqli_query($koneksi,"SELECT nama FROM teknisi WHERE crew ='$assigned_to'");
	


	// $jenis_tiket  		= $data->val($i, );
    // $teknisi_nossa  	= $data->val($i, );
	// $real_teknisi   	= $data->val($i, );
	// $kategori  			= $data->val($i, );
    // $kendala  			= $data->val($i, );
	$status_tiket   	= $data->val($i, 64);
	// $status_manja 	 	= $data->val($i, );
    // $keterangan  		= $data->val($i, );
    $date				= date("Y-m-d");

    //mengecek jika kolom kode produk pada template excel ada yang kosong
    $cari = mysqli_num_rows(mysqli_query($koneksi,"SELECT incident FROM nossa WHERE incident='$incident'"));

	if($incident != "" && $cari > 0){
        mysqli_query($koneksi,"UPDATE nossa SET incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date', status='$status', last_work_log='$last_work_log', date_update='$date' WHERE nossa.incident='$incident' ");
	}
	elseif($incident != "" && $summary1=="LOGIC"){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','LOGIC','','','','','','','','','$date','')");
	}
	elseif($incident != "" && $waktu>=86400){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','REPORTDATE','','','','','','','','','$date','')");
	}
	
	elseif($incident != "" && $source=="PROACTIVE_TICKET"){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','SQM','','','','','','','','','$date','')");
	}
	elseif($incident != "" && $customer_type=="HVC_GOLD" ){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','HVC_GOLD','','','','','','','','','$date','')");
	}
	elseif($incident != "" && $customer_type=="HVC_PLATINUM"){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','HVC_PLATINUM','','','','','','','','','$date','')");
	}
	elseif($incident != "" && $assigned_by=="CUSTOMERASSIGNED" && $source=="RIGHTNOW"){
		mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','TTR 3 JAM','','','','','','','','','$date','')");
	}
	elseif($incident != "" && $booking_date!=""){
		// input data ke database (table nossa)
		mysqli_query($koneksi,"INSERT into nossa values('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','TTR BOOKINGDATE','','','','','','','','','$date','')");
    }
	elseif($incident != "" ){
		// input data ke database (table nossa)
		mysqli_query($koneksi,"INSERT into nossa values('','$incident','$workzone','','$service_no','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','REGULER','$teknisi','','','','','','','','$date','')");
    }
    $berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['datanossa']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>