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
					<h1>Form Keputusan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Form Keputusan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
<form action="proses_k.php"  id="form_keputusan" >
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
						<div class="row">  
							<h3 class="card-title col-sm-6">

								<select id="namapelamar" name="namapelamar" class="form-control select2" onchange="pilihpelamar(this.value)">
									<option>-- Pilih Nama --</option>
									<?php
									$sql = "SELECT *,calon_karyawan.status as status_k FROM calon_karyawan inner join pelamar on pelamar.idpelamar = calon_karyawan.idpelamar group by pelamar.idpelamar";
										$query = $conn->query($sql);
										foreach ($query as $row) {
											$n=0;
											$namapelamar = $row['namapelamar'];	
											$idpelamar = $row['idpelamar'];	
												$sql1 = "SELECT * FROM `wawancara` where idpelamar ='$idpelamar'";
												$query1 = $conn->query($sql1);
													foreach ($query1 as $row1) {
														$n++;
														$cek=$row1['status'];
													}
												if ($cek =="Fail"){
													$faill="- Ditunda sementara";
												}
												$n++;
												if($n>2){
									?>
												<option value="<?=$idpelamar ?>"><?=$namapelamar."$faill"; ?></option>
									<?php
									}
										$faill="";
										$cek="";
									}
									?>
								</select>
							</h3>
							
							<h3 class="card-title col-sm-6" style="text-align:right;">Tanggal : <?php echo date("D").','.date('d-M-Y') ?></h3>
						</div>
					</h3>
				</div>
				<div class="card-body" id="isi_pelamar">
					

				</div>
			</div>
		</div>

	</section>
</form>
</div>
<!-- Select2 -->
<script src="lte/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
	
  $(function () {
    	$('.select2').select2()
	})
  function pilihpelamar(idpelamar){
		$.ajax({
			type: "POST",
			url: "f_p_keputusan.php", 
			data: {idpelamar:idpelamar},
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
  function simpan(){
		$.ajax({
			type: "POST",
			url: "proses_k.php", 
			data: $("#form_keputusan").serialize(),
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				keputusan();
				// $('#isi_pelamar').html(data);
					alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
  }
</script>