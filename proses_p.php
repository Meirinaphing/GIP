<?php

session_start();
include 'conn.php';
$nilai=0;
$iduser = $_SESSION['idpelamar'];
$tanggal = date('Y-m-d');
$namapelamar= $_POST['namapelamar'];
$komunikasi= $_POST['komunikasi'];
$kecerdasan= $_POST['kecerdasan'];
$percaya_diri= $_POST['percaya_diri'];
$kemampuan_umum= $_POST['kemampuan_umum'];
$kemampuan_khusus= $_POST['kemampuan_khusus'];
$kepemimpinan= $_POST['kepemimpinan'];
$motivasi= $_POST['motivasi'];
$pengalaman= $_POST['pengalaman'];
$pengambilan_keputusn= $_POST['pengambilan_keputusn'];
$sosialisasi= $_POST['sosialisasi'];
$nilai = $komunikasi + $kecerdasan +$percaya_diri + $kemampuan_umum + $kemampuan_khusus + $kepemimpinan + $motivasi + $pengalaman + $pengambilan_keputusn + $sosialisasi;
$total= 5*10;
$hasil = ($nilai/$total)*100;
if($hasil>59){
	$status ="PASS";
}else{
	$status = "Fail";
}
	$sql_wawancara = "INSERT INTO `wawancara` (`id`, `nopelamar`, `wawancara`, `status`, `nilai`, `tgl`,`iduser`) VALUES (NULL, '$namapelamar', '$_SESSION[iduser]', '$status', '$hasil', '$tanggal','$iduser')";
	$query_wawancara = $conn->query($sql_wawancara);

	$sql_cek_wawancara = "SELECT * FROM `wawancara` ORDER BY `wawancara`.`id` DESC Limit 1";
	$query_cek_wawancara = $conn->query($sql_cek_wawancara);
		foreach ($query_cek_wawancara as $row) {
			$id=$row['id'];
	}

$nilaii[1]= $_POST['komunikasi'];
$nilaii[2]= $_POST['kecerdasan'];
$nilaii[3]= $_POST['percaya_diri'];
$nilaii[4]= $_POST['kemampuan_umum'];
$nilaii[5]= $_POST['kemampuan_khusus'];
$nilaii[6]= $_POST['kepemimpinan'];
$nilaii[7]= $_POST['motivasi'];
$nilaii[8]= $_POST['pengalaman'];
$nilaii[9]= $_POST['pengambilan_keputusn'];
$nilaii[10]= $_POST['sosialisasi'];

$faktor[1]= "komunikasi";
$faktor[2]= "kecerdasan";
$faktor[3]= "percaya_diri";
$faktor[4]= "kemampuan_umum";
$faktor[5]= "kemampuan_khusus";
$faktor[6]= "kepemimpinan";
$faktor[7]= "motivasi";
$faktor[8]= "pengalaman";
$faktor[9]= "pengambilan_keputusn";
$faktor[10]= "sosialisasi";
// $nn=1;
// while ( $nn <= 10) {
	$sql_nilai = "INSERT INTO `nilai_wawancara` (`id`, `idwawancara`, `komunikasi`, `kecerdasan`, `pdiri`, `kumum`, `kkhusus`, `kepemimpinan`, `motivasi`, `pengalaman`, `pkeputusan`, `sosialisasi`) VALUES (NULL, '$id', '$nilaii[1]', '$nilaii[2]', '$nilaii[3]', '$nilaii[4]', '$nilaii[5]', '$nilaii[6]', '$nilaii[7]', '$nilaii[9]', '$nilaii[9]', '$nilaii[10]');";
	$query_nilai = $conn->query($sql_nilai);

 // 	$nn++;
 // } 
$n=0;
$sql1 = "SELECT * FROM `wawancara` where nopelamar ='$namapelamar'";
												$query1 = $conn->query($sql1);
													foreach ($query1 as $row1) {
														$n++;
														$cek=$row1['status'];
													}
												if ($cek =="Fail"){
													$faill="- Ditunda sementara";
												}
												
												if($n<1){
									$status="Belum Wawancara"; 			
									}else{
									$statu="wawancara ke ".$n." ($status)"; 
								}

	$sql = "UPDATE `calon_karyawan` SET  `status` = '$statu' WHERE `calon_karyawan`.`idpelamar` = $namapelamar";
	$query = $conn->query($sql);

 echo "Data Telah disimpan";
?>