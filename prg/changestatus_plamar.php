<?php

$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

$status = $_POST['status'];
echo $idpelamar = $_POST['idpelamar'];

if($status == "approve"){
	$sql = "update pelamar set status='Approved' where idpelamar='".$idpelamar."'";
	$query = $conn->query($sql);
	$sql1="INSERT INTO `calon_karyawan` (`no`, `idpelamar`, `tgl`, `waktu`, `status`) VALUES (NULL, '$idpelamar', '-', '-', 'Belum Wawancara');";
	$query1= $conn->query($sql1);
}else{
	$sql = "update pelamar set status='Rejected' where idpelamar='".$idpelamar."'";
	$query = $conn->query($sql);	
	$sql1="delete from `calon_karyawan` where idpelamar='".$idpelamar."' ";
	$query1= $conn->query($sql1);
}



?>