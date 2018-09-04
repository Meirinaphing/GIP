<?php

session_start();
include 'conn.php';

 $nilai=0;
 $tanggal = date('Y-m-d');
 $namapelamar = $_POST['namapelamar'];
 $tglmasuk = $_POST['tglmasuk'];
 $gaji = $_POST['gaji'];
 $uangmakan = $_POST['uangmakan'];
 $pengobatan = $_POST['pengobatan'];
 $transportasi = $_POST['transportasi'];
 $jamsostek = $_POST['jamsostek'];
 $fasilitaslain = $_POST['fasilitaslain'];
		
	$sql_k = "INSERT INTO `keputusan` (`idkeputusan`, `idpelamar`, `tglmasuk`, `gaji`, `uangmakan`, `pengobatan`, `transportasi`, `jamsostek`, `fasilitaslain`) VALUES (NULL, '$namapelamar', '$tglmasuk', '$gaji', '$uangmakan', '$pengobatan', '$transportasi', '$jamsostek', '$fasilitaslain')";
	$query_k = $conn->query($sql_k);

if($query_k){
	echo "success";
}

?>