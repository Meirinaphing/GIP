<?php
include 'conn.php';


$status = $_POST['status'];
$idlowker = $_POST['idlowker'];
$isi = $_POST['isi'];
if($status == "save"){
	$sql = "UPDATE `lowker` SET `isi` = '$isi' WHERE `lowker`.`idlowker` = $idlowker ;";
	$query = $conn->query($sql);

}else if($status == "open"){
	$sql = "UPDATE `lowker` SET `status` = 'open' WHERE `lowker`.`idlowker` = $idlowker ;";
	$query = $conn->query($sql);

}else{
	$sql = "UPDATE `lowker` SET `status` = 'close' WHERE `lowker`.`idlowker` = $idlowker ;";
	$query = $conn->query($sql);
}
?>