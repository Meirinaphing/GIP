<?php
$idpelamar = $_POST['idpelamar'];
	$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

	$sql = "select * from pelamar where idpelamar='$idpelamar'";

	$query = $conn->query($sql);

	foreach ($query as $row) {
		$jlh = $row['jum_pria'] + $row['jum_wanita'];

		$status = $row['status'];
		$a=$row['p_bud_no'];
		$p_bud_no = explode("/", $a);
		if($p_bud_no[1]==""){
			$doc ="Menggantikan Formasi karena : ".$a;
		}else{
			$doc ="Berdasarkan Persetujuan Budget Manpower Planning : <a href='".$a."'>".$p_bud_no[1]."</a>";

		}

		// file_p_kariawan/
?>						





	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
			<div class="row mb-2">
				<div class="col-sm-4">Kirim Email Kepada</div>
				<div class="col-sm-4" style="text-align: center;"></div>
				<div class="col-sm-4" style="text-align: right;"><?=$row['namapelamar'];?></div>
			</div>
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
		
		<div class="row ">
			<div class="col-sm-12">Kepada :
			<input type="text" value="<?=$row['email'];?>" readonly name="" class="form-control">
			</div>
			<div class="col-sm-12">
				Isi Email :
				<textarea class="form-control"></textarea></div>
		</div>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<div class="col-sm-6" align="left">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		<div class="col-sm-6" align="right">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Send Email</button>
		</div>
	</div>

<?php
}
?>
