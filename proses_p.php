<?php

session_start();
include 'conn.php';
$nilai=0;
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
	$status ="OK";
}else{
	$status = "Fail";
}
	$sql_wawancara = "INSERT INTO `wawancara` (`id`, `nopelamar`, `wawancara`, `status`, `nilai`, `tgl`) VALUES (NULL, '$namapelamar', '$_SESSION[iduser]', '$status', '$hasil', '$tanggal')";
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
$nn=1;
while ( $nn <= 10) {
 	$sql_nilai = "INSERT INTO `nilai_wawancara` (`id`, `idwawancara`, `faktor`, `nilai_s`) VALUES (NULL, '$id', '$faktor[$nn]', '$nilaii[$nn]')";
	$query_nilai = $conn->query($sql_nilai);

 	$nn++;
 } 
 echo "Data Telah disimpan";
?>