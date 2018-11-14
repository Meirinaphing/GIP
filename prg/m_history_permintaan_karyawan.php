<?php
error_reporting(0);
$nopk = $_POST['nopk'];
	$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

	$sql = "select * from permintaan_karyawan where nopk='$nopk'";

	$query = $conn->query($sql);
	// echo $nopk;
	foreach ($query as $row) {
		$jlh = $row['jum_pria'] + $row['jum_wanita'];

		$status = $row['status'];
		$a=$row['p_bud_no'];
		$p_bud_no = explode("/", $a);
		if($p_bud_no[1]==""){
			$doc ="Menggantikan Formasi karena : <i>".$a."</i>";
		}else{
			$doc ="Berdasarkan Persetujuan Budget Manpower Planning : <a href='".$a."'>".$p_bud_no[1]."</a>";

		}

		// file_p_kariawan/
?>						





	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
			<div class="row mb-2">
				<div class="col-sm-4">NO : <?=$row['nopk'];?></div>
				<div class="col-sm-4" style="text-align: center;"></div>
				<div class="col-sm-4" style="text-align: right;"></div>
			</div>
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">

<div class="card card-default tab">
			 <div class="card-header bg-info">
			  <div class="row">  
				<h3 class="card-title col-sm-6">Nama Pemohon : <?=$row['iduser'];?></h3>
				<h3 class="card-title col-sm-6" style="text-align:right;">Tanggal : <?=$row['tgl'];?></h3>
			  </div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="row">

				<div class="col-sm-4">
					<label class="control-label" style="text-align: left;">Divisi/Dept:</label>
						<h4><?=$row['divisi'];?></h4>
						
<!-- 
					<input type="text" class="form-control wajib " id="divisi" name="divisi" placeholder="Enter Divisi" required> -->
				</div>
				<div class="col-sm-4">
					<label class="control-label">Job Kelas:</label>
					<h4> <?=$row['job_kelas'];?> </h4>
				</div>
				<div class="col-sm-4">
					<label class="control-label" style="text-align: left;">Jabatan:</label>
					<h4><?=$row['jabatan'];?></h4>
				</div>
			   </div>
			 </div>
			</div>

 <div class="card card-default tab">
		   <div class="card-header bg-success">
			  <div class="row">
				<div class="col-sm-6" >
				    <h5>1. Penambahan Jumlah Karyawan</h5>
			   	</div>
			    <div class="col-sm-1" align="right">
			    </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-1" align="right">
         		</div>
				<div class="col-sm-2">
				</div>
      		  </div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="form-group row">
				  		
				    <div class="col-sm-5" align="left">
					    <label>Jumlah Pria: <?=$row['jum_pria'];?> Orang</label>
				    </div>
	                <div class="col-sm-2">
	                </div>
	                <div class="col-sm-5" align="left">
	                    <label>Jumlah Wanita: 
						<?=$row['jum_wanita'];?> Orang</label>
	         		</div>
					<div class="col-sm-2">
					</div>
			  	
				  <div class="col-sm-12">
					  <label><?php echo $doc; ?></label>
				  </div>
				<div class="col-sm-12">
				  <label>Status Karyawan:</label>
				  <label ><i><?=$row['status_karyawan'];?></i>
				  </label>
				  </div>
			   </div>
			 </div>
			 </div>
		  
		  
				<div class="card card-default tab">
					<div class="card-header bg-danger">
						<div class="row">  
							<h3 class="card-title">2. Uraian Pekerjaan (Tugas dan Tanggung Jawab)</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div style="border: 2px solid #ddd; border-radius: 5px ;padding-left: 5px; padding-right: 5px; width: 100%"><?=$row['uraian_p'];?></div>
						</div>
					</div>
				</div>
		  
				<div class="card card-default tab">
					<div class="card-header bg-gray">
						<div class="row">  
							<h3 class="card-title">3. Kualifikasi</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="form-group row">
						   <label class="control-label col-sm-2" style="text-align: left; margin-left: 3%;">Umur: 
						   	<?=$row['umur'];?></label>
						   <div class="col-sm-2" align="right">
							 <label class="control-label">Pendidikan:</label></div>
							 <div class="col-sm-4">
							 	<?=$row['pendidikan'];?>
							   <!-- <input type="text" class="form-control wajib form-control-sm" id="pendidikan" name="pendidikan" placeholder="Enter Pendidikan"> -->
							 </div>
						 </div>
						
						
						
						<div class="form-group">
							  <label style="margin-left:3%;">Pengalaman:</label>
							  &nbsp&nbsp
							  <label class="control-label">
							  	<?=$row['pengalaman_y'];?> &nbsp Tahun
							  </label>
						</div>

							<div class="form-group">
							  <label style="margin-left: 3%;">Kemampuan yang diharapkan:</label>
							  <div style="border: 2px solid #ddd; border-radius: 5px ;padding-left: 5px; padding-right: 5px ;width: 100%;"><?=$row['kemampuan'];?></div>
							</div>
							<div class="form-group col-sm-12">
							 <div class="row">
							  <label class="control-label col-sm-2" style="text-align: left; margin-left: 3%; text-align: right;">Gaji(GBS):</label>
							  <div class="">
							  	Rp. <?= number_format($row['s_gaji'],0, '.', '.');?>
							  &nbsp
							  <label class=" control-label" style="text-align: center;">s/d</label>
							  &nbsp	Rp. <?=number_format($row['e_gaji'],0,'.','.');?>
							  </div>
							  <div class="" style="width:13.5%;"></div>
							</div>
					</div>
				</div>
  			</div>
		  
				<div class="card card-default tab">
					<div class="card-header bg-black">
						<div class="row">  
							<h3 class="card-title">4. Rencana</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<label class="control-label col-sm-4" style="text-align: right;">Manpower Planning Thn</label>
							<div class="col-sm-2">
								<?=$row['man_planning_thn'] ?> 
							</div>
							<div class="col-sm-2">
								: <?=$row['man_org'] ?>
							</div>
							<div class="col-sm-2">
							<label class="control-label " style="text-align: left;">Orang</label>
							</div>
							
						</div>
						
						<div class="row">
								<label class="control-label col-sm-4" style="text-align: right;">Jumlah Karyawan Bulan</label>
								<div class="col-sm-2">
									<?= $row['jum_kar_bulan']; ?>
								</div>
								<div class="col-sm-2">
								 : <?= $row['jum_kar_org']; ?>
								</div>
								<div class="col-sm-2">
									<label class="control-label" style="text-align: left;">Orang</label>
								</div>
  							</div>
						
					  <div class="row">
						<label class="control-label col-sm-4" style="text-align: right;">Rencana Penambahan</label>
						<div class="col-sm-2">
							 <?= $row['rencana_penambahan']; ?>
						</div>
						<div class="col-sm-2">
							: <?= $row['jum_org_penam']; ?>
						</div>
						<div class="col-sm-2">
							<label class="control-label" style="text-align: left;">Orang</label>
					  	</div>
					  </div>
						
					</div>
				</div>
  


















		<!-- <div class="row mb-2">
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
		<br>
		<div>
			<b> Tugas dan Tanggung Jawab : </b> <br>
			<?=$row['uraian_p'];?>
		</div>
		<br>
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