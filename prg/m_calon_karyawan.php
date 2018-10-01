
<link rel="stylesheet" href="lte/plugins/timepicker/bootstrap-timepicker.min.css">

<?php
include "conn.php";
$idpelamar = $_POST['idpelamar'];

$sql = "select * from pelamar where idpelamar='$idpelamar'";

$query = $conn->query($sql);

foreach ($query as $row) {
	$jlh = $row['jum_pria'] + $row['jum_wanita'];

	$status = $row['status'];
	$a=$row['p_bud_no'];
	$p_bud_no = explode("/", $a);
	if($p_bud_no[1]==""){
		$doc ="Menggantikan Formasi karena : ".$a;
	}else{
		$doc ="Berdasarkan Persetujuan Budget Manpower Planning : <a href='".$a."'>".$p_bud_no[1]."</a>";

	}

		// file_p_kariawan/
	?>						





	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title col-sm-12">
			<div class="row mb-2">
				<div class="col-sm-4">Kirim Email Kepada</div>
				<div class="col-sm-4" style="text-align: center;"></div>
				<div class="col-sm-4" style="text-align: right;"><?=$row['namapelamar'];?></div>
			</div>
		</h4>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
		
		<div class="row ">
			<div class="col-sm-12">Kepada :
				<input type="text" value="<?=$row['email'];?>" readonly name="email" id="email" class="form-control">
			</div>
			<div class="col-sm-12">
				Tanggal :
				<input type="text" class="form-control" id="tglwawancara" name="tglwawancara">
				Jam :
				<input type="text" name="jam" id="jam" class="form-control timepicker"></div>
			</div>
		</div>

		<!-- Modal footer -->
		<div class="modal-footer">
			<div class="col-sm-6" align="left">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			<div class="col-sm-6" align="right">
				<button type="button" class="btn btn-primary"  onclick="kirimemail()">Send Email</button>
			</div>
		</div>

		<?php
	}
	?>
	<script src="lte/plugins/timepicker/bootstrap-timepicker.min.js"></script>

	<script type="text/javascript">
		$(function () {
			$('.timepicker').timepicker({
				showInputs: true

			})
			$('#tglwawancara').datepicker({
				autoclose: true,
				format: 'dd/mm/yyyy'
			})
		})


		function kirimemail(){
			var jam =  document.getElementById("jam").value;
			var tgl =  document.getElementById("tglwawancara").value;
			var email =  document.getElementById("email").value;
			if(tgl==""){
				document.getElementById("tglwawancara").focus();
			}else if(jam==""){
				document.getElementById("jam").focus();
			}else{
				$.ajax({
					type: "POST",
					url: "email/wawancara.php", 
					data: {jam:jam,email:email, tgl:tgl,idpelamar:"<?php echo $idpelamar; ?>"},
					dataType: "text",  
					cache:false,
					success: 
					function(data){
			// alert('Rejected');
			// location.reload();
			// $('#isi_content').html(data);
    		alert(data);  //as a debugging message.
    		calonkariawan();
    	}
    });}
			}
		</script>