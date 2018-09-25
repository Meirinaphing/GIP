<?php 
  include '../conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<style>
  .tab {
    display: none;
  }
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #3761D4;
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
    background-color: #299F3E;
  }

  .hr {
    background-color: dimgrey !important;
    color: dimgrey !important;
    border: solid 2px dimgrey !important;
    height: 5px !important;

  }
/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}
textarea.invalid {
  background-color: #ffdddd;
}
</style>	




<body class="hold-transition skin-blue layout-top-nav">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      
      <section class="content-header" align="center" style="text-align: center">
        <h1>
          PT. GRAHA INTI PERMAI
          <small>Application Form</small>
          <br>
        </h1>
      </section>
      
      <form action="proses.php" enctype="multipart/form-data" method="POST"  >
        <!-- Main content -->
        <section class="content">

          <div class="row">
           <div class="box-body">
             <div class="tab">
               <div class="col-sm-2">&nbsp</div>
               <div class="col-md-8">

                <div class="box box-success">
                  <div class="box-header box-success">
                    <h2 class="box-title"><span class="fa fa-user-circle"></span> Data Pribadi</h2>
                    <div class="box-tools pull-right"></div>
                  </div>

                  <div class="box-body">

                    <div class="form-group col-sm-6">
                      <label>Nama :</label>	
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </div>
                        <input id="nama_pelamar " name="nama_pelamar" type="text" class="form-control wajib" placeholder="Nama Lengkap">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group col-sm-6">
                      <label>Foto :</label>	
                      <div class="input-group" id="tam-foto">
                       <input type="file" id="Foto_Pelamar" name="Foto_Pelamar" class="wajib">
                       <p class="help-block">Ukuran foto 3x4</p>
                     </div>
                     <!-- /.input group -->
                   </div>

                   <div class="form-group col-sm-6">
                     <div class="col-sm-12 col-xs-12" style="padding: 0px">
                      <label>Tempat / Tgl.Lahir :</label>
                    </div>	
                    <div class="row">
                     <div class="col-sm-6 col-xs-6" style="padding-right: 0px;">
                       <div class="input-group">
                         <div class="input-group-addon">
                          <i class="fa fa-globe"></i>
                        </div>
                        <div class="input-group">
                         <input type="text" id="tempatlahir" name="tempatlahir" class="form-control wajib" placeholder="Tempat">
                       </div>
                     </div>
                   </div>

                   <div class="col-sm-6 col-xs-6" style="padding-left: 0px; padding-right: 0px;">
                     <div class="input-group">
                       <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <div class="input-group">
                       <input type="text" id="tanggallahir" name="tanggallahir" class="form-control wajib" placeholder="Tanggal" >
                     </div>
                   </div>
                 </div>
               </div>
               <!-- /.input group -->
             </div>
             <!-- /.form group -->

             <div class="form-group col-sm-6">
              <label>No KTP:</label>

              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <input type="text" class="form-control pull-right wajib" id="noktp" name="noktp" placeholder="No KTP">
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-6">
              <label>Email:</label>

              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                </div>
                <input type="email" class="form-control pull-right wajib" id="email" name="email" placeholder="Email" onblur="emailck()">
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-12">
              <label>Alamat:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-edit"></i>
                </div>
                <textarea id="alamatktp" name="alamatktp" class="form-control wajib" placeholder="Alamat Sesuai KTP"></textarea>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-12">
              <label>Jabatan Yang Di Lamar:</label>

              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-user-secret"></i>
                </div>
                <select id="jabatanygdilamar" name="jabatanygdilamar" class="form-control select2" style="width: 100%;">
          <?php
              echo $sql = "select * from permintaan_karyawan where status = 'Approved'";
                $query = $conn->query($sql);
                foreach ($query as $row) {
          ?>
                  <option value="<?php echo $row['nopk']; ?>"><?php echo $row['jabatan']; ?></option>
          <?php 
            }
          ?>
                </select>
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-12">
              <label>Jenis Kelamin:</label>

              <div class="input-group date">

                <input type="radio" class="minimal" name="jk_pelamar" value="Pria" checked> Pria
                <label></label>
                <input type="radio" class="minimal-red" name="jk_pelamar" value="Wanita"> Wanita
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-12">
              <label>Status:</label>

              <div class="input-group date">
                <input value="Belum Nikah" type="radio" name="stat_pelamar" class="flat-red" checked> Belum Menikah
                <input value="Sudah Nikah" type="radio" name="stat_pelamar" class="flat-red"> Sudah Menikah
                <input value="Janda/Duda" type="radio" name="stat_pelamar" class="flat-red"> Janda/Duda
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-sm-6">
              <label>Kebangsaan :</label>	
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-globe"></i>
                </div>
                <input type="text" class="form-control wajib" id="kebangsaan_pelamar" name="kebangsaan_pelamar" placeholder="Indonesia">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <div class="form-group col-sm-6">
              <label>No Telepon:</label>	
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" class="form-control wajib" id="notlpn_pelamar" name="notlpn_pelamar" data-inputmask="'mask': '9999-9999-99999'" data-mask placeholder="0811-2233-4455">
              </div>

              <!-- /.input group -->
            </div>


          </div>  
          <!--			  pembatas-->
          <hr>
          <!--			  Pembatas-->
          <div class="box-header">
            <h3 class="box-title"><span class="fa fa-users"></span> Susunan Keluarga, <small>Termasuk Anda</small></h3>
          </div>
          <div class="box-body">
            <div class="form-group col-sm-6">
              <label>Jumlah Saudara:</label>	
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-users"></i>
                </div>
                <input type="number" value="1" id="jlh_saudara" name="jlh_saudara" class="form-control wajib" onChange="tambahsasudara(this.value)">
              </div>

              <!-- /.input group -->
            </div>
            <!-- Date dd/mm/yyyy -->
            <table class="table table-bordered">
              <tbody><tr>
                <th style="width: 17%">Hubungan</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Pendidikan Trakhir</th>
                <th>Keterangan</th>
              </tr>
              <tr>
                <td><span class="form-control">Ayah</span></td>
                <td><input type="text" class="form-control wajib" placeholder="Nama" name="namaayah" id="namaayah"></td>
                <td><input type="number" class="form-control wajib" Placeholder="usia" name="usiaayah" id="usiaayah"></td>
                <td><input type="text" class="form-control wajib" placeholder="pendidikan terakhir" name="pendidikanayah" id="pendidikanayah"></td>
                <td><textarea class="form-control wajib" placeholder="keterangan" name="keteranganayah" id="keteranganayah"></textarea></td>
              </tr>
              <tr>
                <td><span class="form-control">Ibu</span></td>
                <td><input type="text" class="form-control wajib" placeholder="Nama" name="namaibu" id="namaibu"></td>
                <td><input type="number" class="form-control wajib" Placeholder="usia" name="usiaibu" id="usiaibu"></td>
                <td><input type="text" class="form-control wajib" placeholder="pendidikan terakhir" name="pendidikanibu" id="pendidikanibu"></td>
                <td><textarea class="form-control wajib" placeholder="keterangan" name="keteranganibu" id="keteranganibu"></textarea></td>
              </tr>

            </tbody>
            <tfoot id="u_saudara">
             <!-- isi soudara -->
           </tfoot>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->

   </div> 
   <div class="col-sm-2">&nbsp</div>
 </div>

 <div class="tab">
  <div class="col-sm-2">&nbsp</div>
  <div class="col-md-8">

    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title"><span class="fa fa-mortar-board"></span> Latar Belakang Pendidikan</h3>
      </div>
      <div class="box-body">
       <div class="form-group">
        <label>1. Pendidikan Formal:</label>
        <!-- /.input group -->
        <table class="table table-bordered">
          <tbody><tr>
            <th style="width: 10%">Tingkat</th>
            <th colspan="2" style="width: 40%">Nama Sekolah / Perguruan Tinggi</th>
            <th>Jurusan</th>
            <th>IPK</th>
          </tr>
          <tr>
            <td><span class="form-control">SD</span></td>
            <td colspan="2"><input type="text" class="form-control wajib" placeholder="Nama Sekolah / Perguruan tinggi" name="namasd" id="namasd"></td>

            <td><input type="text" class="form-control wajib" placeholder="Jurusan" name="jurusansd" id="jurusansd"></td>
            <td><input type="number" class="form-control wajib" placeholder="IPK" name="ipksd" id="ipksd"></td>
          </tr>
          <tr>
            <td colspan="" width="20%" class="hidden-xs"></td>
            <td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
            <td><input type="text" class="form-control wajib" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Masuk" name="masuksd" id="masuksd"></td>
            <td><input type="text" class="form-control wajib" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Selesai" name="selesaisd" id="selesaisd"></td>
          </tr>
          
          <tr>
            <td><span class="form-control">SMP</span></td>
            <td colspan="2"><input type="text" class="form-control " placeholder="Nama Sekolah / Perguruan tinggi" name="namasmp" id="namasmp"></td>

            <td><input type="text" class="form-control" placeholder="Jurusan" name="jurusansmp" id="jurusansmp"></td>
            <td><input type="number" class="form-control" placeholder="IPK" name="ipksmp" id="ipksmp"></td>
          </tr>
          <tr>
            <td colspan="" width="20%" class="hidden-xs"></td>
            <td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Masuk" name="masuksmp" id="masuksmp"></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Selesai" name="selesaismp" id="selesaismp"></td>
          </tr>
          
          <tr>
            <td><span class="form-control">SMA</span></td>
            <td colspan="2"><input type="text" class="form-control" placeholder="Nama Sekolah / Perguruan tinggi" name="namsma" id="namsma"></td>

            <td><input type="text" class="form-control" placeholder="Jurusan" name="jurusansma" id="jurusansma"></td>
            <td><input type="number" class="form-control" placeholder="IPK" name="ipksma" id="ipksma"></td>
          </tr>
          <tr>
            <td colspan="" width="20%" class="hidden-xs"></td>
            <td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Masuk" name="masuksma" id="masuksma"></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Selesai" name="selesaisma" id="selesaisma"></td>
          </tr>
          
          <tr>
            <td><span class="form-control">Universitas</span></td>
            <td colspan="2"><input type="text" class="form-control" placeholder="Nama Sekolah / Perguruan tinggi" name="namauni" id="namauni"></td>

            <td><input type="text" class="form-control" placeholder="Jurusan" name="jurusanuni" id="jurusanuni"></td>
            <td><input type="number" class="form-control" placeholder="IPK" name="ipkuni" id="ipkuni"></td>
          </tr>
          <tr>
            <td colspan="" width="20%" class="hidden-xs"></td>
            <td colspan="2"><p align="right"><font size="+1">Lama Periode :</font></p></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Masuk" name="masukuni" id="masukuni"></td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="Selesai" name="selesaiuni" id="selesaiuni"></td>
          </tr>
        </tbody>
      </table>
      
    </div>
    
    <hr>
    <div class="form-group">
      <label>2. Pendidikan Non Formal: <small>(Termasuk Kursus, Pelatihan, Seminar, Lokakarya, dll) </small></label>
      <br>
      <label>Jumlah Pelatihan Yang pernah di ikut:</label>	
      <div class="input-group col-sm-6" >
        <div class="input-group-addon">
          <i class="fa fa-users"></i>
        </div>
        <input type="number" value="0" class="form-control" id="jlh_pelatihan" name="jlh_pelatihan" onChange="tambah_pelatihan(this.value)">
      </div>
      <!-- /.input group -->
      <table class="table table-bordered">
        <tbody id="tbody_pelatihan">
          <tr>
            <th>Nama Kursus / Pelatihan</th>
            <th>Penyelenggara</th>
            <th>tgl/bulan/tahun</th>
            <th>Keterangan</th>
          </tr>
        </tbody>
        <tfoot id="u_pelatihan">
          <!-- isi pelatihan -->
        </tfoot>
      </table>
      
    </div>
    
    <div class="form-group">
      <label>3. Bahasa Yang Dikuasai</label>
      
      <div class="box-body">
        <div class="form-group col-sm-6">
          <label>Jumlah Bahasa:</label>  
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-users"></i>
            </div>
            <input type="number" value="1" id="jlh_bahasa" name="jlh_bahasa" class="form-control" onChange="tambah_bahasa(this.value)">
          </div>
        </div>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th class="col-sm-6">Foreign Language Cimpetencies / Bahasa Asing Yang Dikuasai </th>
              <th>Spoken/Lisan</th>
              <th>Writer/Menulis</th>
            </tr>
          </tbody>
          <tfoot id="u_bahasa">
            <!-- isi bahasa -->
         </tfoot>
       </table>
     </div>
     
   </div>

 </div>
 <!-- /.box-body -->
