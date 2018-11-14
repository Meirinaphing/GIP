<?php

$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

$status = $_POST['status'];
$nopk = $_POST['nopk'];

if($status == "approve"){
	$sql = "update permintaan_karyawan set status='Approved' where nopk='".$nopk."'";
	$query = $conn->query($sql);


	$sql2 = "select * from permintaan_karyawan where nopk='".$nopk."'";
	$query2 = $conn->query($sql2);
	foreach ($query2 as $isi) {
		$jabatan = $isi['jabatan'];
		$pria = $isi['jum_pria'];
		$wanita = $isi['jum_wanita'];
		$uraian_p = $isi['uraian_p'];
		$umur = $isi['umur'];
		$umurs = $isi['umurs'];
		$pengalaman = $isi['pengalaman'];
		$kemampuan = $isi['kemampuan'];
		$pendidikan = $isi['pendidikan'];
		$endgaji = $isi['e_gaji'];
		$startgaji = $isi['s_gaji'];
	}


 $sql3 = "INSERT INTO `lowker` (`idlowker`, `isi`, `status`, `nopk`) VALUES (NULL, '<h1>Dicari $jabatan</h1><p></p><ul><li>umur $umur-$umurs</li><li>Pendidikan $pendidikan / setara</li><li>Dibutuhkan Pria $pria orang</li><li>Dibutuhkan Wanita $wanita orang</li><li>Gaji $startgaji s/d $endgaji</li></ul><p><br>$uraian_p</p><br><p>Kemampuan yang di harapkan : <br>$kemampuan</p>', 'close', '$nopk')";
$query3 = $conn->query($sql3);
}else{
	$sql = "update permintaan_karyawan set status='Rejected' where nopk='".$nopk."'";
	$query = $conn->query($sql);
}



?>