
<?php
$b=1;
$jlh=$_POST['jlh'];

   if($jlh>5){
    $jlh=5;
 }
 if($jlh<=0){
   $jlh=0;


 }
while ($b<=$jlh) {
	$idjasa="pengalaman_gaji_p_".$b;
?>

<script type="text/javascript">
var <?php echo $idjasa; ?> = document.getElementById('<?php echo $idjasa; ?>');
  if(<?php echo $idjasa; ?>){
    <?php echo $idjasa; ?>.addEventListener('keyup', function(e){
    <?php echo $idjasa; ?>.value = formatRupiah(this.value);
    });
  }
</script>

    <div class="box-body">
      <div id="head_pengalaman">
        <div class="form-group col-sm-12">
          <label>Nama perusahaan:</label>	
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-industry"></i>
            </div>
            <input type="text" class="form-control" placeholder="Nama Perusahaan" id="pengalaman_nama_p_<?php echo $b; ?>" name="pengalaman_nama_p_<?php echo $b; ?>">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group col-sm-12">
          <label>Bergerak Di Bidang:</label>	
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <input type="text" class="form-control" placeholder="Bergerak di Bidang" id="pengalaman_bergerak_di_<?php echo $b; ?>" name="pengalaman_bergerak_di_<?php echo $b; ?>">
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
            <input type="text" class="form-control" placeholder="jabatan" id="pengalaman_jabatan_p_<?php echo $b; ?>" name="pengalaman_jabatan_p_<?php echo $b; ?>">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group col-sm-6">
         <label>Gaji:</label>	
         <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-money"></i>
          </div>
          <input type="text" onkeydown="return limitCharacter(event)" class="form-control" id="pengalaman_gaji_p_<?php echo $b; ?>" name="pengalaman_gaji_p_<?php echo $b; ?>" placeholder="Gaji">
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
         <input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Masuk" id="pengalaman_mulai_k_<?php echo $b; ?>" name="pengalaman_mulai_k_<?php echo $b; ?>">
       </div>
     </div>
     <div class="col-sm-2"></div>
     <div class="col-sm-6">
      <label>Berhenti</label>	
      <div class="input-group">
        <div class="input-group-addon">
         <i class="fa  fa-calendar"></i>
       </div>
       <input type="text" class="form-control" data-inputmask="'alias': 'mm/yyyy'" data-mask="" placeholder="Keluar" id="pengalaman_keluar_p_<?php echo $b; ?>" name="pengalaman_keluar_p_<?php echo $b; ?>">
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
    <textarea class="form-control" placeholder="Alasan Berhenti" id="pengalaman_alasan_berhenti_<?php echo $b; ?>" name="pengalaman_alasan_berhenti_<?php echo $b; ?>"></textarea>
  </div>
  <!-- /.input group -->
</div>

<div class="form-group col-sm-12">
  <label>Gambaran Pekerjaan:</label>	
  <div class="input-group">
    <div class="input-group-addon">
      <i class="fa fa-object-group"></i>
    </div>
    <textarea class="form-control" placeholder="Gambaran Pekerjaan" id="pengalaman_gambaran_p_<?php echo $b; ?>" name="pengalaman_gambaran_p_<?php echo $b; ?>"></textarea>
  </div>
  <!-- /.input group -->
</div>
</div>
</div>



<hr class="hr">

<?php
	$b++;	
}
?>


<!-- Page script -->
<script>
  $(function () {
    $('[data-mask]').inputmask()
  })
</script>