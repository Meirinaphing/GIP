<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Recruitment System</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="lte/plugins/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="lte/plugins/iCheck/flat/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="lte/plugins/morris/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="lte/plugins/datepicker/datepicker3.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="lte/plugins/daterangepicker/daterangepicker-bs3.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- DataTables -->
	<link rel="stylesheet" href="lte/plugins/datatables/dataTables.bootstrap4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="lte/plugins/select2/select2.min.css">
	
</head>

<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}

?>

<body class="hold-transition sidebar-mini" onload="dashboard()">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<!-- <form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
			</form> -->

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<!-- Notifications Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fa fa-bell-o"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fa fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fa fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li> -->
				<li class="nav-item">
					<a href="logout.php">Logout</a>
					<!-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
					class="fa fa-th-large"></i></a> -->
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary ">
			<!-- Brand Logo -->
			<a href="#" class="brand-link">
				<img src="logo.png" alt="Logo" class="brand-image img-circle elevation-3"
				style="opacity: .8">
				<span class="brand-text font-weight-light">PT. Graha Inti Permai</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="logo.png" class="img-circle elevation-2" alt="Logo perusahaan">
					</div>
					<div class="info">
						<a href="#" onclick="profile(),ceklink(this.id,'')" class="d-block"><?=$_SESSION['user'];?></a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item ">
          	<a href="#" class="nav-link active" id="dashboard" onclick="dashboard(),ceklink(this.id,'dashboard')" />
          		<i class="nav-icon fa fa-dashboard" ></i>
          		<p>
          			Dashboard
          		</p>
          	</a>
          </li>
          <li class="nav-item has-treeview">
          	<a href="#" class="nav-link" id="pkar">
          		<i class="nav-icon fa fa-th"></i>
          		<p>
          			Permintaan Karyawan
          			<i class="right fa fa-angle-left"></i>
          		</p>
          	</a>
          	<ul class="nav nav-treeview">
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="rk" onclick="form_permintaan_karyawan(),ceklink(this.id,'pkar')" >
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Request Karyawan</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="hr" onclick="history_permintaan_karyawan(),ceklink(this.id,'pkar')" >
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>History Request</p>
          			</a>
          		</li>
          	</ul>
          </li>
          
          <li class="nav-item has-treeview">
          	<a href="#" class="nav-link" id="interv">
          		<i class="nav-icon fa fa-edit"></i>
          		<p>
          			Interview
          			<i class="fa fa-angle-left right"></i>
          		</p>
          	</a>
          	<ul class="nav nav-treeview">
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="pelamar" onclick="pelamar(),ceklink(this.id,'interv')">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Pelamar</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="ckari" onclick="calonkariawan(),ceklink(this.id,'interv')">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Calon Karyawan</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="fpeni" onclick="penilaian(),ceklink(this.id,'interv')">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Form Penilaian</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="kpak" onclick="keputusan(),ceklink(this.id,'interv')">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Keputusan Akhir</p>
          			</a>
          		</li>
          	</ul>
          </li>



		

          <li class="nav-item has-treeview">
          	<a href="#" class="nav-link" id="inpu">
          		<i class="nav-icon fa fa-list"></i>
          		<p>
          			Input
          			<i class="right fa fa-angle-left"></i>
          		</p>
          	</a>
          	<ul class="nav nav-treeview">
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="divi" onclick="divisi(),ceklink(this.id,'inpu')" >
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Divisi</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="pmbt" onclick="pembobotan(),ceklink(this.id,'inpu')" >
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Pembobotan</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link" id="usr" onclick="user(),ceklink(this.id,'inpu')" >
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>User</p>
          			</a>
          		</li>
          	</ul>
          </li>


          <li class="nav-header">REPORTS</li>
        

          <li class="nav-item">
          	<a href="#" class="nav-link " id="lker" onclick="lowker(),ceklink(this.id,'lker')"">
          		<i class="nav-icon fa fa-table"></i>
          		<p>
          			Lowongan Kerja
          		</p>
          	</a>
          </li>
          <li class="nav-item">
          	<a href="#" class="nav-link" id="rank" onclick="rank(),ceklink(this.id,'rank')">
          		<i class="nav-icon fa fa-trophy"></i>
          		<p>
          			Perangkingan
          		</p>
          	</a>
          </li>

      </ul>

  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
	<div id="isi_content" style="overflow-y: scroll;">
	<!-- Content Header (Page header) -->
	
	<!-- /.content -->
</div></div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
	All rights reserved.
	<div class="float-right d-none d-sm-inline-block">
		<b>Version</b> 3.0.0-alpha
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
	
<!-- jQuery -->
<script src="lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="lte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="lte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="lte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="lte/dist/js/demo.js"></script>

<!-- Bootstrap 4 -->
<script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="lte/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- Select2 -->
<script src="lte/plugins/select2/select2.full.min.js"></script>
</body>
</html>

<script>	
	function ceklink(id,lead){
			$('.nav-link').removeClass("active");
			$('#'+id).addClass("active");
			$('#'+lead).addClass("active");
	}

	function form_permintaan_karyawan(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "form_permintaan_karyawan.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);

					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}

	function history_permintaan_karyawan(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "history_permintaan_karyawan.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}

	function penilaian(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "form_penilaian.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function keputusan(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "form_keputusan.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function calonkariawan(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "calon_kariawan.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function rank(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "rank.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function pelamar(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "pelamar.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function pembobotan(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "pembobotan.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function divisi(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "divisi.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}

	function dashboard(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "dash.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function user(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "user.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function profile(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "profile.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}
	function lowker(){
		$('#myModal').modal('hide');
		$.ajax({
			type: "POST",
			url: "lowker.php", 
			data: {kosong:'kosong'},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_content').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	}

</script>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div id="isi_modal">
			
			</div>
		</div>
	</div>
</div>









