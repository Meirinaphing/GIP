<?php

//$conn = new PDO("mysql:host=localhost;dbname=spk","root","");
include 'conn.php';

session_start();


if(!isset($_SESSION['user'])){
	header("Location:index.php");
}


	// $iduser = 
$username = $_SESSION['user'];
$tanggal = date('Y-m-d');
$divisi = $_POST['divisi'];
$job = $_POST['job'];
$jabatan = $_POST['jabatan'];
$pria = $_POST['pria'];
$wanita = $_POST['wanita'];
$approval = $_POST['approval'];
$mp = $_POST['mp'];
$status = $_POST['status'];
$bulan = $_POST['bulan'];
$jobdesk = $_POST['jobdesk'];
$umur = $_POST['umur'];
$pendidikan = $_POST['pendidikan'];
$pengalaman = $_POST['pengalaman'];
$tahun = $_POST['tahun'];
$kemampuan = $_POST['kemampuan'];
$startgaji = $_POST['startgaji'];
$endgaji = $_POST['endgaji'];
$rencana = $_POST['rencana'];
$rtahun = $_POST['rtahun'];
$jlhorg = $_POST['jlhorg'];
$jlhkaryawan = $_POST['jlhkaryawan'];
$jlhorg2 = $_POST['jlhorg2'];
$rencanapenambahan = $_POST['rencanapenambahan'];
$jlhorg3 = $_POST['jlhorg3'];



echo $sql = "insert into permintaan_karyawan values('12','$username','$tanggal','$divisi','$job','$jabatan','$pria','$wanita','$approval','$mp','$status','$bulan','$jobdesk','$umur','$pendidikan','$pengalaman','$tahun','$kemampuan','$startgaji','$endgaji','$rencana','$rtahun','$jlhorg','$jlhkaryawan','$jlhorg2','$rencanapenambahan','$jlhorg3','Submited')";

$query = $conn->query($sql);
//return true;

?>