</div>
<!-- /.box -->

</div>
<div class="col-sm-2">&nbsp</div>
</div>
<div class="tab">
 <div class="col-sm-2">&nbsp</div>
 <div class="col-md-8">

  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title"><span class="glyphicon glyphicon-briefcase"></span> Working Experience <small>Pengalaman Kerja</small> </h3>
    </div>
    <div class="box-body">
      <div class="form-group col-sm-6">
        <label>Jumlah perusahaan:</label>	
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-suitcase"></i>
          </div>
          <input type="number" value="0" class="form-control" placeholder="Jumlah Perusahaan" id="jlh_pengalaman" name="jlh_pengalaman" onChange="tambah_pengalaman(this.value)">
        </div>
        <!-- /.input group -->
      </div>
      <div id="head_pengalaman" class="form-group col-sm-12">
        <div class="form-group col-sm-12">
          <label>Nama perusahaan:</label>	
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-industry"></i>
            </div>
            <input type="text" class="form-control" placeholder="Nama Perusahaan">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group col-sm-12">
          <label>Bergerak Di Bidang:</label>	
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <input type="text" class="form-control" placeholder="Bergerak di Bidang">
          </div>
          <!-- /.input group -->
        </div>
        <div class="col-sm-12">
          <div class="form-group col-sm-6">
           <label>Jabatan:</label>	
           <div class="input-group">
             <div class="input-group-addon">
              <i class="fa fa-user-secret"></i>
            </div>
            <input type="text" class="form-control" placeholder="jabatan">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group col-sm-6">
         <label>Gaji:</label>	
         <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input type="text" onkeydown="return limitCharacter(event)" class="form-control" id="gaji1" placeholder="Gaji">
        </div>
        <!-- /.input group -->
      </div>
    </div>
    <div class="form-group col-sm-12">
      <div class="input-group">
      </div>
      <div class="col-sm-6">

        <label>Mulai bekerja:</label>	
        <div class="input-group">
          <div class="input-group-addon">
           <i class="fa  fa-calendar"></i>
         </div>
         <input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk">
       </div>
     </div>
     <div class="col-sm-2"></div>
     <div class="col-sm-6">
      <label>Berhenti</label>	
      <div class="input-group">
        <div class="input-group-addon">
         <i class="fa  fa-calendar"></i>
       </div>
       <input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Keluar">
     </div>
   </div>

   <!-- /.input group -->
 </div>
 <div class="form-group col-sm-12">
  <label>Alasan Berhenti:</label>	
  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-hand-stop-o"></i>
    </div>
    <textarea class="form-control" placeholder="Alasan Berhenti"></textarea>
  </div>
  <!-- /.input group -->
