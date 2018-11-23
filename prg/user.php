
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
					<h1>User</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">User</li>
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
									 <input class="form-control form-control-sm" type="text" name="username" id="username" placeholder="Username">
									 <input hidden="" class="form-control form-control-sm" type="text" name="iduser" id="iduser" placeholder="Username" title="Id Untuk Login">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Nama : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="text" name="nama" id="nama" placeholder="Nama User">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Email : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="text" name="email" id="email" placeholder="Email User">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Jabatan : &nbsp
								</td>
								<td>
									 <select class="form-control form-control-sm" id="jabatan">
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
									Password : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="password" name="password" id="password" placeholder="Password">
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Repassword : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="password" name="repassword" id="repassword" placeholder="Repassword" onchange="cekpass(this.value)">
									
								</td>
								<td>&nbsp &nbsp
									<input type="button"  id="btn" class="btn" name="btn" onclick="save(this.value)" value="add">
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


<script>
$(function () {
	save('view');

	});
	function save(btn){

		var username = document.getElementById("username").value;
		var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
		var jabatan = document.getElementById("jabatan").value;
		var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		var iduser = document.getElementById("iduser").value;
		if(username=="" && btn != "view"){
			document.getElementById("username").focus();
		}else if(nama=="" && btn != "view"){
			document.getElementById("nama").focus();
		}else if(repassword=="" && btn != "view"&& btn != "edit"){
			document.getElementById("repassword").focus();
		}else if(email=="" && btn != "view"){
			document.getElementById("email").focus();
		}else if(jabatan=="" && btn != "view"){
			document.getElementById("jabatan").focus();
		}else if(password=="" && btn != "view" && btn != "edit"){
			document.getElementById("password").focus();
		}else{
		$.ajax({
			type: "POST",
			url: "user_tampil.php", 
			data: {btn:btn, username:username, jabatan:jabatan, password:password, email:email, nama:nama, iduser:iduser},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				
    			$('#isifile').html(data);
						document.getElementById("btn").value="add";
						document.getElementById("username").value="";
						document.getElementById("nama").value="";
						document.getElementById("email").value="";
						document.getElementById("password").value="";
						document.getElementById("repassword").value="";
						document.getElementById("iduser").value="";
						document.getElementById("password").readOnly=false;
						document.getElementById("repassword").readOnly=false;
        		//alert(data);  //as a debugging message.
        	}
        });

	}
	}
	
function cekpass(re){

		var password = document.getElementById("password").value;
		if(re != password){
			alert("Password Tidak Cocok");
			document.getElementById("password").value="";
			document.getElementById("repassword").value="";
			document.getElementById("password").focus();
		}
}

</script>
