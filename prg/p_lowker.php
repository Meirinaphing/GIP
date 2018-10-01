<?php
include 'conn.php';


$status = $_POST['status'];
$isi = $_POST['isi'];
if($status == "save"){
	$sql = "UPDATE `lowker` SET `isi` = '$isi' WHERE `lowker`.`idlowker` = 1;";
	$query = $conn->query($sql);

}else if($status == "open"){
	$sql = "UPDATE `lowker` SET `status` = 'open' WHERE `lowker`.`idlowker` = 1;";
	$query = $conn->query($sql);

}else{
	$sql = "UPDATE `lowker` SET `status` = 'close' WHERE `lowker`.`idlowker` = 1;";
	$query = $conn->query($sql);
}
?>