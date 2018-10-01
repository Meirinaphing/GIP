
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
					<h1>Divisi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item active">Divisi</li>
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
									Nama Divisi : &nbsp
								</td>
								<td>
									 <input class="form-control form-control-sm" type="text" name="divisi" id="divisi" placeholder="Nama Divisi">
									 <input hidden="" class="form-control form-control-sm" type="text" name="edit" id="edit" placeholder="Nama Divisi">
								</td>
								<td>
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
		var divisi= document.getElementById("divisi").value;
		var edit= document.getElementById("edit").value;
		$.ajax({
			type: "POST",
			url: "divisi_tampil.php", 
			data: {btn:btn, divisi:divisi,edit:edit},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				
    			$('#isifile').html(data);
		document.getElementById("btn").value="add";
		document.getElementById("divisi").value="";
        		//alert(data);  //as a debugging message.
        	}
        });
	}


</script>
