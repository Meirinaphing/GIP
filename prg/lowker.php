
<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}
include "conn.php";

	$sql1 = "select * from lowker where idlowker=1";
	$query1 = $conn->query($sql1);
			foreach ($query1 as $row1) {
				$isi = $row1['isi'];
				$status = $row1['status'];
				if ($status == "open"){
					$status ="close";
					$textsts = "close lamaran";
				}else{
					$textsts = "open lamaran";

					$status ="open";
				}
			}


?>

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<div class="content">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form Lowker</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">Form Lowker</li>
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


								$sql = "select permintaan_karyawan.*,lowker.status as statuss,lowker.idlowker as idlok from lowker inner join permintaan_karyawan on permintaan_karyawan.nopk = lowker.nopk where permintaan_karyawan.status = 'Approved'";

								$query = $conn->query($sql);

								foreach ($query as $row) {
									$nopk = $row['nopk'];
									$idlowker = $row['idlok'];
									$statuss = $row['statuss'];
									if($statuss=='close'){
										$statuss="open";
										$bbttnn="btn-success";
									}else{
										$statuss="close";
										$bbttnn="btn-danger";
									}
									?>


									


									<tr>
										<td><?=$row['tgl'];?></td>
										<td><?=$row['iduser'];?></td>
										<td><?=$row['divisi'];?></td>
										<td><?=$row['job_kelas'];?></td>
										<td><?=$row['jum_pria'] ?> P, <?=$row['jum_wanita'];?> W</td>
										<td><?=$row['statuss'];?></td>
										<td>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-eye" title="View" onclick="modal_reload('<?= $nopk ?>')"></button>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-warning fa fa-edit" title="View" onclick="modal_edit('<?= $idlowker ?>')"></button>
											<button id="view" class="btn <?=$bbttnn ?>" title="View" onclick="openn('<?= $statuss ?>','<?= $idlowker ?>')"><?= $statuss ?></button>
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

<!-- Bootstrap WYSIHTML5 -->
<script src="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script>
	$(function () {
		$("#example2").DataTable();
	});

	function modal_reload(nopk){
		$.ajax({
			type: "POST",
			url: "m_history_permintaan_karyawan.php", 
			data: {nopk:nopk},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
    			$('#isi_modal').html(data);
        	}
        });
	}
	function modal_edit(idlowker){
		$.ajax({
			type: "POST",
			url: "m_edit_lowker.php", 
			data: {idlowker:idlowker},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
    			$('#isi_modal').html(data);
        	}
        });
	}

	function save(idlowker){
	 var isi =  document.getElementById("isi").value;
		$.ajax({
			type: "POST",
			url: "p_lowker.php", 
			data: {status:"save", isi:isi, idlowker:idlowker},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				alert('Saved');
				lowker();
				// history_permintaan_karyawan();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}
	function openn(opn,idlowker){
		
		$.ajax({
			type: "POST",
			url: "p_lowker.php", 
			data: {status:opn,idlowker:idlowker},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				lowker();
				// history_permintaan_karyawan();
				// location.reload();
    			// $('#isi_content').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}


$(function () {
   
    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
