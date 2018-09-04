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

					<table id="example2" class="table table-hover">
						<thead>
							<tr align="center">
								<th>Faktor</th>
								<th>Rendah</th>
								<th>Kurang</th>
								<th>Cukup</th>
								<th>Baik</th>
								<th>Tinggi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Komunikasi</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="komunikasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="komunikasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="komunikasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="komunikasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="komunikasi" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kecerdasan</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kecerdasan" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kecerdasan" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kecerdasan" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kecerdasan" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kecerdasan" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kepercayaan Diri</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="percaya_diri" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="percaya_diri" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="percaya_diri" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="percaya_diri" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="percaya_diri" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kemampuan Umum</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_umum" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_umum" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_umum" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_umum" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_umum" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kemampuan Khusus</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_khusus" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_khusus" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_khusus" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_khusus" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kemampuan_khusus" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Kepemimpinan</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kepemimpinan" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kepemimpinan" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kepemimpinan" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kepemimpinan" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="kepemimpinan" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Motivasi</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="motivasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="motivasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="motivasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="motivasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="motivasi" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Pengalaman</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengalaman" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengalaman" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengalaman" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengalaman" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengalaman" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Pengambilan Keputusan</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengambilan_keputusn" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengambilan_keputusn" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengambilan_keputusn" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengambilan_keputusn" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="pengambilan_keputusn" class="flat-red" value="5"></td>
							</tr>
							<tr>
								<td>Sosialisasi</td>
								<td align="center"><input type="radio" onclick="htnilai()" name="sosialisasi" class="flat-red" value="1"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="sosialisasi" class="flat-red" value="2"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="sosialisasi" class="flat-red" value="3" checked></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="sosialisasi" class="flat-red" value="4"></td>
								<td align="center"><input type="radio" onclick="htnilai()" name="sosialisasi" class="flat-red" value="5"></td>
							</tr>
						</tbody>
					</table>
					<hr>
					<div class="row">
					<div class="col-sm-6" style="height: 90px">
						<p id="ch" >
						<input type="text"  class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="90"
                           data-height="90" data-fgColor="#3c8dbc" data-readonly="true"> Dapat lanjut di Wawancara selanjutnya
                    	</p>
                    </div>
					<div align="right" class="col-sm-6">
						<button class="btn btn-success" type="button" onclick="simpan()">Send</button>
					</div>
					</div>

<script src="lte/plugins/knob/jquery.knob.js"></script>
					<script type="text/javascript">
							function htnilai(){
						$.ajax({
							type: "POST",
							url: "hitung_nilai.php", 
							data: $("#form_wawancara").serialize(),
							dataType: "text",  
							cache:false,
							success: 
							function(data){
								$('#ch').html(data);
									//alert(data);  //as a debugging message.
								}
							  });// you have missed this bracket
						return false;
				  }

						$(function () {
					    /* jQueryKnob */

					    $('.knob').knob({
					      /*change : function (value) {
					       //console.log("change : " + value);
					       },
					       release : function (value) {
					       console.log("release : " + value);
					       },
					       cancel : function () {
					       console.log("cancel : " + this.value);
					       },*/
					      draw: function () {

					        // "tron" case
					        if (this.$.data('skin') == 'tron') {

					          var a   = this.angle(this.cv)  // Angle
					            ,
					              sa  = this.startAngle          // Previous start angle
					            ,
					              sat = this.startAngle         // Start angle
					            ,
					              ea                            // Previous end angle
					            ,
					              eat = sat + a                 // End angle
					            ,
					              r   = true

					          this.g.lineWidth = this.lineWidth

					          this.o.cursor
					          && (sat = eat - 0.3)
					          && (eat = eat + 0.3)

					          if (this.o.displayPrevious) {
					            ea = this.startAngle + this.angle(this.value)
					            this.o.cursor
					            && (sa = ea - 0.3)
					            && (ea = ea + 0.3)
					            this.g.beginPath()
					            this.g.strokeStyle = this.previousColor
					            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
					            this.g.stroke()
					          }

					          this.g.beginPath()
					          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
					          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
					          this.g.stroke()

					          this.g.lineWidth = 2
					          this.g.beginPath()
					          this.g.strokeStyle = this.o.fgColor
					          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
					          this.g.stroke()

					          return false
					        }
					      }
					    })
					    })
					</script>