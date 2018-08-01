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
  					<h1>Form Permintaan Karyawan</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="#">Home</a></li>
  						<li class="breadcrumb-item active">Form Permintaan Karyawan</li>
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
  						<h3 class="card-title">
  							<div class="row mb-2">
  								<div class="col-sm-6">
  									Nama Pemohon : <?=$_SESSION['user'];?>
  								</div>
  								<div class="col-sm-6" style="text-align: right;">
  									Tanggal : <?php echo date("D").','.date('d-M-Y') ?>
  								</div>
  							</div>
  						</h3>
  					</div>
  					<!-- /.card-header -->

  					<table id="example2" class="table table-bordered table-hover">
  						<thead>
  							<tr>
  								<th>Rendering engine</th>
  								<th>Browser</th>
  								<th>Platform(s)</th>
  								<th>Engine version</th>
  								<th>CSS grade</th>
  								<th>Action</th>
  							</tr>
  						</thead>
  						<tbody>
  							<tr>
  								<td>Trident</td>
  								<td>Internet
  									Explorer 4.0
  								</td>
  								<td>Win 95+</td>
  								<td> 4</td>
  								<td>X</td>
  								<td>
  									<button class="btn btn-primary fa fa-eye" title="View"></button>
  									<button class="btn btn-success fa fa-check-square-o" title="Approve"></button>
  									<button class="btn btn-danger fa fa-close" title="Reject"></button>
  								</td>
  							</tr>
  						</tbody>
  						<tfoot>
  							<tr>
  								<th>Rendering engine</th>
  								<th>Browser</th>
  								<th>Platform(s)</th>
  								<th>Engine version</th>
  								<th>CSS grade</th>
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
		$("#example1").DataTable();
		$('#example2').DataTable();
	});
</script>