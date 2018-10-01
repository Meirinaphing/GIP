
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

<div class="card card-outline card-info">
            
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" id="isi" name="isi" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $isi ?></textarea>
              </div>
            <div class="row">
            	
	              <div class="col-sm-6" align="">
	                            <button class="btn btn-primary" onclick="save()" type="button">Save</button>
	              </div>
	              <div class="col-sm-6" align="right">
	              		<button class="btn btn-warning" onclick="openn(this.value)" type="button" value="<?= $status ?>"><?= $textsts ?></button>
	          	  </div>
            </div>
            </div>
          </div>






						<hr>
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


								$sql = "select * from permintaan_karyawan where status = 'Approved'";

								$query = $conn->query($sql);

								foreach ($query as $row) {
									$jlh = $row['jum_pria'] + $row['jum_wanita'];

									$status = $row['status'];
									$nopk = $row['nopk'];
									?>


									


									<tr>
										<td><?=$row['tgl'];?></td>
										<td><?=$row['iduser'];?></td>
										<td><?=$row['divisi'];?></td>
										<td><?=$row['job_kelas'];?></td>
										<td><?=$jlh;?></td>
										<td><?=$row['status'];?></td>
										<td>
											<button data-toggle="modal" data-target="#myModal" id="view" class="btn btn-primary fa fa-eye" title="View" onclick="modal_reload('<?= $nopk ?>')"></button>
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
				// alert('Approved');
				// history_permintaan_karyawan()
				// location.reload();
    			$('#isi_modal').html(data);
        		// alert(data);  //as a debugging message.
        	}
        });
	}

	function save(){
	 var isi =  document.getElementById("isi").value;
		$.ajax({
			type: "POST",
			url: "p_lowker.php", 
			data: {status:"save", isi:isi},
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
	function openn(opn){
		$.ajax({
			type: "POST",
			url: "p_lowker.php", 
			data: {status:opn},
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
