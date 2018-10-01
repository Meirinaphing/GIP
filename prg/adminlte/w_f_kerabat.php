<?php
$b=1;
$jlh=$_POST['jlh'];

   if($jlh>3){
    $jlh=3;
 }
 if($jlh<=0){
   $jlh=0;


 }
while ($b<=$jlh) {
?>

          <tr>
            <td>Name <br> <i>Nama</i></td>
            <td><input type="text" id="kerabat_nama<?php echo $b; ?>" name="kerabat_nama<?php echo $b; ?>" class="form-control" placeholder="Nama"></td>
            <td>Phone Number <br> <i>No Telepon</i></td>
            <td><input type="text" id="kerabat_tlp<?php echo $b; ?>" name="kerabat_tlp<?php echo $b; ?>" class="form-control" placeholder="No Telepon" data-inputmask="'mask': '9999-9999-99999'" data-mask placeholder="0811-2233-4455"></td>
          </tr>
          <tr>
            <td>Position <br> <i>Jabatan</i></td>
            <td><input type="text" id="kerabat_posisi<?php echo $b; ?>" name="kerabat_posisi<?php echo $b; ?>" class="form-control" placeholder="Jabatan"></td>
            <td>Company <br> <i>Perusahaan</i></td>
            <td><input type="text" id="kerabat_perusahaan<?php echo $b; ?>" name="kerabat_perusahaan<?php echo $b; ?>" class="form-control" placeholder="Perusahaan"></td>
          </tr>
          <tr>
            <td>Relation <br> <i>Hubungan</i></td>
            <td colspan="3"><input type="text" id="kerabat_hubungan<?php echo $b; ?>" name="kerabat_hubungan<?php echo $b; ?>" class="form-control" placeholder="Hubungan"></td>
          </tr>
          <tr>
            <td></td>
            <td colspan="3"></td>
          </tr>
          <!-- Page script -->

<?php
  $b++; 
}
?>

<script>
  $(function () {
    $('[data-mask]').inputmask()
  })
</script>