<?php
include 'conn.php';


$divisi = $_POST['divisi'];

									 $sqlmaxkom = "SELECT MAX(komunikasi) as maxkom FROM nilai_wawancara";
											$querymaxkom = $conn->query($sqlmaxkom);
											foreach ($querymaxkom as $maxkom) {
									 			$kommax = $maxkom['maxkom'];
									}
									 

									 $sqlmaxkec = "SELECT MAX(kecerdasan) as maxkec FROM nilai_wawancara";
											$querymaxkec = $conn->query($sqlmaxkec);
											foreach ($querymaxkec as $maxkec) {
									 			$kecmax = $maxkec['maxkec'];
									 }
									 	
								 	$sqlmaxpdiri = "SELECT MAX(pdiri) as maxpdiri FROM nilai_wawancara";
											$querymaxpdiri = $conn->query($sqlmaxpdiri);
											foreach ($querymaxpdiri as $maxpdiri) {
									 			 $dirimax = $maxpdiri['maxpdiri'];
									 } 	

								 	$sqlmaxkumum = "SELECT MAX(kumum) as maxkumum FROM nilai_wawancara";
											$querymaxkumum = $conn->query($sqlmaxkumum);
											foreach ($querymaxkumum as $maxkumum) {
									 			$kumummax = $maxkumum['maxkumum'];
									 } 	
									 
								 	$sqlmaxkkhusus = "SELECT MAX(kkhusus) as maxkkhusus FROM nilai_wawancara";
											$querymaxkkhusus = $conn->query($sqlmaxkkhusus);
											foreach ($querymaxkkhusus as $maxkkhusus) {
									 			$kkhususmax = $maxkkhusus['maxkkhusus'];
									 }
									 
								 	$sqlmaxkepemimpinan = "SELECT MAX(kepemimpinan) as maxkepemimpinan FROM nilai_wawancara";
											$querymaxkepemimpinan = $conn->query($sqlmaxkepemimpinan);
											foreach ($querymaxkepemimpinan as $maxkepemimpinan) {
									 			$kepemimpinanmax = $maxkepemimpinan['maxkepemimpinan'];
									 }
									 
								 	$sqlmaxmotivasi = "SELECT MAX(motivasi) as maxmotivasi FROM nilai_wawancara";
											$querymaxmotivasi = $conn->query($sqlmaxmotivasi);
											foreach ($querymaxmotivasi as $maxmotivasi) {
									 			$motivasimax = $maxmotivasi['maxmotivasi'];
									 }
									 
								 	$sqlmaxpengalaman = "SELECT MAX(pengalaman) as maxpengalaman FROM nilai_wawancara";
											$querymaxpengalaman = $conn->query($sqlmaxpengalaman);
											foreach ($querymaxpengalaman as $maxpengalaman) {
									 			$pengalamanmax = $maxpengalaman['maxpengalaman'];
									 }
									 
								 	$sqlmaxkeputusan = "SELECT MAX(pkeputusan) as maxkeputusan FROM nilai_wawancara";
											$querymaxkeputusan = $conn->query($sqlmaxkeputusan);
											foreach ($querymaxkeputusan as $maxkeputusan) {
									 			$keputusanmax = $maxkeputusan['maxkeputusan'];
									 }
									 
								 	$sqlmaxsosialisasi = "SELECT MAX(sosialisasi) as maxsosialisasi FROM nilai_wawancara";
											$querymaxsosialisasi = $conn->query($sqlmaxsosialisasi);
											foreach ($querymaxsosialisasi as $maxsosialisasi) {
									 			$sosialisasimax = $maxsosialisasi['maxsosialisasi'];
									 }

									 $sqltotmaxwawancara = "SELECT MAX(komunikasi + kecerdasan + pdiri + kumum + kkhusus + kepemimpinan + motivasi + pengalaman + pkeputusan + sosialisasi) as 'totmaxwawancara' FROM nilai_wawancara";
											$querytotmaxwawancara = $conn->query($sqltotmaxwawancara);
											foreach ($querytotmaxwawancara as $totmaxwawancara) {
									 			$maxwawan = $totmaxwawancara['totmaxwawancara'];
									 }

									 $sqlkk = "SELECT * FROM `calon_karyawan`";
											$querykk = $conn->query($sqlkk);
											$minpenyakit=0;
											foreach ($querykk as $kk) {
												$num=0;
									 			$kk['idpelamar'];
									 			 $sqlnum = "SELECT * FROM `palamar_penyakit` where idpelamar='$kk[idpelamar]'";
												$querynum = $conn->query($sqlnum);
													foreach ($querynum as $numm) {
															$num++;
													}
													if($num<$minpenyakit){
														$minpenyakit=$num;
													}
									 }

									 $sqlthn = "SELECT  MAX(TIMESTAMPDIFF(YEAR, pengalaman_mulai, pengalaman_keluar)) AS selisih_tahun FROM pelamar_pengalaman";
											$querythn = $conn->query($sqlthn);
											
											foreach ($querythn as $thn) {
												
									 			$maxthn = $thn['selisih_tahun'];
									 			 
									 }

									 $sqlkkingin = "SELECT * FROM `calon_karyawan`";
											$querykkingin = $conn->query($sqlkkingin);
											$gaji=100000000000000000000000000;
											foreach ($querykkingin as $kk) {
									 			 $sqlingin = "SELECT ingingaji FROM `pelamar` where idpelamar='$kk[idpelamar]'";
												$queryingin = $conn->query($sqlingin);
													foreach ($queryingin as $ingin) {
															$x = str_replace('Rp', '', $ingin['ingingaji']);
															$x = (int)str_replace('.', '', $x);
															if($x<$gaji){
																$gaji = $x;
															} 
													}
									 }

									 $sqlkkbahasa = "SELECT * FROM `calon_karyawan`";
											$querykkbahasa = $conn->query($sqlkkbahasa);
											$nilaibhs = 0;
											foreach ($querykkbahasa as $kkbahasa) {
												$nnlai=0;
									 			 $sqlbahasa = "SELECT * FROM `pelamar_bahasa` where idpelamar='$kkbahasa[idpelamar]'";
												$querybahasa = $conn->query($sqlbahasa);
													foreach ($querybahasa as $bahasa) {
															$nnlai++;
															if($bahasa['lisan']=="active_lisan"){
																$nnlai++;
															}
															if($bahasa['menulis']=="active_write"){
																$nnlai++;
															}
															if($nnlai>$nilaibhs){
																$nilaibhs = $nnlai;
															} 
													}
									 }


