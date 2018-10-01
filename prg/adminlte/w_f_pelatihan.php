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
?>


<tr>
 	<td><input type="text" class="form-control" placeholder="Nama Kursus/ Pelatihan" id="nama_pelatihan<?php echo $b ; ?>" name="nama_pelatihan<?php echo $b ; ?>"></td>
 	<td><input type="text" class="form-control" placeholder="Penyelenggara" id="penyelenggara_pelatihan<?php echo $b ; ?>" name="penyelenggara_pelatihan<?php echo $b ; ?>"> </td>
 	<td><input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" id="tanggal_pelatihan<?php echo $b ; ?>" placeholder="Tanggal" name="tanggal_pelatihan<?php echo $b ; ?>"></td>
 	<td><textarea class="form-control" placeholder="Keterangan" id="keterangan_pelatihan<?php echo $b ; ?>" name="keterangan_pelatihan<?php echo $b ; ?>"></textarea></td>
 </tr>

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