</div>

<div class="form-group col-sm-12">
  <label>Gambaran Pekerjaan:</label>	
  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-object-group"></i>
    </div>
    <textarea class="form-control" placeholder="Gambaran Pekerjaan"></textarea>
  </div>
  <!-- /.input group -->
</div>
</div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<div class="col-sm-2">&nbsp</div>
</div>
<div class="tab">
  <div class="col-sm-2">&nbsp</div>
  <div class="col-md-8">

    <div class="box box-warning">
      <div class="box-header">
        <h3 class="box-title"><span class="fa fa-medkit"></span> Riwayat Kesehatan</h3>
      </div>
      <div class="box-body">
       <div class="form-group">
        <!-- /.input group -->
        <table class="table table-striped table-bordered">
          <thead align="center">
            <th><span class="glyphicon glyphicon-ok"></span></th>
            <th>Diseases (Penyakit)</th>
            <th>Has Been Hospitalized at (dd/mm/yy) (Pernah dirawat pada (tgl/blm/thn))</th>
            <th>Notes (Keterangan)</th>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="jantung" id="jantung" name="jantung">
                </div>
              </td>
              <td>Heart disease (Jantung)</td>
              <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_jantung" name="t_jantung"></td>
              <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_jantung" name="n_jantung" ></td>
            </tr>
            <tr>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="hipertensi" id="hipertensi" name="hipertensi">
                </div>
              </td>
              <td>Hypertenssion (Hipertensi)</td>
              <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_hipertensi" name="t_hipertensi"></td>
              <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_hipertensi" name="n_hipertensi"></td>
            </tr>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="diabetes" id="diabetes" name="diabetes" >
              </div>
            </td>
            <td>Diabetes (Diabetes)</td>
            <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_diabetes" name="t_diabetes"></td>
            <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_diabetes" name="n_diabetes"></td>
          </tr>
        </tr>
        <tr>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="hepatitis" id="hepatitis" name="hepatitis">
            </div>
          </td>
          <td>Hepatitis (Hepatitis)</td>
          <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_hepatitis" name="t_hepatitis"></td>
          <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_hepatitis" name="n_hepatitis"></td>
        </tr>
      </tr>
      <tr>
        <td>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="kanker" id="kanker" name="kanker">
          </div>
        </td>
        <td>Cancer (Kanker)</td>
        <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_kanker" name="t_kanker"></td>
        <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_kanker" name="n_kanker"></td>
      </tr>
    </tr>
    <tr>
      <td>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="tbc" id="tbc" name="tbc">
        </div>
      </td>
      <td>TBC (TBC)</td>
      <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_tbc" name="t_tbc"></td>
      <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_tbc" name="n_tbc"></td>
    </tr>
  </tr>
  <tr>
    <td>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="asma" id="asma" name="asma">
      </div>
    </td>
    <td>Asthma (Asma)</td>
    <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_asma" name="t_asma"></td>
    <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_asma" name="n_asma"></td>
  </tr>
