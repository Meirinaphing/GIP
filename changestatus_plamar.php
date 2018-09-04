<?php

$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

$status = $_POST['status'];
echo $idpelamar = $_POST['idpelamar'];

if($status == "approve"){
	$sql = "update pelamar set status='Approved' where idpelamar='".$idpelamar."'";
	$query = $conn->query($sql);
}else{
	$sql = "update pelamar set status='Rejected' where idpelamar='".$idpelamar."'";
	$query = $conn->query($sql);
}



?>