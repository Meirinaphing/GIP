<?php

session_start();

if(!isset($_SESSION['user'])){
	header("Location:index.php");
}

include 'conn.php';
?>
    <!-- Select2 -->
    <link rel="stylesheet" href="lte/plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="lte/dist/css/adminlte.min.css">


<div class="content">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pembobotan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pembobotan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						<div class="row">  
							<div class="col-sm-6">
								<select id="divisi" name="divisi" class="form-control select2" onchange="bobotdiv(this.value)">
									<option >-- Pilih Divisi --</option>
									<?php

										$sql = "SELECT * FROM divisi";
										$query = $conn->query($sql);
										foreach ($query as $row) {
											$namadivisi=$row['namadivisi'];
									?>
												<option value="<?=$namadivisi ?>"><?=$namadivisi; ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
					</h3>
				</div>
				<div class="card-body" id="isi_pelamar">
					

				</div>
			</div>
		</div>

	</section>

</div>
<!-- Select2 -->
<script src="lte/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
	
  $(function () {
    	$('.select2').select2()
	})
  function bobotdiv(divisi){
		$.ajax({
			type: "POST",
			url: "p_pembobotan.php", 
			data: {divisi:divisi},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				$('#isi_pelamar').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
  }
  
</script>