</tr>
<tr>
  <td>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="aids" id="aids" name="aids">
    </div>
  </td>
  <td>AIDS (AIDS)</td>
  <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_aids" name="t_aids"></td>
  <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_aids" name="n_aids" ></td>
</tr>
</tr>
<tr>
  <td>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="lainnya" id="lainnya" name="lainnya">
    </div>
  </td>
  <td>Other Diseases (Penyakit Lainnya)</td>
  <td><input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" disabled="disabled" id="t_lainnya" name="t_lainnya"></td>
  <td><input type="text" class="form-control" placeholder="Notes" disabled="disabled" id="n_lainnya" name="n_lainnya"></td>
</tr>
</tr>
</tbody>
</table>

</div>

</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

</div>
<div class="col-sm-2">&nbsp</div>
</div>

<!-- batas------------------------------------------------------------------tab------------------------------- -->
<div class="tab">
  <div class="col-sm-2">&nbsp</div>
  <div class="col-md-8">

    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title"><span class="fa fa-pencil-square-o"></span> Refrensi</h3>
      </div>
      <div class="box-body">
       <div class="form-group">
        <label>1. Silahkan tulis nama kerabat untuk referensi anda!</label><br>
        <label>Jumlah Refrensi:</label>  
      <div class="input-group col-sm-6" >
        <div class="input-group-addon">
          <i class="fa fa-users"></i>
        </div>
        <input type="number" value="1" class="form-control" id="jlh_kerabat" name="jlh_kerabat" onChange="tambah_refrensi(this.value)">
      </div>
      <hr>
      <!-- /.input group -->
      <table class="table table-bordered">
        <tbody id="u_ref_kerabat">
          <tr>
            <td>Name <br> <i>Nama</i></td>
            <td><input type="text" class="form-control" placeholder="Nama"></td>
            <td>Phone Number <br> <i>No Telepon</i></td>
            <td><input type="text" class="form-control" placeholder="No Telpon"></td>
          </tr>
          <tr>
            <td>Position <br> <i>Jabatan</i></td>
            <td><input type="text" class="form-control" placeholder="Jabatan"></td>
            <td>Company <br> <i>Perusahaan</i></td>
            <td><input type="text" class="form-control" placeholder="Perusahaan"></td>
          </tr>
          <tr>
            <td>Relation <br> <i>Hubungan</i></td>
            <td colspan="3"><input type="text" class="form-control" placeholder="Hubungan"></td>
          </tr>
        </tbody>
      </table>
        <!-- /.input group -->
    </div>
    
    <hr>
    <div class="form-group">
      <label>2.Silahkan isi nama orang yang dapat di hubungi segera dalam keadaan mendesak/darurat!</label>
      <br>
      <label>Jumlah Nama:</label>  
      <div class="input-group col-sm-6" >
        <div class="input-group-addon">
          <i class="fa fa-users"></i>
        </div>
        <input type="number" value="1" class="form-control" id="jlh_nama" name="jlh_nama" onChange="tambah_nama(this.value)">
      </div>
      <!-- /.input group -->
      <table class="table table-bordered">
        <tbody id="tbody_nama">
          <tr>
            <th>Name / <small><i>Nama</i></small></th>
            <th>Relation / <small><i>Hubungan</i></small></th>
            <th>Phone Number / <small><i>No Telepon</i></small></th>
          </tr>
        </tbody>
        <tfoot id="u_nama">
          <!-- isi hubungan -->
        </tfoot>
      </table>
      
    </div>
    
    <div class="form-group">
      <label>3. Silahkan isi kolom keterangan sesuai dengan kesedian Anda!</label>
      <br>

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>No</th>
              <th>Your Availability on : <br> <small><i>Kesediaan Anda perihal</i></small></th>
              <th>Keterangan</th>
            </tr>
          </tbody>
          <tfoot id="">

            <tr>
              <td>1</td>
              <td>
               Ditempatkan di kota lain <br>
               Jika ya ingin ditempatkan di mana? Jika tidak beri alasan
               </td>
             <td>
                <input type="text" class="form-control" placeholder="keterangan" name="kotalain" id="kotalain" required>
             </td>
           </tr>

            <tr>
              <td>2</td>
            <td>
               Gaji yang di inginkan
            </td>
             <td>
                <input type="text" id="ingin_gaji" name="ingin_gaji" class="form-control" placeholder="Gaji"  required>
             </td>
           </tr>
         </tfoot>
       </table>
     </div>
     <hr>

     <div class="form-group">
      

        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>
                Apakah Anda memiliki keluarga, kerabat, atau teman yang bekerja di perusahaan ini Sebutkan!
              </td>
              <td>
                <textarea name="keluarga_di_p" id="keluarga_di_p" required></textarea>
              </td>
            </tr>
            <tr>
              <td>
                Apakah Anda pernah Melamar ke Perusahaaj ini sebelumnya? Jika ya, untuk posisi apa?
              </td>
              <td>
                <textarea name="melamar_disini" id="melamar_disini" required></textarea>
              </td>
            </tr>
            <tr>
              <td>
                Apakah Anda perham terlibat dengan pihak kepolisian berkaitan dengan isu pelanggaran kriminal,atau pelanggaran perdata?
              </td>
              <td>
                <textarea name="pelanggaran_polisi" id="pelanggaran_polisi" required></textarea>
              </td>
            </tr>
            <tr>
              <td>
                Apakah anda memiliki kepemilikan atau keteriakatan dengan perusahaan lain?
              </td>
              <td>
                <textarea name="kepemilikan_p_lain" id="kepemilikan_p_lain" required></textarea>
              </td>
            </tr>
            <tr>
              <td>
                Jika Anda di terima, kapan Anda dapat mulai bekerja?
              </td>
              <td>
                <textarea name="mulai_kerja" id="mulai_kerja" required></textarea>
              </td>
            </tr>
          </tbody>
       </table>
     </div>
     
   </div>

 </div>
 <!-- /.box-body -->
