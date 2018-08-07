
<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}

?>


<div class="content">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>History Request</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">History Request</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Hover Data Table</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Tanggal</th>
									<th>Nama Pemohon</th>
									<th>Divisi</th>
									<th>Job Class</th>
									<th>Jumlah</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

								$sql = "select * from permintaan_karyawan";

								$query = $conn->query($sql);

								foreach ($query as $row) {
									$jlh = $row['jum_pria'] + $row['jum_wanita'];

									$status = $row['status'];
									?>


									<!-- The Modal -->
									<div class="modal fade" id="myModal">
										<div class="modal-dialog modal-lg">
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
														<div class="col-sm-4">Pengalaman : <?=$row['pengalaman'];?></div>
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
										</div>
									</div>


									<tr>
										<td><?=$row['tgl'];?></td>
										<td><?=$row['iduser'];?></td>
										<td><?=$row['divisi'];?></td>
										<td><?=$row['job_kelas'];?></td>
										<td><?=$jlh;?></td>
										<td><?=$row['status'];?></td>
										<td>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-eye" title="View"></button>
											<button onclick="approve(<?=$row['nopk']?>)" id="approve" class="btn btn-success fa fa-check-square-o" title="Approve"></button>
											<button onclick="reject(<?=$row['nopk']?>)" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
										</td>
									</tr>
									<?php
								}

								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Tanggal</th>
									<th>Nama Pemohon</th>
									<th>Divisi</th>
									<th>Job Class</th>
									<th>Jumlah</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script>
	$(function () {
		$("#example2").DataTable();

	});


	function approve(nopk){
		$.ajax({
			type: "POST",
			url: "changestatus.php", 
			data: {status:"approve", nopk:nopk},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				alert('Approved');
				location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

	function reject(nopk){
		$.ajax({
			type: "POST",
			url: "changestatus.php", 
			data: {status:"reject", nopk:nopk},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				alert('Rejected');
				location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

</script>