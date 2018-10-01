
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
					<h1>Calon Karyawan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">Calon Karyawan</li>
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
									<th>Nama Pelamar</th>
									<th>tgl wawancara</th>
									<th>waktu</th>
									<th>status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								include "conn.php";

								$sql = "SELECT *,calon_karyawan.status as status_k FROM calon_karyawan join pelamar WHERE pelamar.idpelamar = calon_karyawan.idpelamar";

								$query = $conn->query($sql);
								foreach ($query as $row) {

									?>
									<tr>
										<td><?=$row['namapelamar'];?></td>
										<td><?=$row['tgl'];?></td>
										<td><?=$row['waktu'];?></td>
										<td><?=$row['status_k'];?></td>
										<?php 
										$pch=explode(" ", $row['status_k']);

										if($row['status_k'] == "wawancara ke 1" || $row['status_k'] == "wawancara ke 2" || $pch[2]>1){
											$field="hidden";
										} ?>
										<td>
											<button <?php echo $field; ?> data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-envelope" title="Email" onclick="modal_reload('<?=$row[idpelamar]?>')"></button><button onclick="reject('<?=$row[idpelamar]?>')" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
										</td>
									</tr>
									<?php
									$field="";
								}

								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Nama Pelamar</th>
									<th>tgl wawancara</th>
									<th>waktu</th>
									<th>status</th>
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

	function modal_reload(idpelamar){
		$.ajax({
			type: "POST",
			url: "m_calon_karyawan.php", 
			data: {idpelamar:idpelamar},
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

	function reject(idpelamar){
		$.ajax({
			type: "POST",
			url: "changestatus_plamar.php", 
			data: {status:"reject", idpelamar:idpelamar},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				alert('Rejected');
				calonkariawan();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

</script>