</div>
<!-- /.box -->

</div>
<div class="col-sm-2">&nbsp</div>
</div>
<!-- batas---------------------------------------------------tab -->

<div class="col-sm-12">
 <div class="col-sm-2">&nbsp</div>
 <div class="col-sm-2">
   <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
 </div>
 <div class="col-sm-4" align="center" style="padding-top: 10px">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
<div align="right" class="col-sm-2" id="nextBtn">
  <button type="button" class="btn btn-success" id="Btn" onclick="nextPrev(1)">Next</button>
</div>
<div class="col-sm-2">&nbsp</div>
</div>
</div>
</div>




















</section>
<!-- /.content -->
</div>
</form>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker({ dateformat: 'MMMM D, YYYY' })
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#tanggallahir').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
<!--	script untuk rupiah-->
<script type="text/javascript">
 $(document).ready(function() {
      tambahsasudara(1);
      tambah_bahasa(1);
      tambah_pelatihan(0);
      tambah_pengalaman(0);
      tambah_nama(1);
      tambah_refrensi(1);
 });

  var ingin_gaji = document.getElementById('ingin_gaji');
  if(ingin_gaji){
    ingin_gaji.addEventListener('keyup', function(e){
      ingin_gaji.value = formatRupiah(this.value);
    });
  }

  function emailck(){
    var em = document.getElementById('email').value;
    // alert(em);
      var filter = /^([a-zA-Z-Z0-9_.-])+@(([a-zA-Z-Z0-9-]+.)+[a-zA-Z-Z0-9]{2,4})+$/;
      if(!filter.test(em)){
        alert('Format Email Salah');
            document.getElementById('email').value="";
      }
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
  
  
  function tambahsasudara(jumlah){
    if(jumlah>12){
     jumlah=12;
     document.getElementById('jlh_saudara').value=12;
   }
   if(jumlah<1){
     jumlah=1;
     document.getElementById('jlh_saudara').value=1;
   }
   var a=1;
   var isi="";
   while(a<=jumlah){
     isi+='<tr>'+
     '<td><span class="form-control">Saudara '+a+'</span></td><td><input type="text" class="form-control" placeholder="Nama" id="namasaudara'+a+'" name="namasaudara'+a+'"></td>'+
     '<td><input type="number" class="form-control" Placeholder="usia" id="umursaudara'+a+'" name="umursaudara'+a+'"></td>'+
     '<td><input type="text" class="form-control" placeholder="pendidikan terakhir" id="pendidikansaudara'+a+'" name="pendidikansaudara'+a+'"></td>'+
     '<td><textarea class="form-control" placeholder="keterangan" id="keterangansaudara'+a+'" name="keterangansaudara'+a+'"></textarea></td>'+
     '</tr>';
     a++;
   }	
   $("#u_saudara").html(isi);  
 }

function tambah_bahasa(jlh){
  if(jlh>5){
   jlh=5;
   document.getElementById('jlh_bahasa').value=5;
 }
 if(jlh<1){
   jlh=1;
    document.getElementById('jlh_bahasa').value=1;
   }
  var b=2;
  var isii = '<tr>'+
              '<td><span >English / Bahasa Inggris</span></td>'+
              '<td>'+
                  '<input type="radio" class="minimal" name="bhs1" value="active_lisan" checked> Active'+
                  '<input type="radio" class="minimal" name="bhs1" value="passive_lisan"> Passive'+
              '</td>'+
              '<td>'+
                  '<input type="radio" class="minimal-red" name="mns1" value="active_write" checked> Active'+
                  '<input type="radio" class="minimal-red" name="mns1" value="passive_write"> Passive'+
              '</td>'+
            '</tr>';


  while(b<=jlh){

   isii += '<tr>'+
   '<td><input type="text" class="form-control" Placeholder="Nama" id="nama_bahasa'+b+' " name="nama_bahasa'+b+'"></td>'+
   '<td>'+
   '<input type="radio" class="minimal" name="bhs'+b+'" value="active_lisan" checked> Active'+
   '<input type="radio" class="minimal" name="bhs'+b+'" value="passive_lisan"> Passive'+
   '</td>'+
   '<td>'+
   '<input type="radio" class="minimal-red" name="mns'+b+'" value="active_write" checked> Active'+
   '<input type="radio" class="minimal-red" name="mns'+b+'" value="passive_write"> Passive'+
   '</td>'+
   '</tr>';
   b++;
  }  
   $("#u_bahasa").html(isii);  
}


function tambah_refrensi(jlh){
  $.ajax({
   type: "POST",
   url: "w_f_kerabat.php", 
   data: {jlh:jlh},
   dataType: "text",  
   cache:false,
   success: 
   function(data){
     if(jlh>3){
       jlh=3;
       document.getElementById('jlh_kerabat').value=3;
     }
     if(jlh<=0){
       jlh=0;
       document.getElementById('jlh_kerabat').value=0;
     } 
     $('#u_ref_kerabat').html(data);
        // alert(data);  //as a debugging message.
      }
   });// you have missed this bracket
  return false;
}

function tambah_pelatihan(jlh){

  $.ajax({
   type: "POST",
   url: "w_f_pelatihan.php", 
   data: {jlh:jlh},
   dataType: "text",  
   cache:false,
   success: 
   function(data){
     if(jlh>5){
       jlh=5;
       document.getElementById('jlh_pelatihan').value=5;
     }
     if(jlh<=0){
       jlh=0;
       document.getElementById('jlh_pelatihan').value=0;
     }

     $('#u_pelatihan').html(data);
        // alert(data);  //as a debugging message.
      }
			  });// you have missed this bracket
  return false;

 //  var b=1;
 //  var isii='';
 //  $("#tbody_pelatihan").show();
 //  if(jlh>15){
 //   jlh=15;
 //   document.getElementById('jlh_pelatihan').value=15;
 // }
 // if(jlh<=0){
 //   jlh=0;
 //   document.getElementById('jlh_pelatihan').value=0;

 //   $("#tbody_pelatihan").hide();
 // }
 

 // while(b<=jlh){

 //   isii += '<tr>'+
 //   '<td><input type="text" class="form-control" placeholder="Nama Kursus/ Pelatihan" id="nama_pelatihan'+b+'"></td>'+
 //   '<td><input type="text" class="form-control" placeholder="Penyelenggara" id="penyelenggara'+b+'"></td>'+
 //   '<td><input type="text" class="form-control" data-inputmask="alias: dd/mm/yyyy" data-mask="" id="tanggal'+b+'" placeholder="Tanggal"></td>'+
 //   '<td><textarea class="form-control" placeholder="Keterangan" id="keterangan'+b+'"></textarea></td>'+
 //   '</tr>';
 //   b++;
 // }  
 // $("#u_pelatihan").html(isii);  
}

function tambah_nama(jlh){

  $.ajax({
   type: "POST",
   url: "w_f_nama.php", 
   data: {jlh:jlh},
   dataType: "text",  
   cache:false,
   success: 
   function(data){
     if(jlh>2){
       jlh=2;
       document.getElementById('jlh_nama').value=2;
     }
     if(jlh<=1){
       jlh=1;
       document.getElementById('jlh_nama').value=1;
     }

     $('#u_nama').html(data);
           //alert(data);  //as a debugging message.
        }
        });// you have missed this bracket
  return false;
}

function tambah_pengalaman(jlh){

  $.ajax({
   type: "POST",
   url: "w_f_pengalaman.php", 
   data: {jlh:jlh},
   dataType: "text",  
   cache:false,
   success: 
   function(data){
     if(jlh>5){
       jlh=5;
       document.getElementById('jlh_pengalaman').value=5;
     }
     if(jlh<=0){
       jlh=0;
       document.getElementById('jlh_pengalaman').value=0;
     }

     $('#head_pengalaman').html(data);
					// alert(data);  //as a debugging message.
				}
			  });// you have missed this bracket
  return false;



 // while(b<=jlh){
 //   isii += '<div class="form-group col-sm-12">'+
 //   '<label>Nama perusahaan:</label>'+
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa fa-industry"></i>'+
 //   '</div>'+
 //   '<input type="text" class="form-control" placeholder="Nama Perusahaan">'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="form-group col-sm-12">'+
 //   '<label>Bergerak Di Bidang:</label>'+
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa fa-bar-chart"></i>'+
 //   '</div>'+
 //   '<input type="text" class="form-control" placeholder="Bergerak di Bidang">'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="col-sm-12">'+
 //   '<div class="form-group col-sm-6">'+
 //   '<label>Jabatan:</label> ' +
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa fa-user-secret"></i>'+
 //   '</div>'+
 //   '<input type="text" class="form-control" placeholder="jabatan">'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="form-group col-sm-6">'+
 //   '<label>Gaji:</label>'+
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa fa-money"></i>'+
 //   '</div>'+
 //   '<input type="text" onkeydown="return limitCharacter(event)" class="form-control" id="gaji'+b+'" placeholder="Gaji">'+
 //   '</div>'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="form-group col-sm-12">'+
 //   '<div class="input-group">'+
 //   '</div>'+
 //   '<div class="col-sm-6">'+
 //   '<label>Mulai bekerja:</label>' +
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa  fa-calendar"></i>'+
 //   '</div>'+
 //   '<input type="text" class="form-control" data-inputmask="`alias`: `mm/yyyy`" data-mask="" placeholder="Masuk">'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="col-sm-2"></div>'+
 //   '<div class="col-sm-6">'+
 //   '<label>Berhenti</label>'+ 
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa  fa-calendar"></i>'+
 //   '</div>'+
 //   '<input type="text" class="form-control" data-inputmask="`alias`: `mm/yyyy`" data-mask="" placeholder="Keluar">'+
 //   '</div>'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="form-group col-sm-12">'+
 //   '<label>Alasan Berhenti:</label>' +
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+
 //   '<i class="fa fa-hand-stop-o"></i>'+
 //   '</div>'+
 //   '<textarea class="form-control" placeholder="Alasan Berhenti"></textarea>'+
 //   '</div>'+
 //   '</div>'+
 //   '<div class="form-group col-sm-12">'+
 //   '<label>Gambaran Pekerjaan:</label>' +
 //   '<div class="input-group">'+
 //   '<div class="input-group-addon">'+

 //   '<i class="fa fa-object-group"></i>'+
 //   '</div>'+
 //   '<textarea class="form-control" placeholder="Gambaran Pekerjaan"></textarea>'+
 //   '</div>'+
 //   '<hr class="hr">'+
 //   '</div>';

 //   b++;
 // }  
 // $("#head_pengalaman").html(isii);  
}


function naik(){
 window.scrollTo(0, 0);
}


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
  if (n == (x.length - 1)) {
    naik();
    document.getElementById("nextBtn").innerHTML = '<button type="submit" class="btn btn-success" id="nextBtn" >Send</button>';
  } else {
    naik();
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


//Penyakit disabled/enabled
$('#jantung').click(function(){
 $('#t_jantung').attr('disabled',!this.checked);
 $('#n_jantung').attr('disabled',!this.checked);
});

$('#hipertensi').click(function(){
 $('#t_hipertensi').attr('disabled',!this.checked);
 $('#n_hipertensi').attr('disabled',!this.checked);
});

$('#diabetes').click(function(){
 $('#t_diabetes').attr('disabled',!this.checked);
 $('#n_diabetes').attr('disabled',!this.checked);
});

$('#hepatitis').click(function(){
 $('#t_hepatitis').attr('disabled',!this.checked);
 $('#n_hepatitis').attr('disabled',!this.checked);
});

$('#kanker').click(function(){
 $('#t_kanker').attr('disabled',!this.checked);
 $('#n_kanker').attr('disabled',!this.checked);
});

$('#tbc').click(function(){
 $('#t_tbc').attr('disabled',!this.checked);
 $('#n_tbc').attr('disabled',!this.checked);
});

$('#asma').click(function(){
 $('#t_asma').attr('disabled',!this.checked);
 $('#n_asma').attr('disabled',!this.checked);
});

$('#aids').click(function(){
 $('#t_aids').attr('disabled',!this.checked);
 $('#n_aids').attr('disabled',!this.checked);
});

$('#lainnya').click(function(){
 $('#t_lainnya').attr('disabled',!this.checked);
 $('#n_lainnya').attr('disabled',!this.checked);
});



/*
  Notes:
  - Validasi
    + angka tdk bole minus
    + field mandatory
    + filter tanggal (end & start)
    + tanggal di field TTL

  - HEHE
    + Pendidikan Non Formal jlh=0 (masih ada field)
    + Style di bahasa
    + min max gaji di pengalaman kerja
    + Enable/disable penyakit (baru sampai diabetes)

    */

  </script>

