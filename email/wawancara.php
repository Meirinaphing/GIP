<?php
require 'PHPMailer/PHPMailerAutoload.php';
include("../conn.php");

	$ema=$_POST['email'];
	$jam=$_POST['jam'];
	$tanggal=$_POST['tgl'];
	$idpelamar=$_POST['idpelamar'];
	$n=0;

												$sql1 = "SELECT * FROM `wawancara` where nopelamar ='$idpelamar'";
												$query1 = $conn->query($sql1);
													foreach ($query1 as $row1) {
														$n++;
														$cek=$row1['status'];
													}
												if ($cek =="Fail"){
													$faill=" - Ditunda sementara";
												}
												$n++;
												if($n<1){
									$status="Belum Wawancara"; 			
									}else{
									$status="wawancara ke ".$n."$faill"; 
								}
								



$mail = new PHPMailer;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'hai.ratu.textile@gmail.com';          // SMTP username
$mail->Password = 'cumaratuyangtau'; 			// SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('hai.ratu.textile@gmail.com', 'Ratu Texile');
$mail->addReplyTo('hai.ratu.textile@gmail.com', 'Ratu Textile');
$mail->addAddress($ema);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '
Tanggal Wawancara : '.$tanggal.'<br>
Jam Wawancara : '.$jam.'
';
$bodyContent .= '<p></p>';

$mail->Subject = 'Wawancara';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Email Gagal Kirim';
} else {
	echo "Email Berhasil di kirim";

	$sql = "UPDATE `calon_karyawan` SET `tgl` = '$tanggal', `waktu` = '$jam', `status` = '$status' WHERE `calon_karyawan`.`idpelamar` = $idpelamar;";
	$query = $conn->query($sql);
	

}

?>