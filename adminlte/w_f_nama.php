<?php
$b=1;
$jlh=$_POST['jlh'];

   if($jlh>2){
    $jlh=2;
 }
 if($jlh<=0){
   $jlh=0;


 }
while ($b<=$jlh) {
?>
          <tr>
            <td><input type="text" id="no_penting_nama<?php echo $b; ?>" name="no_penting_nama<?php echo $b; ?>" class="form-control" placeholder="Nama"></td>
            <td><input type="text" id="no_penting_hubungan<?php echo $b; ?>" name="no_penting_hubungan<?php echo $b; ?>" class="form-control" placeholder="Hubungan"></td>
            <td><input type="text" id="no_penting_telepon<?php echo $b; ?>" name="no_penting_telepon<?php echo $b; ?>" class="form-control" placeholder="No Telepon" data-inputmask="'mask': '9999-9999-99999'" data-mask placeholder="0811-2233-4455"></td>
          </tr>
  
<?php
  $b++; 
}
?>

<script>
  $(function () {
    $('[data-mask]').inputmask()
  })
</script>