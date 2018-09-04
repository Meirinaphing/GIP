
<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}
include "conn.php";
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
						<table id="example2" class="table table-bordered table-hover" style="text-align: center;">
							<thead>
								<tr>
									<th>Nama Pelamar</th>
										<?php
										$sql_f = "SELECT * from n_faktor";
										$query_f = $conn->query($sql_f);
										foreach ($query_f as $isi_f) {
										?>

									<th><?= $isi_f['nama']; ?></th>
										<?php
										}
										?>
									<th>Total</th>
									<th>Ditempatkan</th>
									<th>Gaji</th>
									<th>Jumlah pengalaman</th>
									<th>Foto</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php

								

								$sql = "SELECT * from keputusan";

								$query = $conn->query($sql);

								foreach ($query as $rows) {
									$sql1 = "SELECT * from pelamar where idpelamar='$rows[idpelamar]'";
										$query1 = $conn->query($sql1);
										foreach ($query1 as $row) {
											$n=1;
											$sql2 = "SELECT * from wawancara where wawancara.nopelamar='$rows[idpelamar]'";
												$query2 = $conn->query($sql2);
												foreach ($query2 as $row2) {
														
												 $sql3 = "SELECT * from nilai_wawancara where idwawancara='$row2[id]'";
													$query3 = $conn->query($sql3);
													$ckn=1;
													foreach ($query3 as $row3) {
														$nfaktor[$ckn].="|".$row3['faktor'];
														$nilai[$ckn][$n] = $row3['nilai_s']	;
														$ckn++;
													}
													$n++;

												}
									?>


									


									<tr >
										<td align="center"><?=$row['namapelamar'];?><br><img src="<?=$row['fotopelamar'];?>" width="100px" height=""></td>
											<?php
											$nn=1;
												while ($nn < $ckn) {
											?>
												<td><?php echo ($nilai[$nn][1]+$nilai[$nn][2])/2; ?></td>
											<?php
											$nn++;
												}
											?>

										<td><?= $row2['nilai'] ?>%</td>
										<td></td>
										<td></td>
										<td></td>
										<td><img src="<?=$row['fotopelamar'];?>" width="100px" height=""></td>
										<td>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-eye" title="View" onclick="modal_reload('<?=$row[idpelamar]?>')"></button>
											<button onclick="approve('<?=$row[idpelamar]?>')" id="approve" class="btn btn-success fa fa-check-square-o" title="Approve"></button>
											<button onclick="reject('<?=$row[idpelamar]?>')" id="reject" class="btn btn-danger fa fa-close" title="Reject"></button>
										</td>
									</tr>
									<?php
								}
}
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Nama Pelamar</th>
										<?php
										$sql_f = "SELECT * from n_faktor";
										$query_f = $conn->query($sql_f);
										foreach ($query_f as $isi_f) {
										?>

									<th><?= $isi_f['nama']; ?></th>
										<?php
										}
										?>
									<th>Total</th>
									<th>Ditempatkan</th>
									<th>Gaji</th>
									<th>Jumlah pengalaman</th>
									<th>Foto</th>
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
