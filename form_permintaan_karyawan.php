<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Permintaan Karyawan Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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


  <div class="container">
    <h2 align="center">Form Permintaan Karyawan Baru</h2>
    <form class="form-horizontal" action="#">
      <div class="form-group" align="center">
        <label class="control-label col-sm-offset-4 col-sm-1">No:</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="noform" name="noform" readonly>
        </div>
      </div>
      <br><br>


      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align: left;">Nama Pemohon:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="namapemohon" name="namapemohon" readonly>
        </div>
        <label class="control-label col-sm-2 col-sm-offset-3">Tanggal:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="tglmohon" name="tglmohon" readonly>
        </div>
      </div>
      <hr style="height: 1px; margin-bottom: 40px;" noshade>


     <!--  <div style="margin-bottom: 10px; height: 150px;">
        <div class="col-sm-5" style="border:1px solid grey; background-color: lightgrey;">
          <h4 align="center"> Personalia </h4>
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Nama:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="namapersonalia" name="namapersonalia" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Tanggal:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tglpersonalia" name="tglpersonalia" readonly>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-5" style="border:1px solid grey; background-color: lightgrey;">
          <h4 align="center"> Personalia </h4>
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Nama:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="namapersonalia" name="namapersonalia" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" style="text-align: left;">Tanggal:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tglpersonalia" name="tglpersonalia" readonly>
            </div>
          </div>
        </div>
      </div> -->

      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align: left;">Divisi/Dept:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Enter Divisi">
        </div>
        <label class="control-label col-sm-2 col-sm-offset-1">Job Kelas:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="job" name="job" placeholder="Enter Job Kelas">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align: left;">Jabatan:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Enter Jabatan">
        </div>
      </div>
      <br>
      <h4>1. Penambahan Jumlah Karyawan</h4>
      <div class="form-group">
        <label class="control-label col-sm-1">Pria:</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" value="0" id="pria" name="pria" placeholder="Pria">
        </div>
        <label class="control-label col-sm-1">Wanita:</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" value="0" id="wanita" name="wanita" placeholder="Wanita">
        </div>
      </div>
      <div class="form-group">
        <label style="margin-left:4%;">Berdasarkan Persetujuan Budget Manpower Planning:</label>
        &nbsp&nbsp
        <label class="control-label">
          <input type="radio" name="approval" value="yes" id="yes" onclick="radio()"> Yes
        </label>
        &nbsp&nbsp
        <label class="control-label">
          <input type="radio" name="approval" value="no" id="no" onclick="radio()"> No
        </label>
      </div>
      <p style="margin-left: 4%;" id="isi"></p>
      <div class="form-group">
        <label style="margin-left:4%;">Status Karyawan:</label>
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

      <h4>2. Uraian Pekerjaan (Tugas dan Tanggung Jawab)</h4>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="jobdesk" style="margin-left: 4%; width: 95%;"></textarea>
      </div>

      <h4>3. Kualifikasi</h4>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align: left; margin-left: 3%;">Umur:</label>
        <div class="col-sm-1">
          <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
        </div>
        <div class="col-sm-2" style="width:13.5%;"></div>
        <label class="control-label col-sm-4">Pendidikan:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Enter Pendidikan">
        </div>
      </div>
      <div class="form-group">
        <label style="margin-left:4%;">Pengalaman:</label>
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
      <label style="margin-left: 3%;">Kemampuan yang diharapkan:</label>
      <div class="form-group">
        <textarea class="form-control" rows="5" id="kemampuan" style="margin-left: 4%; width: 95%;"></textarea>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-1" style="text-align: left; margin-left: 3%;">Gaji(GBS):</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="startgaji" name="startgaji" placeholder="Start Gaji">
        </div>
        <label class="col-sm-1 control-label" style="text-align: center;">s/d</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="endgaji" name="endgaji" placeholder="End Gaji">
        </div>
        <div class="col-sm-2" style="width:13.5%;"></div>
      </div>

      <h4>4. Rencana</h4>
      <div class="form-group">
        <label class="control-label col-sm-2" style="margin-left: 3%;text-align: left;">Rencana Dibutuhkan:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="rencana" name="rencana" placeholder="Rencana Dibutuhkan">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" style="margin-left: 3%;text-align: left;">Manpower Planning Thn</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Manpower Planning Tahun">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jlhorg" name="jlhorg" placeholder="Jumlah Orang">
        </div>
        <label class="control-label" style="text-align: left;">Orang</label>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" style="margin-left: 3%;text-align: left;">Jumlah Karyawan Bulan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jlhkkaryawan" name="jlhkkaryawan" placeholder="Jumlah Karyawan">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jlhorg2" name="jlhorg2" placeholder="Jumlah Orang">
        </div>
        <label class="control-label" style="text-align: left;">Orang</label>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" style="margin-left: 3%;text-align: left;">Rencana Penambahan</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="rencanapenambahan" name="rencanapenambahan" placeholder="Rencana Penambahan">
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="jlhorg3" name="jlhorg3" placeholder="Jumlah Orang">
        </div>
        <label class="control-label" style="text-align: left;">Orang</label>
      </div>





      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function radio(){
      var a = 'Jika ya, Lampirkan Manpower Planning yang disetujui'
      + '<input type="file" name="mp" accept="application/msword,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document">';
      var b = 'Jika Tidak, '
      + 'Menggantikan Formasi karena: &nbsp&nbsp'
      + '<input type="radio" name="approvalno" value="promosi" id="promosi"> Promosi&nbsp&nbsp'
      + '<input type="radio" name="approvalno" value="mutasi" id="mutasi"> Mutasi&nbsp&nbsp'
      + '<input type="radio" name="approvalno" value="pensiun" id="pensiun"> Pensiun&nbsp&nbsp'
      + '<input type="radio" name="approvalno" value="berhenti" id="berhenti"> Berhenti';

      if(document.getElementById('yes').checked){
        document.getElementById("isi").innerHTML = a;
      }else{
        document.getElementById("isi").innerHTML = b;
      }

    }

    function fkontrak(){
      if (document.getElementById('kontrak').checked) {
        var a = '<input type="text" id="bulan" name="bulan" size="2" value="0"> Bulan';
        document.getElementById("isikontrak").innerHTML = a;
      }else{
       document.getElementById("isikontrak").innerHTML = " "; 
     }

   }

   function fpengalaman(){
    if (document.getElementById('pengalaman').checked) {
      var a = '<input type="text" id="tahun" name="tahun" size="2" value="0"> Tahun';
      document.getElementById("isipengalaman").innerHTML = a;
    }else{
     document.getElementById("isipengalaman").innerHTML = " "; 
   }

 }


</script>

</body>
</html>
