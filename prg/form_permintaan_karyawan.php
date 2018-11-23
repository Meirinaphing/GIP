
<style>
body {
  background-color: #f1f1f1;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
textarea.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}



/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

</style>  


  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- <div class="container">
    <h2 align="center">Form Permintaan Karyawan Baru</h2>
    <form action="#">
      <div class="form-group row">
        <div class="col-sm-offset-4 col-sm-1">
          <label>No</label>
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="noform" id="noform" readonly>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">
          <label>Divisi/Dept:</label>
        </div>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="noform" id="noform">
        </div>
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div> -->

  <?php

  session_start();

  if(!isset($_SESSION['user'])){
    header("Location:index.php");
  }
  include 'conn.php';
$d=date('d');
$m=date('m');
  ?>


  <?php
  $ck = 0;
  $whl=1;
  $sql = "select count(*) from permintaan_karyawan";
  $n = $conn->query($sql)->fetchColumn();
  while ( $whl > 0) {
  $c_number = $d.$m.'-'.$_SESSION['iduser'].'-'.$n;

	  $sql_c = "select count(*) from permintaan_karyawan where nopk ='$c_number'";
  	  $whl= $conn->query($sql_c)->fetchColumn();
  	  if($whl>0){
  	  $n++;
  	  }
  }
$number = $d.$m.'-'.$_SESSION['iduser'].'-'.$n;
  								
  ?>
<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Form Permintaan Karyawan Baru</h1>
					<h5>No.<?=$number;?></h5>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Form Permintaan Karyawan Baru</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>


