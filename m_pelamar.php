
<link rel="stylesheet" href="lte/plugins/timepicker/bootstrap-timepicker.min.css">

<?php
include "conn.php";
$idpelamar = $_POST['idpelamar'];

$sql = "select *,permintaan_karyawan.jabatan as jabatans from pelamar join permintaan_karyawan on permintaan_karyawan.nopk = pelamar.jabatandilamar where pelamar.idpelamar='$idpelamar'";

$query = $conn->query($sql);

foreach ($query as $row) {
	

		// file_p_kariawan/
	?>						





	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
			<div class="row mb-2">
				<div class="col-sm-4">Detail :</div>
			</div>
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
		<section class="content">

			<div class="row">
				<div class="box-body">
					<div class="tab">
						<!-- <div class="col-sm-2">&nbsp</div> -->
						<div class="col-md-12 ">

							<div class="box box-success">
								<div class="box-header box-success">
									<h3 class="box-title"><span class="fa fa-user-circle"></span> Data Pribadi</h3>
									<div class="box-tools pull-right"></div>
								</div>

								<div class="box-body row">

									<div class="form-group col-sm-6">
										<label>Nama : </label>&nbsp	
										<div class="input-group">
											<?= $row['namapelamar'] ?>
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->

									<div class="form-group col-sm-6">
										<label>Foto :</label>	
										<div class="input-group" id="tam-foto">
											<img src="<?= $row['fotopelamar'] ?>" width="60px" height="80px">
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-6">
										<div class="col-sm-12 col-xs-12" style="padding: 0px">
											<label>Tempat / Tgl.Lahir :</label>
										</div>	
										<div class="row">
											<div class="col-sm-6 col-xs-6" style="padding-right: 0px;">
												<div class="input-group">
													<div class="input-group">
														<?= $row['tempatlahir'] ?> /
														<?= $row['tgllahir'] ?>
													</div>
												</div>
											</div>
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->

									<div class="form-group col-sm-6">
										<label>No KTP:</label>

										<div class="input-group">
											<?= $row['noktp'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-6">
										<label>Email:</label>

										<div class="input-group">
											<?= $row['email'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-12">
										<label>Alamat:</label>

										<div class="input-group date">
											<?= $row['alamat'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-12">
										<label>Jabatan Yang Di Lamar:</label>

										<div class="input-group date">
											<?= $row['jabatans'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-12">
										<label>Jenis Kelamin:</label>

										<div class="input-group date">
											<?= $row['jkpelamar'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-12">
										<label>Status:</label>

										<div class="input-group date">
											<?= $row['statuspelamar'] ?>
										</div>
										<!-- /.input group -->
									</div>

									<div class="form-group col-sm-6">
										<label>Kebangsaan :</label>	
										<div class="input-group">
											<?= $row['kebangsaan'] ?>
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group -->

									<div class="form-group col-sm-6">
										<label>No Telepon:</label>	
										<div class="input-group">
											<?= $row['notlpn'] ?>
										</div>

										<!-- /.input group -->
									</div>


								</div>  
								<!--			  pembatas-->
								<hr>
								<!--			  Pembatas-->
								<div class="box-header">
									<h3 class="box-title"><span class="fa fa-users"></span> Susunan Keluarga, <small>Termasuk Anda</small></h3>
								</div>
								<div class="box-body">
									<div class="form-group col-sm-6">

										<!-- /.input group -->
									</div>
									<!-- Date dd/mm/yyyy -->
									<table class="table table-bordered">
										<tbody><tr>
											<th style="width: 17%">Hubungan</th>
											<th>Nama</th>
											<th>Usia</th>
											<th>Pendidikan Trakhir</th>
											<th>Keterangan</th>
										</tr>
										<?php
										$sqlso = "SELECT * FROM `pelamar_saudara` where idpelamar='$idpelamar'";

											$queryso = $conn->query($sqlso);
											$nn=1;
											foreach ($queryso as $rowso) {
												if($nn==1){
													$sts="ayah";
												}else if($nn==2){
													$sts='ibu';
												}else{
													$sts='Anak ';
													$sts.= $nn-2;
												}

											?>
										<tr>
											<td><span class="form-control"><?= $sts ?></span></td>
											<td><?= $rowso['nama_s'] ?></td>
											<td><?= $rowso['umur_s'] ?></td>
											<td><?= $rowso['pendidikan_s'] ?></td>
											<td><?= $rowso['keterangan_s'] ?></td>
										</tr>
										<?php $nn++; } ?>

									</tbody>
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

					</div> 
				</div>

				<div class="tab">
					<div class="col-md-12">

						<div class="box box-danger">
							<div class="box-header">
								<h3 class="box-title"><span class="fa fa-mortar-board"></span> Latar Belakang Pendidikan</h3>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>1. Pendidikan Formal:</label>
									<!-- /.input group -->
									<?php
										$sqlpf = "SELECT * FROM `pelamar_pendidikan` where idpelamar='$idpelamar;'";

											$querypf = $conn->query($sqlpf);
											
											foreach ($querypf as $rowpf) {
									?>
									
									<table class="table table-bordered">
										<tbody><tr>
											<th style="width: 10%">Tingkat</th>
											<th colspan="2" style="width: 40%">Nama Sekolah / Perguruan Tinggi</th>
											<th>Jurusan</th>
											<th>IPK</th>
										</tr>
										<tr>
											<td><span class="form-control">SD</span></td>
											<td colspan="2"><?= $rowpf['namasd'] ?></td>
											<td><?= $rowpf['jurusansd'] ?></td>
											<td><?= $rowpf['ipksd'] ?></td>
										</tr>
										<tr>
											<td colspan="" width="20%" class="hidden-xs"></td>
											<td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
											<td><?= $rowpf['tglmasuksd'] ?></td>
											<td><?= $rowpf['tglselesaisd'] ?></td>
										</tr>

										<tr>
											<td><span class="form-control">SMP</span></td>
											<td colspan="2"><?= $rowpf['namasmp'] ?></td>

											<td><?= $rowpf['jurusansmp'] ?></td>
											<td><?= $rowpf['ipksmp'] ?></td>
										</tr>
										<tr>
											<td colspan="" width="20%" class="hidden-xs"></td>
											<td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
											<td><?= $rowpf['tglmasuksmp'] ?></td>
											<td><?= $rowpf['tglselesaismp'] ?></td>
										</tr>

										<tr>
											<td><span class="form-control">SMA</span></td>
											<td colspan="2"><?= $rowpf['namasma'] ?></td>

											<td><?= $rowpf['jurusansma'] ?></td>
											<td><?= $rowpf['ipksma'] ?></td>
										</tr>
										<tr>
											<td colspan="" width="20%" class="hidden-xs"></td>
											<td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
											<td><?= $rowpf['tglmasuksma'] ?></td>
											<td><?= $rowpf['tglselesaisma'] ?></td>
										</tr>

										<tr>
											<td><span class="form-control">Universitas</span></td>
											<td colspan="2"><?= $rowpf['namauniversiatas'] ?></td>

											<td><?= $rowpf['njurusanuniversiatas'] ?></td>
											<td><?= $rowpf['ipkuniversiatas'] ?></td>
										</tr>
										<tr>
											<td colspan="" width="20%" class="hidden-xs"></td>
											<td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
											<td><?= $rowpf['tglmasukuniversiatas'] ?></td>
											<td><?= $rowpf['tglselesaiuniversiatas'] ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>

							</div>

							<hr>
							<div class="form-group">
								<label>2. Pendidikan Non Formal: <small>(Termasuk Kursus, Pelatihan, Seminar, Lokakarya, dll) </small></label>
								<br>
								<!-- /.input group -->
								<table class="table table-bordered">
									<tbody id="tbody_pelatihan">
										<tr>
											<th>Nama Kursus / Pelatihan</th>
											<th>Penyelenggara</th>
											<th>tgl/bulan/tahun</th>
											<th>Keterangan</th>
										</tr>
									</tbody>
									<tfoot id="u_pelatihan"><?php
										$sqlpnf = "SELECT * FROM `pelamar_pendidikan` where idpelamar='$idpelamar'";

											$querypnf = $conn->query($sqlpnf);
											
											foreach ($querypnf as $rowpnf) {
									?>

										<tr>
											<th><?= $rowpnf['nama_pelatihan']?></th>
											<th><?= $rowpnf['penyelenggaraan_pelatihan']?></th>
											<th><?= $rowpnf['tgl_pelatihan']?></th>
											<th><?= $rowpnf['keterangan_pelatihan']?></th>
										</tr>
										<?php } ?>
									</tfoot>
								</table>

							</div>

							<div class="form-group">
								<label>3. Bahasa Yang Dikuasai</label>

								<div class="box-body">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<th class="col-sm-6">Foreign Language Cimpetencies / Bahasa Asing Yang Dikuasai </th>
												<th>Spoken/Lisan</th>
												<th>Writer/Menulis</th>
											</tr>
										</tbody>
										<tfoot id="u_bahasa">
											<?php 
											$sqlb = "SELECT * FROM `pelamar_bahasa` where idpelamar='$idpelamar;'";
											$queryb = $conn->query($sqlb);
											
											foreach ($queryb as $rowb) {
											?>

											<tr>
												<th class="col-sm-6"><?= $rowb['nama_bahasa']; ?></th>
												<th><?php $lisan = explode('_', $rowb['lisan']); echo $lisan[0]; ?></th>
												<th><?php $write = explode('_', $rowb['menulis']); echo $write[0];?></th>
											</tr>
											<?php } ?> 
										</tfoot>
									</table>
								</div>

							</div>

						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->

				</div>
			</div>
			<div class="tab">
				<div class="col-md-12 ">

					<div class="box box-info">
						<div class="box-header">
							<h3 class="box-title"><i class="fa fa-industry"></i> Working Experience <small>Pengalaman Kerja</small> </h3>
						</div>
						<div class="box-body">
							<?php 
											$sqlpen = "SELECT * FROM `pelamar_pengalaman` where idpelamar='$idpelamar'";
											$querypen = $conn->query($sqlpen);
											
											foreach ($querypen as $rowpen) {
											?>
							<div id="head_pengalaman" class="form-group col-sm-12">
								<div class="form-group col-sm-12">
									<br>
									<label>Nama perusahaan:</label>	
									<div class="input-group">
									 <?= $rowpen['pengalaman_nama'] ?>
									</div>
									<!-- /.input group -->
								</div>
								<div class="form-group col-sm-12">
									<label>Bergerak Di Bidang:</label>	
									<div class="input-group">
									 <?= $rowpen['pengalaman_bererak'] ?>
									</div>
									<!-- /.input group -->
								</div>
								<div class="col-sm-12 row">
									<div class="form-group col-sm-6">
										<label>Jabatan:</label>	
										<div class="input-group">

									 		<?= $rowpen['pengalaman_jabatang'] ?>
										</div>
										<!-- /.input group -->
									</div>
									<div class="form-group col-sm-6">
										<label>Gaji:</label>	
										<div class="input-group">
											<div class="input-group-addon">
											</div>
									 		<?= $rowpen['pengalaman_gaji'] ?>
										</div>
										<!-- /.input group -->
									</div>
								</div>
								<div class="form-group col-sm-12 row">
									<div class="col-sm-6">

										<label>Mulai bekerja:</label>	
										<div class="input-group">
											<div class="input-group-addon">
											</div>

									 <?= $rowpen['pengalaman_mulai'] ?>
										</div>
									</div>
									<div class="col-sm-6">
										<label>Berhenti</label>	
										<div class="input-group">
											<div class="input-group-addon">
											</div>
											
									 <?= $rowpen['pengalaman_keluar'] ?>
										</div>
									</div>

									<!-- /.input group -->
								</div>
								<div class="form-group col-sm-12">
									<label>Alasan Berhenti:</label>	
									<div class="input-group">
										<div class="input-group-addon">
										</div>

									 <?= $rowpen['pengalaman_alasan_berhenti'] ?>
									</div>
									<!-- /.input group -->
								</div>

								<div class="form-group col-sm-12">
									<label>Gambaran Pekerjaan:</label>	
									<div class="input-group">
										<div class="input-group-addon">
										</div>
									 <?= $rowpen['pengalaman_gambaran_pekerjaan'] ?>
									</div>
									<!-- /.input group -->
								</div>
							</div>
						</div>
						<hr>
						<?php } ?>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
			<div class="tab">
				<div class="col-md-12">

					<div class="box box-warning">
						<div class="box-header">
							<h3 class="box-title"><span class="fa fa-medkit"></span> Riwayat Kesehatan </h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<!-- /.input group -->
								<table class="table table-striped table-bordered">
									<thead align="center">
										<th>Diseases (Penyakit)</th>
										<th>Has Been Hospitalized at (dd/mm/yy) (Pernah dirawat pada (tgl/blm/thn))</th>
										<th>Notes (Keterangan)</th>
									</thead>
									<tbody>
											<?php 
											$sqlskit = "SELECT * FROM `palamar_penyakit` where idpelamar='$idpelamar'";
											$queryskit = $conn->query($sqlskit);
											
											foreach ($queryskit as $rowskit) {
											?>		
										<tr>
											<td><?= $rowskit['namapenyakit'] ?></td>
											<td><?= $rowskit['tglmasuk'] ?></td>
											<td><?= $rowskit['notepenyakit'] ?></td>
										</tr>
										<?php
												}
										?>
									</tbody>
								</table>

</div>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</div>
</div>

<!-- batas------------------------------------------------------------------tab------------------------------- -->
<div class="tab">
	<div class="col-md-12">

		<div class="box box-danger">
			<div class="box-header">
				<h3 class="box-title"><span class="fa fa-pencil-square-o"></span> Refrensi</h3>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label>1. Silahkan tulis nama kerabat untuk referensi anda!</label><br>
					
					<hr>
					<!-- /.input group -->
					<table class="table table-bordered">
						<tbody id="u_ref_kerabat">
							<?php 
											$sqlkrb = "SELECT * FROM `pelamar_kerabat` where idpelamar='$idpelamar'";
											$querykrb = $conn->query($sqlkrb);
											
											foreach ($querykrb as $rowkrb) {
											?>	
							<tr>
								<td>Name <br> <i>Nama</i></td>
								<td><?= $rowkrb['nama_k'] ?></td>
								<td>Phone Number <br> <i>No Telepon</i></td>
								<td><?= $rowkrb['telp_k'] ?></td>
							</tr>
							<tr>
								<td>Position <br> <i>Jabatan</i></td>
								<td><?= $rowkrb['posisi_k'] ?></td>
								<td>Company <br> <i>Perusahaan</i></td>
								<td><?= $rowkrb['perusahaan_k'] ?></td>
							</tr>
							<tr>
								<td>Relation <br> <i>Hubungan</i></td>
								<td colspan="3"><?= $rowkrb['hubungan_k'] ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<!-- /.input group -->
				</div>

				<hr>
				<div class="form-group">
					<label>2.Silahkan isi nama orang yang dapat di hubungi segera dalam keadaan mendesak/darurat!</label>
					<br>
					<!-- /.input group -->
					<table class="table table-bordered">
						<tbody id="tbody_nama">

							<tr>
								<th>Name / <small><i>Nama</i></small></th>
								<th>Relation / <small><i>Hubungan</i></small></th>
								<th>Phone Number / <small><i>No Telepon</i></small></th>
							</tr>
						</tbody>
						<tfoot id="u_nama">

							<?php 
											$sqlpnt = "SELECT * FROM `pelamar_nama` where idpelamar='$idpelamar'";
											$querypnt = $conn->query($sqlpnt);
											
											foreach ($querypnt as $rowpnt) {
											?>	

							<tr>
								<td><?= $rowpnt['nama_penting']?></td>
								<td><?= $rowpnt['hubungan_penting']?></td>
								<td><?= $rowpnt['telp_penting']?></td>
							</tr>
											<?php } ?>
						</tfoot>
					</table>

				</div>

				<div class="form-group">
					<label>3. Silahkan isi kolom keterangan sesuai dengan kesedian Anda!</label>
					<br>

					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>No</th>
								<th>Your Availability on : <br> <small><i>Kesediaan Anda perihal</i></small></th>
								<th>Keterangan</th>
							</tr>
						</tbody>
						<tfoot id="">

							<tr>
								<td>1</td>
								<td>
									Ditempatkan di kota lain <br>
									Jika ya ingin ditempatkan di mana? Jika tidak beri alasan
								</td>
								<td>
									<?= $row['ditempatkan']?>
								</td>
							</tr>

							<tr>
								<td>2</td>
								<td>
									Gaji yang di inginkan
								</td>
								<td>
									<?= $row['ingingaji']?>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<hr>

				<div class="form-group">


					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									Apakah Anda memiliki keluarga, kerabat, atau teman yang bekerja di perusahaan ini Sebutkan!
								</td>
								<td>
									<?= $row['adakeluarga']?>
								</td>
							</tr>
							<tr>
								<td>
									Apakah Anda pernah Melamar ke Perusahaaj ini sebelumnya? Jika ya, untuk posisi apa?
								</td>
								<td>
									<?= $row['pernahlamar']?>
								</td>
							</tr>
							<tr>
								<td>
									Apakah Anda perham terlibat dengan pihak kepolisian berkaitan dengan isu pelanggaran kriminal,atau pelanggaran perdata?
								</td>
								<td>
									<?= $row['pelanggaran']?>
								</td>
							</tr>
							<tr>
								<td>
									Apakah anda memiliki kepemilikan atau keteriakatan dengan perusahaan lain?
								</td>
								<td>
									<?= $row['perusahaanlain']?>
								</td>
							</tr>
							<tr>
								<td>
									Jika Anda di terima, kapan Anda dapat mulai bekerja?
								</td>
								<td>
									<?= $row['mulaikerja']?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>

		</div>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<div class="col-sm-6" align="left">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		<div class="col-sm-6" align="right">
											<button onclick="approve('<?=$row[idpelamar]?>')" id="approve" class="btn btn-success fa fa-check-square-o" title="Approve"></button>
											<button onclick="reject('<?=$row[idpelamar]?>')" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
		</div>
	</div>

	<?php
}
?>
<script src="lte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
