


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

  ?>


<?php
  $number = 1;
?>
  <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0 text-dark">Form Permintaan Karyawan Baru</h1>
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
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content" >
  <div class="container-fluid">
   <!-- Small boxes (Stat box) -->
   <div class="row">
    <div class="col-lg-12">
     <!-- small box -->
     <div class="card card-default">
       <div class="card-header">
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
          <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Enter Divisi">
        </div>
        <div class="col-sm-4">
          <label class="control-label">Job Kelas:</label>
          <input type="text" class="form-control" id="job" name="job" placeholder="Enter Job Kelas">
        </div>
        <div class="col-sm-4">
         <label class="control-label" style="text-align: left;">Jabatan:</label>
         <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Enter Jabatan">
       </div>


       <div class="form-group col-sm-12" style="padding-top: 20px;">	
         <div class="row">
          <div class="col-sm-6">
           <h4>1. Penambahan Jumlah Karyawan</h4>
         </div>
         <div class="col-sm-1" align="right">
           <label class="control-label">Pria:</label>
         </div>
         <div class="col-sm-2">
          <input type="number" class="form-control form-control-sm" value="0" id="pria" name="pria" placeholder="Pria">
        </div>
        <div class="col-sm-1" align="right">
         <label class="control-label ">Wanita:</label>
       </div>
       <div class="col-sm-2">
        <input type="number" class="form-control form-control-sm" value="0" id="wanita" name="wanita" placeholder="Wanita">
      </div>
    </div>
  </div>


  <div class="form-group col-sm-12">
    <label style="margin-left:4%;">Berdasarkan Persetujuan Budget Manpower Planning:</label>
    &nbsp&nbsp
    <label class="control-label">
      <input type="radio" name="approval" value="yes" id="yes" onclick="radio()"> Yes
    </label>
    &nbsp&nbsp
    <label class="control-label">
      <input type="radio" name="approval" value="no" id="no" onclick="radio()"> No
    </label>
    <p class="co-sm-12" style="margin-left: 4%;" id="isi"></p>
  </div>
  <div class="form-group col-sm-12">
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

  <div class="form-group col-sm-12">
    <h4>2. Uraian Pekerjaan (Tugas dan Tanggung Jawab)</h4>
    <textarea class="form-control" rows="5" id="jobdesk" style="margin-left: 4%; width: 95%;"></textarea>
  </div>


  <div class="form-group col-sm-12">
    <h4>3. Kualifikasi</h4>
    <div class="row">
     <label class="control-label col-sm-1" style="text-align: left; margin-left: 3%;">Umur:</label>
     <div class="col-sm-1">
       <input type="text" class="form-control form-control-sm" id="umur" name="umur" placeholder="Umur">
     </div>
     <div class="col-sm-2" align="right">
       <label class="control-label">Pendidikan:</label></div>
       <div class="col-sm-4">
         <input type="text" class="form-control form-control-sm" id="pendidikan" name="pendidikan" placeholder="Enter Pendidikan">
       </div>
     </div>

   </div>
   <div class="form-group col-sm-12">
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

  <div class="form-group col-sm-12">
    <label style="margin-left: 3%;">Kemampuan yang diharapkan:</label>
    <textarea class="form-control" rows="5" id="kemampuan" style="margin-left: 4%; width: 95%;"></textarea>
  </div>
  <div class="form-group col-sm-12">
   <div class="row">
    <label class="control-label col-sm-1" style="text-align: left; margin-left: 3%;">Gaji(GBS):</label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" id="startgaji" name="startgaji" placeholder="Start Gaji">
    </div>
    <label class="col-sm-1 control-label" style="text-align: center;">s/d</label>
    <div class="col-sm-2">
      <input type="text" class="form-control form-control-sm" id="endgaji" name="endgaji" placeholder="End Gaji">
    </div>
    <div class="col-sm-2" style="width:13.5%;"></div>
  </div>
</div>

<div class="form-group col-sm-12">
  <h4>4. Rencana</h4>
  <div class="row">
    <div class=" col-sm-2" style="margin-left: 3%;text-align: left;">
     <label class="control-label" >Rencana Dibutuhkan:</label>
   </div>
   <div class="col-sm-4">
    <input type="text" class="form-control form-control-sm" id="rencana" name="rencana" placeholder="Rencana Dibutuhkan">
  </div>
</div>
</div>
<div class="form-group col-sm-12">
  <div class="row">
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
</div>
<div class="form-group col-sm-12">
  <div class="row">
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
</div>
<div class="form-group col-sm-12">
  <div class="row">
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
</div>





<div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
</div>
<!--							---------------------------------------------------------------------------------------------------------------->

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

