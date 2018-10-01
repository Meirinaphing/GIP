<?php
include 'conn.php';
	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$iduser = $_POST['iduser'];
	if($_POST['btn']=="add"){

		$sql1 = "INSERT INTO `user` (`iduser`, `nama`, `jabatan`, `email`, `password`, `username`) VALUES (NULL, '$nama', '$jabatan', '$email', '$password', '$username')";
		$query1 = $conn->query($sql1);
		
	}else if($_POST['btn']=="edit"){

		$sql1 = "UPDATE `user` SET `nama` = '$nama', `jabatan` = '$jabatan', `email` = '$email', `username` = '$username' WHERE `user`.`iduser` = '$iduser'";
		$query1 = $conn->query($sql1);
	
	
	}else if($_POST['btn']=="editpass"){

			$oldpassword = md5($_POST['oldpassword']);

		$sql = "select * from user where iduser='$iduser' and password = '$oldpassword'";
		$query = $conn->query($sql);
		$temp_password = 0;
		foreach ($query as $row) {
			$temp_password++;
		}
		if($temp_password>0){
			$sql1 = "UPDATE `user` SET `password` = '$password' WHERE `user`.`iduser` = '$iduser'";
			$query1 = $conn->query($sql1);
			?><script type="text/javascript">alert('Password Telah di ubah');</script><?php
		}else{
			?><script type="text/javascript">alert( "Password lama tidak cocok ");</script><?php
		}
	}else if($_POST['btn']=="del"){
		
		$sql1 = "UPDATE `user` SET `status` = 'hapus' WHERE `user`.`iduser` = $iduser";
		$query1 = $conn->query($sql1);
		
	}


?>





						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Jabatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php


								$sql = "SELECT * FROM `user` WHERE status != 'hapus'";
									$no=0;
								$query = $conn->query($sql);
								foreach ($query as $row) {
									$no++;
									?>
									<tr>
										<td><?= $row['username'] ?></td>
										<td><?=$row['nama'];?></td>
										<td><?=$row['email'];?></td>
										<td><?=$row['jabatan'];?></td>
										<td><button class="btn btn-warning fa fa-edit" title="Edit" onclick="edit('<?=$row[iduser]?>','<?=$row[email]?>','<?=$row[username]?>','<?=$row[jabatan]?>','<?=$row[nama]?>')"></button>
											<button onclick="del('<?=$row[iduser]?>')"  class="btn btn-danger fa fa-close" title="delete"></button>
											<button data-toggle="modal" data-target="#myModal" onclick="editpass('<?=$row[iduser]?>')"  class="btn btn-primary fa fa-key" title="Edit password"></button>
										</td>
									</tr>
									<?php
									$field="";
								}

								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Jabatan</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					


<script>
	

	function edit(iduser,email,username,jabatan,nama){
		document.getElementById("username").value=username;
		document.getElementById("email").value=email;
		document.getElementById("jabatan").value=jabatan;
		document.getElementById("nama").value=nama;
		document.getElementById("iduser").value=iduser;
		document.getElementById("password").readOnly=true;
		document.getElementById("repassword").readOnly=true;
		document.getElementById("btn").value="edit";
	}

	function del(iduser){

		$.ajax({
			type: "POST",
			url: "user_tampil.php", 
			data: {btn:'del', iduser:iduser},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				
    			$('#isifile').html(data);
        		//alert(data);  //as a debugging message.
        	}
        });
	}
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
    			$('#isifile').html(data);
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




</script>
