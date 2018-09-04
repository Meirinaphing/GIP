
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
					<h1>Pelamar</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">Pelamar</li>
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
									<th>Jabatan</th>
									<th>Ditempatkan</th>
									<th>Gaji</th>
									<th>Jumlah pengalaman</th>
									<th>Foto</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$conn = new PDO("mysql:host=localhost;dbname=spk","root","");

								$sql = "SELECT * , (SELECT Count(pelamar_pengalaman.pengalaman_nama) FROM pelamar_pengalaman WHERE pelamar_pengalaman.idpelamar = pelamar.idpelamar) as jumlah FROM  pelamar WHERE pelamar.status='barudaftar'";

								$query = $conn->query($sql);

								foreach ($query as $row) {
									
									?>


									


									<tr>
										<td><?=$row['namapelamar'];?></td>
										<td><?=$row['jabatandilamar'];?></td>
										<td><?=$row['ditempatkan'];?></td>
										<td><?=$row['ingingaji'];?></td>
										<td><?=$row['jumlah'];?></td>
										<td><img src="<?=$row['fotopelamar'];?>" width="100px" height=""></td>
										<td>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-eye" title="View" onclick="modal_reload('<?=$row[idpelamar]?>')"></button>
											<button onclick="approve('<?=$row[idpelamar]?>')" id="approve" class="btn btn-success fa fa-check-square-o" title="Approve"></button>
											<button onclick="reject('<?=$row[idpelamar]?>')" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
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

	function approve(idpelamar){
		$.ajax({
			type: "POST",
			url: "changestatus_plamar.php", 
			data: {status:"approve", idpelamar:idpelamar},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				alert('Approved');
				pelamar();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
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
				pelamar();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}

</script>
