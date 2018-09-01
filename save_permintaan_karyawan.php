<?php

//$conn = new PDO("mysql:host=localhost;dbname=spk","root","");
include 'conn.php';

session_start();



if(!isset($_SESSION['user'])){
	header("Location:index.php");
}
$nopk = $_POST['nopk'];



function randomString($length = 5) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str  .= $characters[$rand];
    }
    return $str;
}

$rdm1 = randomString();

$username = $_SESSION['user'];
$tanggal = date('Y-m-d');
$divisi = $_POST['divisi'];
$job = $_POST['job'];
$jabatan = $_POST['jabatan'];
$pria = $_POST['pria'];
$wanita = $_POST['wanita'];
$approval = $_POST['approval'];
$mp = $_POST['mp'];
if( $mp!="promosi" && $mp!="mutasi" && $mp!="pensiun" && $mp!="berhenti"){
	$mp_f=$_FILES['mp1']['name'];
	$fileError1 = $_FILES['mp1']['error'];
	$move = move_uploaded_file($_FILES['mp1']['tmp_name'],'file_p_kariawan/'.$rdm1.$mp_f );
	$mp="file_p_kariawan/".$rdm1.$mp_f;
	
	}


$status = $_POST['status'];
$bulan = $_POST['bulan'];
$jobdesk = $_POST['jobdesk'];
$umur = $_POST['umur'];
$pendidikan = $_POST['pendidikan'];
$pengalaman = $_POST['pengalamann'];
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



 $sql = "insert into permintaan_karyawan values('$nopk','$username','$tanggal','$divisi','$job','$jabatan','$pria','$wanita','$approval','$mp','$status','$bulan','$jobdesk','$umur','$pendidikan','$pengalaman','$tahun','$kemampuan','$startgaji','$endgaji','$rencana','$rtahun','$jlhorg','$jlhkaryawan','$jlhorg2','$rencanapenambahan','$jlhorg3','Submited')";

$query = $conn->query($sql);
//return true;
if($query){
	$cek="Data Telah Di Proses";
}else{
	$cek="Terjadi Kesalahan Pada Database";
}

?>
<script type="text/javascript">
	alert('<?php echo $cek; ?>');
	window.close();
</script>