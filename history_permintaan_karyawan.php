
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
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
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

								$sql = "select * from permintaan_karyawan order by status DESC";

								$query = $conn->query($sql);

								foreach ($query as $row) {
									$jlh = $row['jum_pria'] + $row['jum_wanita'];
									$nopk = $row['nopk'];
									$status = $row['status'];
									?>




									<tr>
										<td><?=$row['tgl'];?></td>
										<td><?=$row['iduser'];?></td>
										<td><?=$row['divisi'];?></td>
										<td><?=$row['job_kelas'];?></td>
										<td><?=$jlh;?></td>
										<td><?=$row['status'];?></td>
										<td>
											<button onclick="modal_reload('<?= $nopk?>')"   data-toggle="modal" data-target="#myModal"  id="view" class="btn btn-primary fa fa-eye" title="View"></button>
											<?php if($row['status']=="Submited"){?>
											<button onclick="approve('<?= $nopk?>')" id="approve" class="btn btn-success fa fa-check-square-o" title="Approve"></button>
											<button onclick="reject('<?= $nopk?>')" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
											<?php }?>
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

	function modal_reload(nopk){
		// alert(nopk);
		$.ajax({
			type: "POST",
			url: "m_history_permintaan_karyawan.php", 
			data: {nopk:nopk},
			dataType: "text",  
			cache:false,
			success: 
			function(data){

				// alert('Approved');
				// history_permintaan_karyawan()
				// location.reload();
    			$('#isi_modal').html(data);
        		 // alert(data);  //as a debugging message.
        	}
        });
	}

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
				history_permintaan_karyawan();
				// location.reload();
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
				history_permintaan_karyawan();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

</script>
