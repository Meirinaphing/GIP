<?php

$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

$status = $_POST['status'];
echo $nopk = $_POST['nopk'];

if($status == "approve"){
	$sql = "update permintaan_karyawan set status='Approved' where nopk='".$nopk."'";
	$query = $conn->query($sql);
}else{
	$sql = "update permintaan_karyawan set status='Rejected' where nopk='".$nopk."'";
	$query = $conn->query($sql);
}



?>