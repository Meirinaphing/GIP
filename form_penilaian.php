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
					<h1>Form Penilaian</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Form Penilaian</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
<form action="proses_p.php" action="get" id="form_wawancara">
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

										$sql = "SELECT * FROM `pelamar`";
										$query = $conn->query($sql);
										foreach ($query as $row) {
											$n=0;
											$namapelamar = $row['namapelamar'];	
											$idpelamar = $row['idpelamar'];	
												$sql1 = "SELECT * FROM `wawancara` where nopelamar ='$idpelamar'";
												$query1 = $conn->query($sql1);
													foreach ($query1 as $row1) {
														$n++;
														$cek=$row1['status'];
													}
												if ($n<"2" and $cek !="Fail"){
													$n++;
									?>
												<option value="<?=$idpelamar ?>"><?=$namapelamar." (wawancara ke ".$n.")"; ?></option>
									<?php
										}
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
			url: "f_p_pelamar.php", 
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
			url: "proses_p.php", 
			data: $("#form_wawancara").serialize(),
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				penilaian();
				// $('#isi_pelamar').html(data);
					alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
  }
</script>