<form id="form_permintaan" enctype="multipart/form-data" action="save_permintaan_karyawan.php" method="post" target="blank_">
<input type="hidden" name="nopk" id="nopk" value="<?php echo $number ?>"> 
  <!-- Main content -->
  <section class="content" >
    <div class="container-fluid">
     <!-- Small boxes (Stat box) -->
     <div class="row">
		 <div class="col-lg-1"></div>
      <div class="col-lg-10">
       <!-- small box -->
		   <div class="card card-default tab">
			 <div class="card-header bg-info">
			  <div class="row">  
				<h3 class="card-title col-sm-6">Nama Pemohon : <?=$_SESSION['user'];?></h3>
				<h3 class="card-title col-sm-6" style="text-align:right;">Tanggal : <?php echo date("D").','.date('d-M-Y') ?></h3>
			  </div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="row">

				<div class="col-sm-4">
					<label class="control-label" style="text-align: left;">Divisi/Dept:</label>

					<select id="divisi" name="divisi" class="form-control select2 wajib">
						
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
<!-- 
					<input type="text" class="form-control wajib " id="divisi" name="divisi" placeholder="Enter Divisi" required> -->
				</div>
				<div class="col-sm-4">
					<label class="control-label">Job Kelas:</label>
					<input type="text" class="form-control wajib" id="job" name="job" placeholder="Enter Job Kelas">
				</div>
				<div class="col-sm-4">
					<label class="control-label" style="text-align: left;">Jabatan:</label>
					<input type="text" class="form-control wajib" id="jabatan" name="jabatan" placeholder="Enter Jabatan">
				</div>
			   </div>
			 </div>
			</div>
		  
		  
		  <div class="card card-default tab">
		   <div class="card-header bg-success">
			  <div class="row">
				<div class="col-sm-6" >
				    <h5>1. Penambahan Jumlah Karyawan</h5>
			   	</div>
			    <div class="col-sm-1" align="right">
				    <label class="control-label">Pria:</label>
			    </div>
                <div class="col-sm-2">
            	    <input type="number" class="form-control form-control-sm wajib" value="" id="pria" name="pria" placeholder="Pria">
                </div>
                <div class="col-sm-1" align="right">
                    <label class="control-label ">Wanita:</label>
         		</div>
				<div class="col-sm-2">
					<input type="number" class="form-control form-control-sm wajib" value="" id="wanita" name="wanita" placeholder="Wanita">
				</div>
      		  </div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="form-group">
				  <div class="col-sm-12">
					  <label>Berdasarkan Persetujuan Budget Manpower Planning:</label>
					  &nbsp&nbsp
					  <label class="control-label">
						<input type="radio"  name="approval" value="yes" id="yes" onclick="radio()" checked> Yes
					  </label>
					  &nbsp&nbsp
					  <label class="control-label">
						<input type="radio" name="approval" value="no" id="no" onclick="radio()"> No
					  </label>
				  </div>
				  <div class="co-sm-12">
      				<p class="form-control " id="isi">Jika ya, Lampirkan Manpower Planning yang disetujui <input type="file" class="wajib" name="mp1" id="mp1" accept="application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></p>
				  </div>
    		 </div>
    		<div class="form-group">
				<div class="col-sm-12">
				  <label>Status Karyawan:</label>
				  &nbsp&nbsp
				  <label class="control-label">
					<input type="radio" name="status" value="bulanan" id="bulanan" onclick="fkontrak()" checked> Bulanan
				  </label>
				  &nbsp&nbsp
				  <label class="control-label">
					<input type="radio" name="status" value="harian" id="harian" onclick="fkontrak()"> Harian
				  </label>
				  &nbsp&nbsp
				  <label class="control-label">
					<input type="radio" name="status" value="kontrak" id="kontrak" onclick="fkontrak()"> Kontrak
					<span id="isikontrak"></span>
				  </label>
				  </div>
			   </div>
			 </div>
			 </div>
		  
		  
				<div class="card card-default tab">
					<div class="card-header bg-danger">
						<div class="row">  
							<h3 class="card-title">2. Uraian Pekerjaan (Tugas dan Tanggung Jawab)</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<textarea class="textarea form-control wajib" rows="5" id="jobdesk" name="jobdesk" style=" width: 100%;" placeholder="Uraian Pekerjaan"></textarea>
						</div>
					</div>
				</div>
		  
				<div class="card card-default tab">
					<div class="card-header bg-gray">
						<div class="row">  
							<h3 class="card-title">3. Kualifikasi</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="form-group row">
						   <label class="control-label col-sm-1" style="text-align: left; margin-left: 3%;">Umur:</label>
						   <div class="col-sm-1">
							 <input type="number" class="form-control wajib form-control-sm" id="umur" name="umur" placeholder="Umur">
						   </div>
						   -
						   <div class="col-sm-1">
							 <input type="number" class="form-control wajib form-control-sm" id="umurs" name="umurs" placeholder="Umur" onchange="cekumur()">
						   </div>
						   <div class="col-sm-2" align="right">
							 <label class="control-label">Pendidikan:</label></div>
							 <div class="col-sm-4">
								<select id="pendidikan" name="pendidikan" class="form-control wajib" >
									<option value="sd">SD Sederajat</option>
									<option value="smp">SMP sederajat</option>
									<option value="sma">SMA/SMK Sederajat </option>
									<option value="uni">S1 Keatas </option>
								</select>
							   <!-- <input type="text" class="form-control wajib form-control-sm" id="pendidikan" name="pendidikan" placeholder="Enter Pendidikan"> -->
							 </div>
						 </div>
						
						
						
						<div class="form-group">
							  <label style="margin-left:3%;">Pengalaman:</label>
							  &nbsp&nbsp
							  <label class="control-label">
								<input type="radio" name="pengalamann" value="tidakpengalaman" id="tidakpengalaman" onclick="fpengalaman()" checked> Boleh yang tidak berpengalaman
							  </label>
							  &nbsp&nbsp
							  <label class="control-label">
								<input type="radio" name="pengalamann" value="pengalaman" id="pengalaman" onclick="fpengalaman()"> Pengalaman
								<span id="isipengalaman"></span>
							  </label>
						</div>

							<div class="form-group">
							  <label style="margin-left: 3%;">Kemampuan yang diharapkan:</label>
							  <textarea class="textarea form-control wajib" rows="5" id="kemampuan" name="kemampuan" style=" width: 100%;" placeholder="Kemampuan Yang Diharapkan"></textarea>
							</div>
							<div class="form-group col-sm-12">
							 <div class="row">
							  <label class="control-label col-sm-2" style="text-align: left; margin-left: 3%; text-align: right;">Gaji(GBS):</label>
							  <div class="col-sm-2">
								<input type="text" class="form-control wajib form-control-sm" id="startgaji" name="startgaji" placeholder="Start Gaji" onblur="cekgaji()" value="0">
							  </div>
							  <label class="col-sm-1 control-label" style="text-align: center;">s/d</label>
							  <div class="col-sm-2">
								<input type="text" class="form-control wajib form-control-sm" id="endgaji" name="endgaji" placeholder="End Gaji" onblur="cekgaji()" value="0">
							  </div>
							  <div class="col-sm-2" style="width:13.5%;"></div>
							</div>
					</div>
				</div>
  			</div>
		  
				<div class="card card-default tab">
					<div class="card-header bg-black">
						<div class="row">  
							<h3 class="card-title">4. Rencana</h3>
						</div>
					</div>
				<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<label class="control-label col-sm-4" style="text-align: right;">Manpower Planning Thn</label>
							<div class="col-sm-2">
							  <input type="number" class="form-control form-control-sm" id="rtahun" name="rtahun" placeholder="Manpower Planning Tahun">
							</div>
							<div class="col-sm-2">
							  <input type="number" class="form-control form-control-sm" id="jlhorg" name="jlhorg" placeholder="Jumlah Orang">
							</div>
							<div class="col-sm-2">
							<label class="control-label " style="text-align: left;">Orang</label>
							</div>
							
						</div>
						
						<div class="row">
								<label class="control-label col-sm-4" style="text-align: right;">Jumlah Karyawan Bulan</label>
								<div class="col-sm-2">
								  <input type="text" class="form-control wajib form-control-sm" id="jlhkaryawan" name="jlhkaryawan" placeholder="Jumlah Karyawan">
								</div>
								<div class="col-sm-2">
								  <input type="text" class="form-control wajib form-control-sm" id="jlhorg2" name="jlhorg2" placeholder="Jumlah Orang">
								</div>
								<div class="col-sm-2">
									<label class="control-label" style="text-align: left;">Orang</label>
								</div>
  							</div>
						
					  <div class="row">
						<label class="control-label col-sm-4" style="text-align: right;">Rencana Penambahan</label>
						<div class="col-sm-2">
						  <input type="text" class="form-control wajib form-control-sm" id="rencanapenambahan" name="rencanapenambahan" placeholder="Rencana Penambahan">
						</div>
						<div class="col-sm-2">
						  <input type="text" class="form-control wajib form-control-sm" id="jlhorg3" name="jlhorg3" placeholder="Jumlah Orang">
						</div>
						<div class="col-sm-2">
							<label class="control-label" style="text-align: left;">Orang</label>
					  	</div>
					  </div>
						
					</div>
				</div>
  
					<div class="row">
					<div class="col-sm-2">&nbsp</div>
					<div class="col-sm-2">
      					<button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					</div>
					<div class="col-sm-4" align="center" style="padding-top: 10px">
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
					</div>
					<div align="right" class="col-sm-2" id="nextBtn" >
