<?php
include "prg/conn.php";
 
?>

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
</div>
<?php 
$n=0;
 $sql1 = "select * from lowker where status = 'open'";
  $query1 = $conn->query($sql1);
      foreach ($query1 as $row1) {
     $n++;
        $isi = $row1['isi'];
        $status = $row1['status'];
        if ($status == "open"){
          $status ="close";
          $textsts = "close lamaran";
        }else{
          $textsts = "open lamaran";

          $status ="open";
        }
       ?> 
    <?php 
    if($status=="close"){ ?>

             <!-- <div class=" tab"> -->
<div class=" tab" ">
          <div class="row">
              <div class="col-sm-3"></div>    
                  <div class="col-sm-6 " style="background-color: white; padding: 20px" >
                      <div class="box-body">
                          <p class="login-box-msg"><?= $isi?></p>
                              <div class="social-auth-links text-center">
                                <p>- Lamaran -</p>
                                <a href="prg/adminlte/f_lowker.php" class="btn btn-block btn-primary">
                                     Lamar
                                </a>
      
                              </div>

 
                      </div>
                  </div>
                  </div>
              <div class="col-sm-3"></div>   
          </div>   
   



<?php }else{?>
<div class="card-body register-card-body">
      <p class="login-box-msg " align="center">
<font size="+2"> Maaf Blum ada lowker saat ini </font>
</p>

    </div>
<?php }?>
  </div><!-- /.card -->
<?php }?>

</div>


<div class="col-sm-2">&nbsp</div>
</div>
<div class="col-sm-12 row">
 <div class="col-sm-2">&nbsp</div>
 <div class="col-sm-2">
   <button type="button" class="btn btn-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
 </div>
 <div class="col-sm-4" align="center" style="padding-top: 10px">
  <?php $nnn=0; while($n!=$nnn){echo '<span class="step"></span>'; $nnn++;} ?>
  
  </div>
<div align="right" class="col-sm-2" id="nextBtn">
  <button type="button" class="btn btn-success" id="Btn" onclick="nextPrev(1)">Next</button>
</div>
<div class="col-sm-2">&nbsp</div>
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


<script type="text/javascript">
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
    document.getElementById("nextBtn").innerHTML = '<button hidden type="submit" class="btn btn-success" id="nextBtn" >Send</button>';
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



  </script>