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

					<table id="example2" class="table table-hover">
						<thead>
							<tr align="center">
								<th>Faktor</th>
								<th>Rendah</th>
								<th>Kurang</th>
								<th>Cukup</th>
								<th>Baik</th>
								<th>Tinggi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Komunikasi</td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kecerdasan</td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kepercayaan Diri</td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kemampuan Umum</td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kemampuan Khusus</td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kepemimpinan</td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Motivasi</td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Pengalaman</td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Pengambilan Keputusan</td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Sosialisasi</td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" value="5"></td>
							</tr>
						</tbody>
					</table>
					<hr>
					<div align="right">
						<button class="btn btn-success" type="button" onclick="simpan()">Send</button>
					</div>