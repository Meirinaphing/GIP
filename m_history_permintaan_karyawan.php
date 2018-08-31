<div class="modal-content">

												<!-- Modal Header -->
												<div class="modal-header">
													<h4 class="modal-title col-sm-12">
														<div class="row mb-2">
															<div class="col-sm-4"><?=$row['nopk'];?></div>
															<div class="col-sm-4" style="text-align: center;"><?=$row['iduser'];?></div>
															<div class="col-sm-4" style="text-align: right;"><?=$row['tgl'];?></div>
														</div>
													</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
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

											</div>