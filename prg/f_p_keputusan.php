<?php
include 'conn.php';
$idpelamar = $_POST['idpelamar'];
	$sql_pelamar = "SELECT * FROM `pelamar` WHERE `pelamar`.`idpelamar` = $idpelamar;";
	$query_pelamar = $conn->query($sql_pelamar);
		foreach ($query_pelamar as $row_pelamar){
			$namapelamar = $row_pelamar['namapelamar'];
			$fotopelamar = $row_pelamar['fotopelamar'];
			$jabatandilamar = $row_pelamar['jabatandilamar'];
		}
	$sql_wawancara = "SELECT * FROM `wawancara` WHERE idpelamar='$idpelamar'";
	$query_wawancara = $conn->query($sql_wawancara);
	$n=1;
		foreach ($query_wawancara as $row_wawancara){
			$id[$n]=$row_wawancara['id'];
			$nilai[$n]=$row_wawancara['nilai'];
		$n++;	
		}


	$sql_karyawan = "SELECT * FROM `permintaan_karyawan` WHERE nopk='$jabatandilamar'";
	$query_karyawan = $conn->query($sql_karyawan);
		foreach ($query_karyawan as $row){
			$divisi = $row['divisi'];
			$job_kelas = $row['job_kelas'];
			$jabatan = $row['jabatan'];
		}	
	
?>
					<div class="row">  
						<h3 class="card-title col-sm-4">Jabatan : <?= $jabatan ?></h3>
						<h3 class="card-title col-sm-4" style="text-align: center;">Divisi : <?= $divisi ?></h3>
						<h3 class="card-title col-sm-4" style="text-align:right;">Kelas Jabatan : <?= $job_kelas ?></h3>
					</div>
					<hr>
					<div class="row">  
						<h3 class="card-title col-sm-4">Nilai Wawancara 1 : <b> <?= $nilai[1]; ?> </b></h3>
						<h3 class="card-title col-sm-4" style="text-align: center;">Nilai Wawancara 2 : <b> <?= $nilai[2]; ?> </b></h3>
						<h3 class="card-title col-sm-4" style="text-align:right;">Rata-Rata : <b><u><?php echo ($nilai[1] + $nilai[2])/2; ?></u></b></h3>
					</div>

						<hr>
					<div class="row">
						<label class="control-label col-sm-2" style="text-align: right;">Tanggal Masuk Kerja</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="tglmasuk" name="tglmasuk" placeholder="Tanggal Masuk Kerja">
								</label>
						

						<label class="control-label col-sm-2" style="text-align: right;">Gaji</label>
								<label class="col-sm-4">
								  <input type="text" class="form-control wajib form-control-sm" id="gaji" name="gaji" placeholder="Gaji">
								</label>

						<label class="control-label col-sm-12" style="">Tunjangan :</label>
						<label class="control-label col-sm-2" style="text-align: right;">Uang Makan</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="uangmakan" name="uangmakan" placeholder="Uang Makan">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Pengobatan</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="pengobatan" name="pengobatan" placeholder="Pengobatan">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Transportasi</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="transportasi" name="transportasi" placeholder="Transportasi">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Jamsostek</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="jamsostek" name="jamsostek" placeholder="Jamsostek">
								</label>
						<label class="control-label col-sm-2" style="text-align: right;">Fasilitas Lain</label>
								<label class="col-sm-10">
								  <input type="text" class="form-control wajib form-control-sm" id="fasilitaslain" name="fasilitaslain" placeholder="Fasilitas Lain">
								</label>
					</div>
					<hr>
					<div align="right">
						<button class="btn btn-success" type="button" onclick="simpan()">Send</button>
					</div>
					<script type="text/javascript">
	var ingin_gaji = document.getElementById('gaji');
	
	  if(ingin_gaji){
	    ingin_gaji.addEventListener('keyup', function(e){
	      ingin_gaji.value = formatRupiah(this.value);
	    });
	  }
	  var t_umakan = document.getElementById('uangmakan');
	  if(t_umakan){
	    t_umakan.addEventListener('keyup', function(e){
	      t_umakan.value = formatRupiah(this.value);
	    });
	  }
	  var t_pengobatan = document.getElementById('pengobatan');
	  if(t_pengobatan){
	    t_pengobatan.addEventListener('keyup', function(e){
	      t_pengobatan.value = formatRupiah(this.value);
	    });
	  }
	  var t_transpotasi = document.getElementById('transportasi');
	  if(t_transpotasi){
	    t_transpotasi.addEventListener('keyup', function(e){
	      t_transpotasi.value = formatRupiah(this.value);
	    });
	  }
	  var tjamsostek = document.getElementById('jamsostek');
	  if(tjamsostek){
	    tjamsostek.addEventListener('keyup', function(e){
	      tjamsostek.value = formatRupiah(this.value);
	    });
	  }
	  var t_fasilitaslain = document.getElementById('fasilitaslain');
	  if(t_fasilitaslain){
	    t_fasilitaslain.addEventListener('keyup', function(e){
	      t_fasilitaslain.value = formatRupiah(this.value);
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


  function limitCharacter(event){
    key = event.which || event.keyCode;
    if ( key != 9 
       && key != 188 // Comma
       && key != 8 // Backspace
       && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
       && (key < 48 || key > 57) // Non digit
       // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
       ) 
    {
      event.preventDefault();
      return false;
    }
  }
  $('#tglmasuk').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    })
					</script>

