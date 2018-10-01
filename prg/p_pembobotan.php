<?php
include 'conn.php';

$divisi = $_POST['divisi'];
$btn = $_POST['btn'];
$pfaktor = explode( "|", $_POST['faktor']);
$bobot = $_POST['bobot'];
$noisi = $_POST['noisi'];
if($btn=="add"){
	$sql1 = "INSERT INTO `isibobot` (`noisi`, `divisi`, `namabobot`, `namafield`, `status`, `nilai`) VALUES (NULL, '$divisi', '$pfaktor[1]', '$pfaktor[0]', '$pfaktor[2]', '$bobot');";
	$query1 = $conn->query($sql1);
	
}else if($btn=="del"){
	$sql1 = "DELETE FROM `isibobot` WHERE `isibobot`.`noisi` = '$noisi'";
	$query1 = $conn->query($sql1);
}
$add=0;
$total=0;
						$sql1 = "SELECT * FROM `isibobot`where divisi = '$divisi'";
								$query1 = $conn->query($sql1);
								foreach ($query1 as $roww) {
									$total += $roww['nilai']; 
									 if($roww['namafield']=="komunikasi"){ $komunikasi="disabled" ;}
									 else if($roww['namafield']=="kecerdasan"){ $kecerdasan="disabled" ;}
									 else if($roww['namafield']=="pdiri"){ $pdiri="disabled" ;}
									 else if($roww['namafield']=="kumum"){ $kumum="disabled" ;}
									 else if($roww['namafield']=="kkhusus"){ $kkhusus="disabled" ;}
									 else if($roww['namafield']=="kepemimpinan"){ $kepemimpinan="disabled" ;}
									 else if($roww['namafield']=="motivasi"){ $motivasi="disabled" ;}
									 else if($roww['namafield']=="pengalaman"){ $pengalaman="disabled" ;}
									 else if($roww['namafield']=="keputusan"){ $keputusan="disabled" ;}
									 else if($roww['namafield']=="sosialisasi"){ $sosialisasi="disabled" ;}
									 else if($roww['namafield']=="rrtw"){ $rrtw="disabled" ;}
									 else if($roww['namafield']=="penyakit"){ $penyakit="disabled" ;}
									 else if($roww['namafield']=="pkkerja"){ $pkkerja="disabled" ;}
									 else if($roww['namafield']=="bahasa"){ $bahasa="disabled" ;}
									 else if($roww['namafield']=="gaji"){ $gaji="disabled" ;}
									 $add++;
								}


?>
			<table id="example2" >
							<tr>
								<td>
								<select id="faktor" name="faktor" class="form-control">
									<option value="kosong">-- Pilih --</option>
									<option <?= $komunikasi ?> value="komunikasi|Komunikasi|b">Komunikasi</option>
									<option <?= $kecerdasan ?> value="kecerdasan|Kecerdasan|b">Kecerdasan</option>
									<option <?= $pdiri ?> value="pdiri|Percaya Diri|b">Percaya Diri</option>
									<option <?= $kumum ?> value="kumum|Kemampuan Umum|b">Kemampuan Umum</option>
									<option <?= $kkhusus ?> value="kkhusus|Kemampuan Khusus|b">Kemampuan Khusus</option>
									<option <?= $kepemimpinan ?> value="kepemimpinan|Kepemimpinan|b">Kepemimpinan</option>
									<option <?= $motivasi ?> value="motivasi|Motivasi|b">Motivasi</option>
									<option <?= $pengalaman ?> value="pengalaman|Pengalaman|b">Pengalaman</option>
									<option <?= $keputusan ?> value="keputusan|Keputusan|b">Keputusan</option>
									<option <?= $sosialisasi ?> value="sosialisasi|Sosialisasi|b">Sosialisasi</option>
									<option <?= $rrtw ?> value="rrtw|Rata-Rata Wawancara|b">Rata-Rata Wawancara</option>
									<option <?= $penyakit ?> value="penyakit|Penyakit|c">Penyakit</option>
									<option <?= $pkkerja ?> value="pkkerja|Pengalaman Kerja|b">Pengalaman Kerja</option>
									<option <?= $bahasa ?> value="bahasa|Bahasa|b">Bahasa</option>
									<option <?= $gaji ?> value="gaji|Gaji|c">Gaji</option>
									
								</select>
								</td>
								<td>
									&nbsp Bobot : &nbsp
								</td>
								<td>
									 <input class="form-control " type="number" name="bobot" id="bobot" placeholder="Bobot" onblur="maxi(this.value,<?=$total ?>)" value="0">
								</td>
								<td>
									 &nbsp<input <?php if($add>4 || $total >=100 ){echo 'disabled';} ?> type="button"  id="btn" class="btn  btn-primary" name="btn" onclick="simpan(this.value)" value="add">
								</td>
								<td>
									&nbsp Sisa : <?= 100 - $total;  ?>%
								</td>
							</tr>
						</table>
						<br>
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Faktor</th>
									<th>Bobot</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php


								$sql = "SELECT * FROM `isibobot`where divisi = '$divisi'";

								$query = $conn->query($sql);
								foreach ($query as $row) {

									?>
									<tr>
										<td><?=$row['namabobot'];?></td>
										<td><?=$row['nilai'];?></td>
										<?php 
										$pch=explode(" ", $row['status_k']);

										if($row['status_k'] == "wawancara ke 1" || $row['status_k'] == "wawancara ke 2" || $pch[2]>1){
											$field="hidden";
										} ?>
										<td><button type="button" onclick="del('<?=$row[noisi]?>')" id="reject" class="btn btn-danger fa fa-close" title="Delete"></button>
										</td>
									</tr>
									<?php
									$field="";
								}

								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Faktor</th>
									<th>Bobot</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
<script type="text/javascript">
	function maxi(nilai,ttl){
		var total = parseInt(nilai) + parseInt(ttl);

		var sisa = 100 - <?= $total; ?>;

		if(total>100){
				alert('max bobot adalah 100');
			document.getElementById("bobot").value=sisa;
		}
	}

	function simpan(btn){
	 // var btn =  document.getElementById("btn").value;
	 var faktor =  document.getElementById("faktor").value;
	 var bobot =  document.getElementById("bobot").value;
	 var divisi =  document.getElementById("divisi").value;

	 if(faktor=="kosong"){
	 		document.getElementById("faktor").focus();
	 }else if(bobot<=0 || bobot == ""){
	 		document.getElementById("bobot").focus();
	 }else{
		$.ajax({
			type: "POST",
			url: "p_pembobotan.php", 
			data: {btn:btn, faktor:faktor, bobot:bobot, divisi:divisi},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				//penilaian();
				 $('#isi_pelamar').html(data);
					//alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
	  }
	}
  function del(noisi){
	 var divisi =  document.getElementById("divisi").value;
		$.ajax({
			type: "POST",
			url: "p_pembobotan.php", 
			data: {btn:'del', noisi:noisi, divisi:divisi},
			dataType: "text",  
			cache:false,
			success: 
			function(data){
				//penilaian();
				$('#isi_pelamar').html(data);
				//	alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
		return false;
  }
</script>