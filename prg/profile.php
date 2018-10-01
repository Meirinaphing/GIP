
<?php

session_start();
include "conn.php";
if(!isset($_SESSION['user'])){
	header("Location:index.php");
}

$sql = "SELECT * FROM `user` WHERE iduser = '$_SESSION[iduser]'";
								$query = $conn->query($sql);
								foreach ($query as $row) {
									$nama=$row['nama'];
									$jabatan=$row['jabatan'];
									$username=$row['username'];
									$email=$row['email'];
									$iduser=$row['iduser'];
								}
?>

<div class="content">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>My Profile</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">My Profile</li>
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
						<table id="example2" >
							<tr>
								<td>
									Username : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="text" name="username" id="username" placeholder="Username" value="<?= $username ?>">
									 <input hidden="" class="form-control form-control-sm" type="text" name="iduser" id="iduser" placeholder="Username" title="Id Untuk Login" value="<?= $_SESSION['iduser'] ?>">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Nama : &nbsp
								</td>
								<td>
									 <input value="<?= $nama ?>" class="form-control form-control-sm" type="text" name="nama" id="nama" placeholder="Nama User">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Email : &nbsp
								</td>
								<td>
									 <input value="<?= $email	 ?>" class="form-control form-control-sm" type="text" name="email" id="email" placeholder="Email User">
								</td>
								<td>
								</td>
							</tr>
							<tr hidden="">
								<td>
									Jabatan : &nbsp
								</td>
								<td>
									 <select class="form-control form-control-sm" id="jabatan" value='<?= $jabatan ?>' >
									 	<option>HRD</option>
									 	<option>Manager</option>
									 	<option>leader</option>
									 	<option>admin</option>
									 </select>
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td align="right">
									<input type="button"  id="btn" class="btn" name="btn" onclick="save(this.value)" value="edit ">
									
											<button data-toggle="modal" data-target="#myModal" onclick="editpass(this.value)" value="<?=$iduser?>"  class="btn btn-primary fa fa-key" title="Edit password"></button>
								</td>
							</tr>
						</table>
						<br>
						<div id="isifile">
</div>
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


<script type="text/javascript">

	function edtpass(){


		var password = document.getElementById("passworde").value;
		var oldpassword = document.getElementById("oldpassworde").value;
		var repassword = document.getElementById("repassworde").value;
		var iduser = document.getElementById("iduserpass").value;

		if(password==""){
			document.getElementById("passworde").focus();
		}else if(repassword==""){
			document.getElementById("repassworde").focus();
		}else{
		$.ajax({
			type: "POST",
			url: "user_tampil.php", 
			data: {btn:'editpass', password:password,iduser:iduser,oldpassword:oldpassword},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
    			$('#isi_modal').html(data);
				// alert("Password Telah Di Ubah");
        		//alert(data);  //as a debugging message.
        	}
        });}
	}

function cekpasse(re){

		var password = document.getElementById("passworde").value;
		if(re != password){
			alert("Password Tidak Cocok");
			document.getElementById("passworde").value="";
			document.getElementById("repassworde").value="";
			document.getElementById("passworde").focus();
		}
}

function editpass(iduser){

		$.ajax({
			type: "POST",
			url: "m_user.php", 
			data: {iduser:iduser},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				// alert('Approved');
				// history_permintaan_karyawan()
				// location.reload();
    			$('#isi_modal').html(data);
				document.getElementById("iduserpass").value=iduser;
        		// alert(data);  //as a debugging message.
        	}
        });
	}





		function save(btn){
// alert(btn);
		var username = document.getElementById("username").value;
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var jabatan = document.getElementById("jabatan").value;
		var iduser = document.getElementById("iduser").value;
		if(username=="" && btn != "view"){
			document.getElementById("username").focus();
		}else if(nama=="" && btn != "view"){
			document.getElementById("nama").focus();
		}else if(email=="" && btn != "view"){
			document.getElementById("email").focus();
		}else if(jabatan=="" && btn != "view"){
			document.getElementById("jabatan").focus();
		}else{
		$.ajax({
			type: "POST",
			url: "user_tampil.php", 
			data: {btn:'edit', username:username, jabatan:jabatan, email:email, nama:nama, iduser:iduser},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				profile();		
				alert("Data telah di ubah");
        		alert(data);  //as a debugging message.
        	}
        });

	}
	}

</script>
