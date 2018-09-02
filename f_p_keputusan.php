<?php
include 'conn.php';
$idpelamar = $_POST['idpelamar'];
	$sql_pelamar = "SELECT * FROM `pelamar` WHERE `pelamar`.`idpelamar` = $idpelamar;";
	$query_pelamar = $conn->query($sql_pelamar);
		foreach ($query_pelamar as $row_pelamar){
			$namapelamar = $row_pelamar['namapelamar'];
			$fotopelamar = $row_pelamar['fotopelamar'];
			$jabatandilamar = $row_pelamar['jabatandilamar'];
		}
	$sql_wawancara = "SELECT * FROM `wawancara` WHERE nopelamar='$idpelamar'";
	$query_wawancara = $conn->query($sql_wawancara);
	$n=1;
		foreach ($query_wawancara as $row_wawancara){
			$id[$n]=$row_wawancara['id'];
			$nilai[$n]=$row_wawancara['nilai'];
		$n++;	
		}


	$sql_karyawan = "SELECT * FROM `permintaan_karyawan` WHERE nopk='$jabatandilamar'";
	$query_karyawan = $conn->query($sql_karyawan);
		foreach ($query_karyawan as $row){
			$divisi = $row['divisi'];
			$job_kelas = $row['job_kelas'];
			$jabatan = $row['jabatan'];
		}	
	
?>
					<div class="row">  
						<h3 class="card-title col-sm-4">Jabatan : <?= $jabatan ?></h3>
						<h3 class="card-title col-sm-4" style="text-align: center;">Divisi : <?= $divisi ?></h3>
						<h3 class="card-title col-sm-4" style="text-align:right;">Kelas Jabatan : <?= $job_kelas ?></h3>
					</div>
					<hr>
					<div class="row">  
						<h3 class="card-title col-sm-4">Nilai Wawancara 1 : <b> <?= $nilai[1]; ?> </b></h3>
						<h3 class="card-title col-sm-4" style="text-align: center;">Nilai Wawancara 2 : <b> <?= $nilai[2]; ?> </b></h3>
						<h3 class="card-title col-sm-4" style="text-align:right;">Rata-Rata : <b><u><?php echo ($nilai[1] + $nilai[2])/2; ?></u></b></h3>
					</div>

						<hr>
					<div class="row">
						<label class="control-label col-sm-2" style="text-align: right;">Tanggal Masuk Kerja</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="tglmasuk" name="tglmasuk" placeholder="Tanggal Masuk Kerja">
								</label>
						

						<label class="control-label col-sm-2" style="text-align: right;">Gaji</label>
								<label class="col-sm-4">
								  <input type="text" class="form-control wajib form-control-sm" id="gaji" name="gaji" placeholder="Gaji">
								</label>

						<label class="control-label col-sm-12" style="">Tunjangan :</label>
						<label class="control-label col-sm-2" style="text-align: right;">Uang Makan</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="uangmakan" name="uangmakan" placeholder="Uang Makan">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Pengobatan</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="pengobatan" name="pengobatan" placeholder="Pengobatan">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Transportasi</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="transportasi" name="transportasi" placeholder="Transportasi">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Jamsostek</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="jamsostek" name="jamsostek" placeholder="Jamsostek">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Fasilitas Lain</label>
								<label class="col-sm-10">
								  <textarea class="form-control wajib form-control-sm" id="fasilitaslain" name="fasilitaslain" placeholder="Fasilitas Lain"></textarea>
								</label>
					</div>
					<hr>
					<div align="right">
						<button class="btn btn-success" type="button" onclick="simpan()">Send</button>
					</div>