<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Application Form (Formulir Lamaran)</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <h1>Application Form</h1>
            <a href="form_permintaan_karyawan.php">Form Permintaan Karyawan Baru</a>
            ||
            <a href="form_wawancara.php">Form Wawancara</a>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <div class="col-md-1"></div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid col-md-10">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Data Pribadi (Personal Data)</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control" id="tgl" name="tgl" placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label>No KTP</label>
                      <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan No KTP">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" rows="3" placeholder="Masukkan Alamat (Sesuai Kartu Identitas)"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Jabatan yang dilamar</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan yang dilamar">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukkan Jenis Kelamin">
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status">
                    </div>
                    <div class="form-group">
                      <label>Kebangsaan</label>
                      <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" placeholder="Masukkan Kebangsaan">
                    </div>
                    <div class="form-group">
                      <label>No Telepon/HP</label>
                      <input type="text" class="form-control" id="hp" name="hp" placeholder="Masukkan No Telepon/HP">
                    </div>            
                  </div>
<!--                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
                
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Susunan Keluarga, Termasuk Anda</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".input-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".input-sm">
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Latar Belakang Pendidikan</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Wroking Experience (Pengalaman Kerja)</h3>
              </div>
              <div class="card-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>

                <h4>With icons</h4>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" placeholder="Email">
                </div>

                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-check"></i></span>
                  </div>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-dollar"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <div class="input-group-text"><i class="fa fa-ambulance"></i></div>
                  </div>
                </div>

                <h5 class="mt-4 mb-2">With checkbox and radio inputs</h5>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <input type="checkbox">
                        </span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><input type="radio"></span>
                      </div>
                      <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->

                <h5 class="mt-4 mb-2">With buttons</h5>

                <p>Large: <code>.input-group.input-group-lg</code></p>

                <div class="input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="#">Action</a></li>
                      <li class="dropdown-item"><a href="#">Another action</a></li>
                      <li class="dropdown-item"><a href="#">Something else here</a></li>
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item"><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Normal</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-danger">Action</button>
                  </div>
                  <!-- /btn-group -->
                  <input type="text" class="form-control">
                </div>
                <!-- /input-group -->

                <p>Small <code>.input-group.input-group-sm</code></p>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat">Go!</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Riwayat Kesehatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">

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
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Heart disease (Jantung)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Hypertenssion (Hiertensi)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Diabetes (Diabetes)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Hepatitis (Hepatitis)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Cancer (Kanker)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>TBC (TBC)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Asthma (Asma)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>AIDS (AIDS)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="jantung">
                          </div>
                        </td>
                        <td>Other Diseases (Penyakit Lainnya)</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                  </div>

                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->


            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Referensi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Text Disabled</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled>
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label>Textarea Disabled</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                  </div>

                  <!-- input states -->
                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with
                      success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                        warning</label>
                        <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                      </div>
                      <div class="form-group has-error">
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                          error</label>
                          <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option1">
                            <label class="form-check-label">Checkbox</label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option1" disabled>
                            <label class="form-check-label">Checkbox disabled</label>
                          </div>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="option1">
                            <label class="form-check-label">Radio</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="option1" disabled>
                            <label class="form-check-label">Radio disabled</label>
                          </div>
                        </div>

                        <!-- select -->
                        <div class="form-group">
                          <label>Select</label>
                          <select class="form-control">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Select Disabled</label>
                          <select class="form-control" disabled>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                          </select>
                        </div>

                        <!-- Select multiple-->
                        <div class="form-group">
                          <label>Select Multiple</label>
                          <select multiple class="form-control">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Select Multiple Disabled</label>
                          <select multiple class="form-control" disabled>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                          </select>
                        </div>

                      </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!--/.col (right) -->
              </div>
              <!-- /.row -->
            </div>

            <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0-alpha
          </div>
          <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
          reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="lte/plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- FastClick -->
      <script src="lte/plugins/fastclick/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="lte/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="lte/dist/js/demo.js"></script>
    </body>
    </html>