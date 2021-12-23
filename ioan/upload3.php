<!-- import excel ke mysql -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
date_default_timezone_set('Asia/Jakarta');
header("Content-type: text/html; charset=iso-8859-1");


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
	$workzone   		= $data->val($i, 55);
	$service_no  		= $data->val($i, 28);
    $assigned_to  		= $data->val($i, 13);
	$booking_date  	 	= $data->val($i, 14);
	$reported_date  	= $data->val($i, 38);
    $status  			= $data->val($i, 49);
	$last_work_log   	= $data->val($i, 10);
	$customer_type		= $data->val($i, 24);
	$assigned_by		= $data->val($i, 15);
	$datek				= $data->val($i, 33);
	$summary			= $data->val($i, 6);
	$summary1 = substr($summary,0,5);
	$source 			= $data->val($i, 17);
	$waktu_booking = strtotime($booking_date);
	$waktu_report = strtotime($reported_date);
	$waktu = $waktu_booking-$waktu_report;
	$sktr = "";
	if ($workzone=="KEN" or $workzone=="BBS" ){
		$sktr="KEN";
	 }
	elseif ($workzone=="BTL" || $workzone=="WTS" || $workzone=="WNS"){
		$sktr="BTL" ;
	}	
	elseif($workzone=="SMN" or $workzone=="GOD"){
		$sktr="SMN";
	}
	elseif($workzone=="PKM" or $workzone=="KLS"){
		$sktr="PKM";
	}
	elseif($workzone=="PGR"){
		$sktr="PGR";
	}
	elseif($workzone=="KGD" || $workzone=="BPN"){

		$sktr="KGD";

	}
	elseif($workzone=="KBU"){
		$sktr="KBU";
	}
	


	// $jenis_tiket  		= $data->val($i, );
    // $teknisi_nossa  	= $data->val($i, );
	// $real_teknisi   	= $data->val($i, );
	// $kategori  			= $data->val($i, );
    // $kendala  			= $data->val($i, );
	$status_tiket   	= $data->val($i, 64);
	// $status_manja 	 	= $data->val($i, );
    // $keterangan  		= $data->val($i, );
    $date				= date("Y-m-d H:i:s");

    //mengecek jika kolom kode produk pada template excel ada yang kosong
    $cari = mysqli_num_rows(mysqli_query($koneksi,"SELECT incident FROM nossa WHERE incident='$incident'"));
		$cari_crew = mysqli_num_rows(mysqli_query($koneksi,"SELECT crew FROM teknisi WHERE crew='$assigned_to'")); 
	if($incident != "" && $cari > 0){
		if ($incident != "" && $waktu>=86400){
			mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='REPORTDATE', status='$status', last_work_log='$last_work_log', date_update='$date', datek='$datek' WHERE nossa.incident='$incident' ");	
		} 
        elseif($incident != "" && $source=="PROACTIVE_TICKET"){
            if ($incident != "" && $summary1=="INFRA"){
                mysqli_query($koneksi, "UPDATE nossa SET  jenis_tiket='INFRACARE', sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' ,  status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");
                }
			else {mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='SQM', status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");		
            }
        }

        elseif($incident != "" && $customer_type=="HVC_PLATINUM" or $customer_type=="HVC_GOLD"){
            if($incident != "" && $assigned_by=="CUSTOMERASSIGNED"){
                mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='HVC MANJA', status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");			
            }
			else {mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='HVC NON MANJA', status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");			
            }
            }

            elseif($incident != "" && $customer_type!="HVC_PLATINUM" or $customer_type!="HVC_GOLD"){
                if($incident != "" && $assigned_by=="CUSTOMERASSIGNED"){
                    mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='TTR MANJA', status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");			
                }
                else {mysqli_query($koneksi, "UPDATE nossa SET  sektor='$sktr', incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='TTR NON MANJA', status='$status', last_work_log='$last_work_log', date_update='$date' , datek='$datek' WHERE nossa.incident='$incident' ");			
                }
                }

        }

    


	// INSERT
	elseif($incident != ""){
        if ($incident != "" && $waktu>=86400){
			mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','REPORTDATE','','','','','','','','','$date','$date')");	
		} 
        elseif($incident != "" && $source=="PROACTIVE_TICKET"){
            if ($incident != "" && $summary1=="INFRA"){
                mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','INFRACARE','','','','','','','','','$date','$date')");
                }
			else {mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','SQM','','','','','','','','','$date','$date')");		
            }
        }

        elseif($incident != "" && $customer_type=="HVC_PLATINUM" or $customer_type=="HVC_GOLD"){
            if($incident != "" && $assigned_by=="CUSTOMERASSIGNED"){
                mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','HVC MANJA','','','','','','','','','$date','$date')");			
            }
			else {mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','HVC NON MANJA','','','','','','','','','$date','$date')");			
            }
            }

            elseif($incident != "" && $customer_type!="HVC_PLATINUM" or $customer_type!="HVC_GOLD"){
                if($incident != "" && $assigned_by=="CUSTOMERASSIGNED"){
                    mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','TTR MANJA','','','','','','','','','$date','$date')");			
                }
                else {mysqli_query($koneksi, "INSERT into nossa values ('','$incident','$workzone','$sktr','$service_no','$datek','$assigned_to','$booking_date','$reported_date','$status','$last_work_log','TTR NON MANJA','','','','','','','','','$date','$date')");			
                }
                }



}

	$berhasil++;
}



// hapus kembali file .xls yang di upload tadi
unlink($_FILES['datanossa']['name']);

// alihkan halaman ke index.php
// header("location:index.php?berhasil=$berhasil");
header("location:cek.php");

?>