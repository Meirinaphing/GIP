<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}

?>


<div class="content">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form Penilaian</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Home Penilaian</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						<div class="row">  
							<h3 class="card-title col-sm-6">Nama : <?=$_SESSION['user'];?></h3>
							<h3 class="card-title col-sm-6" style="text-align:right;">Tanggal : <?php echo date("D").','.date('d-M-Y') ?></h3>
						</div>
						<div class="row">  
							<h3 class="card-title col-sm-4">Jabatan : </h3>
							<h3 class="card-title col-sm-4" style="text-align: center;">Divisi : </h3>
							<h3 class="card-title col-sm-4" style="text-align:right;">Kelas Jabatan : </h3>
						</div>
					</h3>
				</div>
				<div class="card-body">
					
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
								<td align="center"><input type="radio" name="komunikasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="komunikasi" class="flat-red"></td>
							</tr>
							<tr>
								<td>Kecerdasan</td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kecerdasan" class="flat-red"></td>
							</tr>
							<tr>
								<td>Kepercayaan Diri</td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red"></td>
								<td align="center"><input type="radio" name="percaya_diri" class="flat-red"></td>
							</tr>
							<tr>
								<td>Kemampuan Umum</td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_umum" class="flat-red"></td>
							</tr>
							<tr>
								<td>Kemampuan Khusus</td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red"></td>
								<td align="center"><input type="radio" name="kemampuan_khusus" class="flat-red"></td>
							</tr>
							<tr>
								<td>Kepemimpinan</td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red"></td>
								<td align="center"><input type="radio" name="kepemimpinan" class="flat-red"></td>
							</tr>
							<tr>
								<td>Motivasi</td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="motivasi" class="flat-red"></td>
							</tr>
							<tr>
								<td>Pengalaman</td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengalaman" class="flat-red"></td>
							</tr>
							<tr>
								<td>Pengambilan Keputusan</td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red"></td>
								<td align="center"><input type="radio" name="pengambilan_keputusn" class="flat-red"></td>
							</tr>
							<tr>
								<td>Sosialisasi</td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red" checked></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red"></td>
								<td align="center"><input type="radio" name="sosialisasi" class="flat-red"></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>

	</section>
</div>