?>
		
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Nama</th>
								<?php


								$sql = "SELECT * FROM `isibobot`where divisi = '$divisi'";

								$query = $conn->query($sql);
								foreach ($query as $row) {

									?>
										<th><?=$row['namabobot'];?></th>
									<?php
									$field="";
								}

								?>
									<th>Total</th>
								</tr>
							</thead>

							<tbody>
								<?php
									$sqlckaryawan = "SELECT *,pelamar.namapelamar,permintaan_karyawan.nopk FROM `calon_karyawan` join pelamar on calon_karyawan.idpelamar = pelamar.idpelamar join permintaan_karyawan on permintaan_karyawan.nopk = pelamar.jabatandilamar where permintaan_karyawan.divisi='$divisi'";
											$queryckaryawan = $conn->query($sqlckaryawan);
											foreach ($queryckaryawan as $isikaryawan){
												$komunikasiu = 0;
												$kecerdasanu = 0;
												$percaya_diriu = 0;
												$kemampuan_umumu = 0;
												$kemampuankhususu = 0;
												$kepemimpinanu = 0;
												$motivasiu = 0;
												$pengalamanu = 0;
												$pkeputusanu = 0;
												$sosialisasiu = 0;
												$semua = 0;
								?>
								<tr>
									<th><?= $isikaryawan['namapelamar'] ?></th>
								<?php

									$sql2 = "SELECT AVG(nilai_wawancara.komunikasi) as komunikasi ,AVG(nilai_wawancara.kecerdasan) as kecerdasan, AVG(nilai_wawancara.pdiri) as pdiri,AVG(nilai_wawancara.kumum) as kumum ,AVG(nilai_wawancara.kkhusus) as kkhusus,AVG(nilai_wawancara.kepemimpinan) as kepemimpinan,AVG(nilai_wawancara.motivasi) as motivasi,AVG(nilai_wawancara.pengalaman)as pengalaman,AVG(nilai_wawancara.pkeputusan) as pkeputusan,AVG(nilai_wawancara.sosialisasi) as sosialisasi ,wawancara.idpelamar FROM wawancara join nilai_wawancara on wawancara.id = nilai_wawancara.idwawancara where wawancara.idpelamar = '$isikaryawan[idpelamar]' ";
									$query2 = $conn->query($sql2);
									foreach ($query2 as $rows) {
										$komunikasiu=$rows['komunikasi'];
										$kecerdasanu=$rows['kecerdasan'];
										$percaya_diriu=$rows['pdiri'];
										$kemampuan_umumu=$rows['kumum'];
										$kemampuankhususu=$rows['kkhusus'];
										$kepemimpinanu=$rows['kepemimpinan'];
										$motivasiu=$rows['motivasi'];
										$pengalamanu=$rows['pengalaman'];
										$pkeputusanu=$rows['pkeputusan'];
										$sosialisasiu=$rows['sosialisasi'];
									}

								$sql = "SELECT * FROM `isibobot`where divisi = '$divisi'";
								$query = $conn->query($sql);
								foreach ($query as $roww) {
										$nilai=0;
										if($roww['namafield']=="komunikasi"){ 
											$bobot=$roww['nilai']/100;
											$nilai = $komunikasiu/$kommax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="kecerdasan"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $kecerdasanu/$kecmax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php

										}
									 else if($roww['namafield']=="pdiri"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $percaya_diriu/$dirimax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="kumum"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $kemampuan_umumu/$kumummax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="kkhusus"){

											$bobot=$roww['nilai']/100;
											$nilai = $kemampuankhususu/$kkhususmax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="kepemimpinan"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $kepemimpinanu/$kepemimpinanmax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="motivasi"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $motivasiu/$motivasimax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="pengalaman"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $pengalamanu/$pengalamanmax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="keputusan"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $pkeputusanu/$keputusanmax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= $nilai; ?></th>
											<?php
										}
									 else if($roww['namafield']=="sosialisasi"){ 

											$bobot=$roww['nilai']/100;
											$nilai = $sosialisasiu/$sosialisasimax;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="rrtw"){ 

									 $sqltotmaxwawancara = "SELECT MAX(nilai_wawancara.komunikasi + nilai_wawancara.kecerdasan + nilai_wawancara.pdiri + nilai_wawancara.kumum + nilai_wawancara.kkhusus + nilai_wawancara.kepemimpinan + nilai_wawancara.motivasi + nilai_wawancara.pengalaman + nilai_wawancara.pkeputusan + nilai_wawancara.sosialisasi) as 'totmaxwawancara' from nilai_wawancara join wawancara on nilai_wawancara.idwawancara = wawancara.idpelamar where wawancara.idpelamar = '$isikaryawan[idpelamar]'";
											$querytotmaxwawancara = $conn->query($sqltotmaxwawancara);
											foreach ($querytotmaxwawancara as $totmaxwawancara) {
									 			$wawanuser = $totmaxwawancara['totmaxwawancara'];
									 }

											$bobot=$roww['nilai']/100;
											$nilai = $wawanuser/$maxwawan;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
									}
									 else if($roww['namafield']=="penyakit"){ 
									 	$jmpnk=1;
									 	$sqlnum = "SELECT * FROM `palamar_penyakit` where idpelamar='$kk[idpelamar]'";
												$querynum = $conn->query($sqlnum);
													foreach ($querynum as $numm) {
															$jmpnk++;
													}


											$bobot=$roww['nilai']/100;

											$nilai = $minpenyakit/$jmpnk;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php

													
									 }
									 else if($roww['namafield']=="pkkerja"){


										  $sqlthn = "SELECT  MAX(TIMESTAMPDIFF(YEAR, pengalaman_mulai, pengalaman_keluar)) AS selisih_tahun FROM pelamar_pengalaman where idpelamar = '$isikaryawan[idpelamar]'";
												$querythn = $conn->query($sqlthn);
												
												foreach ($querythn as $thn) {
													
										 			$uthn = $thn['selisih_tahun'];
										 			 
										 }
										 $bobot=$roww['nilai']/100;
											$nilai = $uthn/$maxthn;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
									}
									 else if($roww['namafield']=="bahasa"){ 

									 $nnlai = 0; 
									 		 $sqlbahasa = "SELECT * FROM `pelamar_bahasa` where idpelamar='$isikaryawan[idpelamar]'";
												$querybahasa = $conn->query($sqlbahasa);
													foreach ($querybahasa as $bahasa) {
															$nnlai++;
															if($bahasa['lisan']=="active_lisan"){
																$nnlai++;
															}
															if($bahasa['menulis']=="active_write"){
																$nnlai++;
															}
													}
										 $bobot=$roww['nilai']/100;
											$nilai = $nnlai/$nilaibhs;
											$semua +=  $nilai * $bobot;
											?>
											<th><?= round($nilai,3); ?></th>
											<?php
										}
									 else if($roww['namafield']=="gaji"){
									 	$sqlingin = "SELECT ingingaji FROM `pelamar` where idpelamar='$isikaryawan[idpelamar]'";
												$queryingin = $conn->query($sqlingin);
													foreach ($queryingin as $ingin) {
															$gj = str_replace('Rp', '', $ingin['ingingaji']);
															$gj = (int)str_replace('.', '', $gj);
													}

										 $bobot=$roww['nilai']/100;
											$nilai = $gaji/$gj;
											$semua +=  $nilai * $bobot;
											?>
											<th><?=round($nilai,3); ?></th>
											<?php


									 }
									?>
										
									<?php
									$field="";
								}

								?>
									<th><?= round($semua,3); ?></th>
								</tr>
								<?php
							}
								?>
							</tbody>

							<tfoot>
								<tr>
									<th>Nama</th>
								<?php


								$sql = "SELECT * FROM `isibobot`where divisi = '$divisi'";

								$query = $conn->query($sql);
								foreach ($query as $row) {

									?>
										<th><?=$row['namabobot'];?></th>
									<?php
									$field="";
								}

								?>
									<th>Total</th>
								</tr>
							</tfoot>
						</table>
<script type="text/javascript">
	
	$(function () {
		$('#example2').DataTable( {
        "order": [[ 6, "desc" ]]
    });
	});
</script>