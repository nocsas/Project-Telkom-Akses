<?php
include 'koneksi.php' ;
include 'upload_aksi.php';

// $i=1;

$row = mysqli_query($koneksi,"SELECT teknisi.nama, teknisi.crew, nossa.assigned_to FROM nossa JOIN teknisi ON teknisi.crew = nossa.assigned_to WHERE teknisi.crew=nossa.assigned_to" );
while($order = mysqli_fetch_array($row)){
	$a = $order[0];
	$b = $order[2];
	$c = $order[1];
	
	//echo $a." ".$b." ".$c."<br>";
	// $query = "UPDATE nossa SET teknisi_real='$a' WHERE teknisi.crew=nossa.assigned_to"
	 mysqli_query($koneksi,"UPDATE nossa 
	 INNER JOIN teknisi 
	 ON teknisi.crew = nossa.assigned_to 
	 SET nossa.teknisi_nossa = teknisi.nama ");

	// if($incident != ""&& $cari > 0 && $summary1=="LOGIC"  ){
		
	// mysqli_query($koneksi, "UPDATE nossa SET  incident='$incident', assigned_to='$assigned_to', booking_date='$booking_date' , jenis_tiket='LOGIC', status='$status', last_work_log='$last_work_log', date_update='$date' WHERE nossa.incident='$incident' ");
	// }

	//  echo $order[0];
	// var_dump($order);
}

 header("location:index.php");
?>