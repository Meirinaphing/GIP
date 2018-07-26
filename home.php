<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Leader| Dashboard</title>
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
	
	
</head>
<body class="hold-transition sidebar-mini">
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
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
						class="fa fa-th-large"></i></a>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="index3.html" class="brand-link">
					<img src="lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					style="opacity: .8">
					<span class="brand-text font-weight-light">PT. Graha Inti Permai</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="Logo perusahaan">
						</div>
						<div class="info">
							<a href="#" class="d-block">Leader</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          	<a href="#" class="nav-link active">
          		<i class="nav-icon fa fa-dashboard"></i>
          		<p>
          			Dashboard
          		</p>
          	</a>
          </li>
          <li class="nav-item has-treeview">
          	<a href="#" class="nav-link">
          		<i class="nav-icon fa fa-th"></i>
          		<p>
          			Permintaan Karyawan
          			<i class="right fa fa-angle-left"></i>
          		</p>
          	</a>
          	<ul class="nav nav-treeview">
          		<li class="nav-item">
          			<a href="#" class="nav-link" onClick="form_permintaan_karyawan()">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Request Karyawan</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="history_permintaan_karyawan.php" class="nav-link">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>History Request</p>
          			</a>
          		</li>
          	</ul>
          </li>
          
          <li class="nav-item has-treeview">
          	<a href="#" class="nav-link">
          		<i class="nav-icon fa fa-edit"></i>
          		<p>
          			Interview
          			<i class="fa fa-angle-left right"></i>
          		</p>
          	</a>
          	<ul class="nav nav-treeview">
          		<li class="nav-item">
          			<a href="#" class="nav-link">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Calon Karywan</p>
          			</a>
          		</li>
          		<li class="nav-item">
          			<a href="#" class="nav-link">
          				<i class="fa fa-circle-o nav-icon"></i>
          				<p>Form Penilaian</p>
          			</a>
          		</li>
          	</ul>
          </li>
          <li class="nav-header">REPORTS</li>
          <li class="nav-item">
          	<a href="#" class="nav-link">
          		<i class="nav-icon fa fa-calendar"></i>
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
<div class="content-wrapper" id="isi_content">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content" >
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>150</h3>

							<p>New Orders</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>53<sup style="font-size: 20px">%</sup></h3>

							<p>Bounce Rate</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>44</h3>

							<p>User Registrations</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>65</h3>

							<p>Unique Visitors</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->
			<!-- Main row -->
			<div class="row">
				
				<section class="col-lg-5 connectedSortable">

					<!-- Calendar -->
					<div class="card bg-success-gradient">
						<div class="card-header no-border">

							<h3 class="card-title">
								<i class="fa fa-calendar"></i>
								Calendar
							</h3>
							<!-- tools card -->
							<div class="card-tools">
									<button type="button" class="btn btn-success btn-sm" data-widget="collapse">
										<i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-success btn-sm" data-widget="remove">
										<i class="fa fa-times"></i>
									</button>
								</div>
								<!-- /. tools -->
							</div>
							<!-- /.card-header -->
							<div class="card-body p-0">
								<!--The calendar -->
								<div id="calendar" style="width: 100%"></div>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</section>
					<!-- right col -->
				</div>
				<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
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
</body>
</html>

<script>	
	function form_permintaan_karyawan(){
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
</script>