<!--						<button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>-->
					</div>
					<div class="col-sm-2">&nbsp</div>
					</div>





</form>

<!-- Bootstrap WYSIHTML5 -->
<script src="lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script type="text/javascript">
function toangka(rp){
//var field = document.getElementById(id).value;
	if (rp !=""){
		angka = parseInt(rp.replace(/,.*|\D/g,''),10);
		if (angka>=0){
			return angka;
		}else{
			return 0;
		}
		
	}else{
		return 0;
	}
}

function cekgaji(){

	var gajia = document.getElementById('startgaji').value;
	var gajib = document.getElementById('endgaji').value;
			var ga = toangka(gajia); 
			var gb = toangka(gajib);
	
		if(ga>gb){
			document.getElementById('endgaji').value="";
		}

}

$(function () {
   
    $('.textarea').wysihtml5({
      toolbar: { fa: true }
    })
  })

	var startgaji = document.getElementById('startgaji');
  if(startgaji){
    startgaji.addEventListener('keyup', function(e){
      startgaji.value = formatRupiah(this.value);
    });
  }

var endgaji = document.getElementById('endgaji');
  if(endgaji){
    endgaji.addEventListener('keyup', function(e){
      endgaji.value = formatRupiah(this.value);
    });
  }
   
   function formatRupiah(bilangan){

    var number_string = bilangan.replace(/[^,\d]/g, '').toString();
    split = number_string.split(',');
    sisa  = split[0].length % 3;
    rupiah  = split[0].substr(0, sisa);
    ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);
    
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }
    
    return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : 'Rp.' + rupiah;
  }
 
  function radio(){
    var a = 'Jika ya, Lampirkan Manpower Planning yang disetujui <input type="file" class="wajib" name="mp1" accept="application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document">';
    var b = 'Jika Tidak, '
    + 'Menggantikan Formasi karena: &nbsp&nbsp'
    + '<input type="radio" name="mp" value="promosi" id="promosi" checked> Promosi&nbsp&nbsp'
    + '<input type="radio" name="mp" value="mutasi" id="mutasi"> Mutasi&nbsp&nbsp'
    + '<input type="radio" name="mp" value="pensiun" id="pensiun"> Pensiun&nbsp&nbsp'
    + '<input type="radio" name="mp" value="berhenti" id="berhenti"> Berhenti';

    if(document.getElementById('yes').checked){
      document.getElementById("isi").innerHTML = a;
    }else{
      document.getElementById("isi").innerHTML = b;
    }

  }

  function fkontrak(){
    if (document.getElementById('kontrak').checked) {
      var a = '<input type="text" id="bulan" name="bulan" size="2" value="0" class="wajib"> Bulan';
      document.getElementById("isikontrak").innerHTML = a;
    }else{
     document.getElementById("isikontrak").innerHTML = " "; 
   }

 }

 function fpengalaman(){
  if (document.getElementById('pengalaman').checked) {
    var a = '<input type="text" id="tahun" name="tahun" size="2" value="0" class="wajib"> Tahun';
    document.getElementById("isipengalaman").innerHTML = a;
  }else{
    document.getElementById("isipengalaman").innerHTML = " "; 
  }

}

function save_form(){
//  $.ajax({
//   type: "POST",
//   url: "save_permintaan_karyawan.php",
// 				processData: false,
//     			contentType: false, 
//   data: $("#form_permintaan").serialize(),
//   dataType: "text",  
//   cache:false,
//   success: 
//   function(data){
// //    data=data.split('|');
// //    if(data[1]=="Success"){
// //      alert("Success");
// //    }else{
// //      alert("Failed");
// //    }
//     // alert('Berhasil di Submit');
//     // location.reload();
//      // $('#isi_content').html(data);
//           // alert(data);  //as a debugging message.
          
          
//         }
// });// you have missed this bracket
//  return false;
 form_permintaan_karyawan();
}


</script>

<!-- form next -->
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {

  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (5 - 1)) {
    document.getElementById("nextBtn").innerHTML = '<button type="submit" onclick="save_form()" class="btn btn-primary">Submit</button>';
  } else {
    document.getElementById("nextBtn").innerHTML = '<button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>';
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("wajib");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


function cekumur(){
	var umur = document.getElementById("umur").value;
	var umurs = document.getElementById("umurs").value;
	if(umur>umurs){
		document.getElementById("umurs").value="";
	}
}

</script>