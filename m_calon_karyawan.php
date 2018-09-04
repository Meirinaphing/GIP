<?php
$nopk = $_POST['nopk'];
	$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

	$sql = "select * from permintaan_karyawan where nopk='$nopk'";

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
				<div class="col-sm-4"><?=$row['nopk'];?></div>
				<div class="col-sm-4" style="text-align: center;"><?=$row['iduser'];?></div>
				<div class="col-sm-4" style="text-align: right;"><?=$row['tgl'];?></div>
			</div>
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
		<div class="row mb-2">
			<div class="col-sm-4">Divisi/Dept : <?=$row['divisi'];?></div>
			<div class="col-sm-4" style="text-align: center;">Job Kelas : <?=$row['job_kelas'];?></div>
			<div class="col-sm-4" style="text-align: right;">Jabatan : <?=$row['jabatan'];?></div>
		</div>
		<hr>
		<div class="row mb-2">
			<div class="col-sm-3">Jumlah : <?=$row['jum_pria'];?> Pria <?=$row['jum_wanita'];?> Wanita</div>
			<div class="col-sm-3" style="text-align: center;">Umur : <?=$row['umur'];?></div>
			<div class="col-sm-3" style="text-align: center;">Pendidikan : <?=$row['pendidikan'];?></div>
			<div class="col-sm-3" style="text-align: right;">Status : <?=$row['status_karyawan'];?></div>
		</div>
		<div>
			<b> Tugas dan Tanggung Jawab : </b> <br>
			<?=$row['uraian_p'];?>
		</div>
		<div class="row mb-2">
			<div class="col-sm-4">Pengalaman : <?=$row['pengalaman_y'];?> Tahun</div>
			<div class="col-sm-4" style="text-align: center;">Gaji : <?=$row['job_kelas'];?></div>
			<div class="col-sm-4" style="text-align: right;">Jabatan : <?=$row['jabatan'];?></div>
		</div>
		<hr>
		<div class="row mb-2">
			<div class="col-sm-12"><?php echo $doc; ?></div>
		</div>
		<!-- 
			- Persetujuan Budget Manpower Planning
				* ya, file
				* tidak, alasan
			- Pengalaman
			- Kemampuan yang diharapkan
			- Gaji
			- 4. Rencana
		 -->

	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>

<?php
}
?>
