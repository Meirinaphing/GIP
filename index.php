<?php
include "prg/conn.php";

  $sql1 = "select * from lowker where idlowker=1";
  $query1 = $conn->query($sql1);
      foreach ($query1 as $row1) {
        $isi = $row1['isi'];
        $status = $row1['status'];
        if ($status == "open"){
          $status ="close";
          $textsts = "close lamaran";
        }else{
          $textsts = "open lamaran";

          $status ="open";
        }
      }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lowker</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="prg/lte/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="prg/lte/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="prg/login.php"><b>Lowongan</b>Kerja</a>
  </div>

  <div class="card">
    <?php if($status=="close"){ ?>
    <div class="card-body register-card-body">
      <p class="login-box-msg"><?= $isi?></p>

      <div class="social-auth-links text-center">
        <p>- Lamaran -</p>
        <a href="prg/adminlte/f_lowker.php" class="btn btn-block btn-primary">
          Lamar
        </a>
      
      </div>

    </div>
    <!-- /.form-box -->
<?php }else{?>
<div class="card-body register-card-body">
      <p class="login-box-msg " align="center">
<font size="+2"> Maaf Blum ada lowker saat ini </font>
</p>

    </div>
<?php } ?>
  </div><!-- /.card -->

</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="prg/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="prg/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="prg/lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
